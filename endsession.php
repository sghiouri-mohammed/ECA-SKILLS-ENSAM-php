<?php

    if ( (time() - $_SESSION['last_login_time'] ) > 900 )
    {
        header('Location: signlog.php');
    }
    else{
        $_SESSION['last_login_time'] =time() ;
    }

?>