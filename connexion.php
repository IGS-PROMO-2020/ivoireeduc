<?php


$db=mysqli_connect('localhost','root','');
mysqli_select_db($db, 'educ');
if (isset($_POST['connexion'])) {
  $username = $_POST['nom'];
  $password = sha1($_POST['pwd']);

  $sql = "SELECT * FROM membres WHERE nom = '$username' AND password = '$password'";
  $result = mysqli_query ($db, $sql) or die(mysqli_error($db));
  $row = mysqli_fetch_array($result);
  $num_rows = mysqli_num_rows ($result);

  if ($num_rows == 0) 
  {
  echo'<a href="login.php"> Erreur: impossible dexécuter la requête </a>';
  }
  


  else
  {
    session_start();
    $_SESSION ['username'] = $username;
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['avatar'] = $row['avatar'];
  header("location: index.php");
  }
}
?>