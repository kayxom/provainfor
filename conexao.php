<?php
$host ="localhost";
$user ="root";
$senha="";
$banco="provainfor";

$conexao = new mysqli($host,$user,$senha,$banco);
     if(!$conexao){

    //echo'de errado'.mysqli_connect_error();
}
else{
    //echo 'deu certo';
}
?>
