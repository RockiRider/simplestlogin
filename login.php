<?php

if (isset($_POST['login'])&& !empty($_POST['uname'])
    && !empty($_POST['psw'])) {
    
        if($_POST['uname']=='random' &&     //Replace "Random" with Username
            $_POST['psw']=="random"){       //Replace "Random" with Password
                header('Location: addentry.html');
                exit;
            }else{
                $msg = 'Wrong Username or Password entered';
                } 
}

?>
