
<?php
$title='고객의소리|글수정하기';
include_once('inc/header.php');
require_once('inc/function.php');
?>
<body>
<?php include_once('inc/gnb.php')?>
    <div class="inner1700 update">
        <h1>글수정하기</h1>
        <?php
        $conn = mysqli_connect("localhost","naeh","d!dasaram6","naeh");
        if (! $conn) {
            echo "게시판과의 연결이 실패했습니다." . mysqli_connect_error();
        }
        // else {
        //     echo "db연결성공";
        // }
        $view_num = $_GET['number'];
        $sql = "SELECT * FROM `free_board` WHERE number=$view_num";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php
            if($row=mysqli_fetch_array($result)){
            };
        ?>
        <form action="modify.php" method="post" class="modify">
            <input type="hidden" name="number" value="<?=$view_num?>">
            <div class="modifyauthor">
                <label for="name">작성자</label>
                <input type="text" id="name" name="name" value="<?=$row ['name'] ?>">
            </div>
            <div class="modifyMsg">
                <label for="message">메시지:</label>
                <textarea name="message" id="message" cols="30" rows="10 <?= $row ['message']?>">
                <?= $row['message']?>
                </textarea>
            </div>
            <button type="submit" value="전송" class="updatebtn">수정하기</button>
        </form>
    </div>
    <?php 
    include_once('inc/footer.php');
    include_once('inc/script.php');
    ?>
</body>
</html>
