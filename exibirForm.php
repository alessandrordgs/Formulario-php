<?php 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $senha = $_POST['password'];
   $vaga = $_POST['vaga'];
   $about =$_POST['textarea'];

   


 echo "O nome enviado foi: ". $name;
  
   echo "<br />";
   echo "<br />";
  
 echo "O email enviado foi: ". $email;
  
   echo "<br />";
   echo "<br />";
  
 echo "A senha enviada foi: " .$senha = md5($senha);
  
   echo "<br />";
   echo "<br />";
  
   if (($_POST['schooling'])) {
    echo("Escolheu " . $_POST['schooling']);
}
    
    echo "<br />";
    echo "<br />";

    if (($_POST['lingua'])) {
    echo("Escolheu " . $_POST['lingua']);
    echo "<br />";
};

   echo "<br />";
   echo "<br />";

echo 'A vaga escolhida ' .$vaga;

   echo "<br />";
   echo "<br />";

 echo 'Sobre o canditato: ' .$about

 
?>