<?php 

    session_start();

    if(isset($_SESSION['logar'])) {
        session_destroy();
        unset($_SESSION['logar']);
    } else {
        session_destroy();
    }