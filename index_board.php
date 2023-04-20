<?php 
$title='고객의소리';
include_once('inc/header.php');
require_once('inc/function.php');
?>
<body>
<?php include_once('inc/gnb.php')?>
    <div class="inner1700 indexBoard">
    <h1>자유게시판</h1>
    <h2>글목록</h2>
    <ul>
        <?php
        $conn = mysqli_connect("localhost","naeh","d!dasaram6","naeh");
        if (!$conn) {
            echo "게시판과의 연결이 실패했습니다.". mysqli_connect_error();
        }
        // else {
        //     echo "db연결성공";
        // }
        $sql = "SELECT * FROM `free_board`";
        $result = mysqli_query($conn, $sql);
        $list = '';
        while ($row = mysqli_fetch_array($result)) {
            $list = $list . "<li>{$row['number']}번 게시물 | <a href='view.php?number={$row['number']}'> {$row['name']}</a></li>";
        };
        echo $list;
        ?>
    </ul>
    <button class="indexBoardWrite"><a href="write.php">글쓰기</a></button>
    <div class="boardbuttons">
        <div class="search">
            <span>글검색</span>
            <form action="search_result.php" method="post" >
                <label for="search"></label>
                <input type="search" placeholder="검색할 키워드를 입력하세요" id="search" name="bdkey">
                <input type="submit" class="searchButton">
            </form>
        </div>
        <div class="delete">
            <span>글삭제</span>
            <form action="delete.php" method="post">
                <label for="msgdel"></label>
                <input type="text" id="msgdel" name="delnum" placeholder="삭제할 게시물번호를 입력하세요">
                <input type="submit" valu="삭제" class="deleteButton" >
            </form>
        </div>
    </div>
    </div>
    <?php 
    include_once('inc/footer.php');
    include_once('inc/script.php');
    ?>
</body>
</html>