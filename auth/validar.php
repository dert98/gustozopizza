
    <?php
  $u = $_POST["usuario"];
  $p = $_POST["password"];
  include("../dbml.php");
  $dbml = new dbManager("usuarios","id");
  $data = $dbml->buscarUsuario($u);
  if ($data->num_rows == 1) {
    session_start();
    $_SESSION["usuario"] = $u;
    $_SESSION["password"] = $p;
    $dbml->close();
    echo "asd";
    header("Location: ../index.php");
  }else{
    header("Location: ../sections/login.php");
}
  exit();
?>
    