<?php
switch ($_SERVER["SCRIPT_NAME"]) {

    case "/includes/login.php":
        $CURRENT_PAGE = "Login";
        $PAGE_TITLE = "Login";
        break;
    case "/includes/register.php":
        $CURRENT_PAGE = "Register";
        $PAGE_TITLE = "Register";
        break;

    case "/includes/dashboard/index.php":
        $CURRENT_PAGE = "Dashboard";
        $PAGE_TITLE = "Dashboard";
        break;

    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome!";
}
