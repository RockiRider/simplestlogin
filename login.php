<?php

if (isset($_POST['login'])&& !empty($_POST['uname'])
    && !empty($_POST['psw'])) {
    
        if($_POST['uname']=='2ofHeartsBaby' &&
            $_POST['psw']=="random"){
                header('Location: addentry.html');
                exit;
            }else{
                $msg = 'Wrong Username or Password entered';
                } 
}

?>