<?php
$title='고객의소리|글보기';
include_once('inc/header.php');
require_once('inc/function.php');
?>
<body>
    <?php include_once('inc/gnb.php')?>
    <div class="inner1700 view">
        <?php
            $conn = mysqli_connect("localhost","naeh","d!dasaram6","naeh");
            if (!$conn) {
                echo "게시판과의 연결이 실패했습니다." . mysqli_connect_error();
            } 
            // else {
            //     echo "db연결성공";
            // }
            $view_num = $_GET['number'];
              $sql = "SELECT * FROM `free_board` WHERE number=$view_num"; 
              $result = mysqli_query($conn, $sql);
        ?>
        <h1>자유게시판</h1>
        <?php
            if ($row = mysqli_fetch_array($result)) {
        ?>
        <h3>
            글번호 : <?php echo $row['number']; ?>
            / 글쓴이 : <?= $row['name']; ?>
        </h3>
        <div>
            <?= $row['message']; ?>
        </div>
        <?php
        }
        mysqli_close($conn);
        ?>
        <button class="modifybtn"><a href="update.php?number= <?= $row['number'] ?>">수정하기</a></button>
        <p><a href="index_board.php">고객의소리로 돌아가기</a></p>
        <p><a href="index.php">메인화면으로 돌아가기</a></p>
    </div>
    <?php 
        include_once('inc/footer.php');
        include_once('inc/script.php');
    ?>
    </body>
</html>