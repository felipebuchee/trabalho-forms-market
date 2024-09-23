<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
}

if (empty($nome) || empty($email)) {
    print "Todos os campos são obrigatórios!";
}

else{
    print "Nome:" . htmlspecialchars($nome) . "<br>";
    print "Nome:" . htmlspecialchars($email) . "<br>";
}

if(filter_var($email, FILTER_VALIDATE_EMAIL === false)){
    print "Formato de email inválido!";
}