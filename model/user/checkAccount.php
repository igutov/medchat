<?php
function loginCheck($data){
    if (!isset($_SESSION['logged_user'])) {
        return 1;
    }
    else {
        switch ($_SESSION['logged_user']->user_type) {
            case 0:
            return 'patient';
            break;

            case 1:
            return 'doctor';
            break;

            case 2:
            return 'admin';
            break;
        }
    }
}
?>
