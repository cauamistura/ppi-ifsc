<?php  

 if (!(isset($_GET["altura"]) && isset($_GET["peso"]))){
   echo "<script> alert('Preencha todos os campos!'); </script>";
   exit();
 }

 $altura = $_GET["altura"];
 $peso = $_GET["peso"];

 if (($altura == null || $peso == null)){
   echo "<script> 
            alert('Preencha todos os campos!'); 
            window.location.href = 'index.html';
         </script>";
   exit();
 }

 function imc($altura, $peso){
   $imc = $peso / ($altura * $altura);
   return $imc;
 }

 echo "<script> 
          alert('Seu é: ".imc($altura, $peso)."'); 
          window.location.href = 'index.html';
       </script>";
?>