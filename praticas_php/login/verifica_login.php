<?php

$login = $_POST['email'];
$senha = $_POST['password'];

if ($login == "1" && $senha == "1") {

  echo "login efetuado com sucesso";
  session_start();
  
  $_SESSION['login'] = $login;
  
  echo "<script>
        setTimeout(
          function(){
            window.location.href='./home/home.php' });
      </script>";

} else {
  echo "<script>
          window.location.href='./index.html';
          alert('e-mail ou senha errados');
       </script>";
}

?>