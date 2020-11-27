<?php
switch ($_SERVER["SCRIPT_NAME"]) {

    case "./login.php":
        $CURRENT_PAGE = "Login";
        $PAGE_TITLE = "Login";
        break;
    case "./register.php":
        $CURRENT_PAGE = "Register";
        $PAGE_TITLE = "Register";
        break;

    case "./dashboard/index.php":
        $CURRENT_PAGE = "Dashboard";
        $PAGE_TITLE = "Dashboard";
        break;

    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Home Page - Welcome!";
}
