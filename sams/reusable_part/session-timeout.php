<?php



if ((time() - $_SESSION['login_time']) >= 300  && isset($_SESSION['login_time'])) {
    unset($_SESSION['user']);
    //session_destroy();
    $_SESSION['timeout'] = " <div class ='error'>Your Session Timeout</div> "; // destroy session.
    header("location:" . SITEURL . "index.php");
    //die(); // See https://thedailywtf.com/articles/WellIntentioned-Destruction
    //redirect if the page is inactive for 30 minutes
} else {
    $_SESSION['login_time'] = time();
    // update 'login_time' to the last time a page containing this code was accessed.
}