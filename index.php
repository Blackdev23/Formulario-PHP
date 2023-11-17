<?php

if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $data_de_nascimento = $_POST['data_de_nascimento'];

    $response = mysqli_query($conexao,"INSERT INTO convidado(nome_convidado,telefone_convidado,email_convidado,data_nascimento) VALUES('$nome','$telefone','$email','$data_de_nascimento')");
}

?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container">
            <form action="index.php" method="post">
                <label for="input_label">Nome</label>
                <input type="text" name="nome" id="nome_id" class="input-text" placeholder="Inserir Nome"><br>

                <label for="input_label">Telefone</label>
                <input type="text" name="telefone" id="telefone_id" class="input-text" placeholder="Inserir Telefone"><br>
                
                <label for="input_label">Email</label>
                <input type="text" name="email" id="email_id" class="input-text" placeholder="Inserir Email"><br>
                
                <label for="input_label">Data de Nascimento</label>
                <input type="date" name="data_de_nascimento" id="data_nasc_id" class="input-text" placeholder="Inserir Data de Nascimento"><br>

                <input type="submit" name="submit" class="button">
            </form>
        </div>
    </main>
</body>
</html>