<?php
include ("conexao.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);



$consuta ="INSERT INTO usuario(nome, email, senha)
VALUES('$nome','$email','$senha')";
if($conexao=mysqli_query($conexao, $consuta)){
    echo "cadastro realizado com o sucesso";
}
else{
    echo "erro ao se cadastrar".mysqli_connect_error($conexao);

}
?>


//aqui o cad e serve para onde ele vai guarda as informaçoes da conexao.php//
