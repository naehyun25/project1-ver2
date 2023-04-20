<?php 
$title ='고객의소리|글삭제';
include_once('inc/header.php');
require_once('inc/function.php');
?>
<body>
    <?php include_once('inc/gnb.php')?>
    <div class="inner1700">
        <h1>자유게시판</h1>
        <h2>삭제결과</h2>
        <ul>
            <?php
            $conn = mysqli_connect("localhost","naeh","d!dasaram6","naeh");
            if (!$conn) {
                echo "게시판과의 연결이 실패했습니다."  . mysqli_connect_error();
            } 
            // else {
            //     echo "db연결성공";
            // }
            $num=$_POST['delnum'];
            $sqlDEL = "DELETE FROM `free_board` WHERE number=$num";
            mysqli_query($conn, $sqlDEL);
            echo $num .'번째 글이 삭제 되었습니다.';
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