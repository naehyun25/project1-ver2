<?php 
$title='고객의소리|글검색';
include_once('inc/header.php');
require_once('inc/function.php');
?>
<body>
<?php include_once('inc/gnb.php')?>
    <div class="inner1700">
    <h1>자유게시판</h1>
    <h2>검색결과</h2>
        <ul>
            <?php
            $conn = mysqli_connect("localhost","naeh","d!dasaram6","naeh");
            if (!$conn) {
                echo "게시판과의 연결이 실패했습니다." . mysqli_connect_error();
            } 
            // else {
            //     echo "db연결성공";
            // }
            $user_bdkey=$_POST['bdkey'];
            $sql = "SELECT * FROM `free_board` WHERE message LIKE '%$user_bdkey%'";
            $result = mysqli_query($conn, $sql);
            $list = '';
            while ($row = mysqli_fetch_array($result)) {
                $list = $list . "<li>{$row['number']} : <a href='view.php?number={$row['number']}'> {$row['name']}</a></li>";
            };
            echo $list;
            mysqli_close($conn);
            ?>
        </ul>
        <hr>
        <p><a href="index_board.php">고객의소리로 돌아가기</a></p>
        <p><a href="index.php">메인화면으로 돌아가기</a></p>
    </div>
    <?php 
    include_once('inc/footer.php');
    include_once('inc/script.php');
    ?>
</body>
</html>