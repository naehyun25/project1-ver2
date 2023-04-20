<?php 
include_once('inc/header.php');
require_once('inc/function.php');
$title = '고객의소리|글수정완료'
?>
<body>
    <?php include_once('inc/gnb.php')?>
    <div class="inner1700 modify">
        <?php
            $conn = mysqli_connect("localhost","naeh","d!dasaram6","naeh");
            if(!$conn){
                echo "게시판과의 연결이 실패했습니다.". mysqli_connect_error();
            }
            // else{
            //     echo "db연결성공 <br>";
            // }
            $number = $_POST['number'];
            $user_name = $_POST['name'];
            $user_msg = $_POST['message'];
            $sql = "UPDATE free_board SET name='$user_name',
            message= '$user_msg' WHERE number=$number";
            $result = mysqli_query($conn, $sql);
            if($result===false){
                echo "수정실패";
                error_log(mysqli_error($conn));
            }else{echo "글수정이 완료되었습니다.";}
            mysqli_close($conn);
        ?>
        <p><a href="index_board.php">고객의소리로 돌아가기</a></p>
        <p><a href="index.php">메인화면으로 돌아가기</a></p>
    </div>
    <?php 
    include_once('inc/footer.php');
    include_once('inc/script.php');
    ?>
</body>
</html>
