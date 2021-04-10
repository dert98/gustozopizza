
<?php
  if (isset($_SESSION)) {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), "", time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]);
    }
}
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["password"]);
session_destroy();
session_unset();
header("Location: ../index.php");
?>
    