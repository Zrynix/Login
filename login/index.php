<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "Niet ingelogd<br>";
    echo '<a href="login_form.php">Login</a>';
} else {
}
 
?>
