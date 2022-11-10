<?php
    function verify_session()
    {
        return isset($_SESSION['user']);
    }
?>