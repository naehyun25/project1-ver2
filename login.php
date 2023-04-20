<?php
session_start();
$title='로그인페이지';
include_once('inc/header.php');
include_once('inc/config.php');
require_once('inc/function.php');
if(user_is_auth()){
    redirect('logout.php');
}
if(isset($_POST['login'])){
    $email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password=$_POST['password'];
if($email==false){
    $status='이메일 형식에 맞게 입력해주세요';
}
if(authenticate_user($email,$password)){
    $_SESSION['email']=$email;
    redirect('index.php');
}else{
    $status='비밀번호를 확인해주세요';
}
}
?>
<body>
    <?php
      include_once('inc/gnb.php');
    ?>
    <div class="inner1700 login">
        <form action="" method="post">
            <p>
                <label for="email">이메일:</label>
                <input type="email" id="email" name="email">
            </p>
            <p>
                <label for="password">비밀번호:</label>
                <input type="password" id="password" name="password">
            </p>
            <p><input type="submit" name="login" value="로그인"></p>
        </form>
        <p>test 계정정보는 이메일 : user@user.com 비밀번호 : 1234 입니다.</p>
        <div class="error">
            <p>
                <?php
                    if(isset($status)){
                        echo $status;
                    }
                ?>
            </p>
        </div>
    </div>
    <?php
    include_once('inc/footer.php');
    include_once('inc/script.php');
    ?>
</body>


