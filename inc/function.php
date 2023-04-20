    <?php
    function output($value){
        print_r($value);
    }
    ?>
    <?php
        function authenticate_user($email, $password){
            if($email==user_name && $password==password){
                return true;
            }
        }
        function redirect($url){
            header("Location:$url");
            exit();
        }
    function user_is_auth(){
        return isset($_SESSION['email']);
    };
    function confirm_user_is_auth(){
        if(!user_is_auth()){
            redirect('login.php');
            exit();
        };
    };
    ?>