<?php 
$title='고객의소리|글쓰기';
include_once('inc/header.php');
require_once('inc/function.php');
?>
    <body>
    <?php include_once('inc/gnb.php')?>
    <div class="inner1700 write">
        <h1>글쓰기</h1>
            <div class="writeform">
                <form action="insert.php" method="post">
                    <div>
                        <label for="name"></label>
                        <input type="text" id="name" name="name" placeholder="작성자를 입력하세요">
                    </div>
                    <div>
                        <label for="message"></label>
                        <textarea name="message" id="message" placeholder="내용을 입력하세요" cols="60" rows="10"></textarea>
                    </div>
                    <input type="submit" value="글쓰기" class="indexBoardWrite">
                </form>
            </div>
        </div>
        <?php 
        include_once('inc/footer.php');
        include_once('inc/script.php');
        ?>
    </body>
</html>