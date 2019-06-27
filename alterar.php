<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Crud</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    include "config.php";
    //se o usuário não clicar no botão alterar ele so vai ler.
    if(!isset($_POST['alterar'])){
    $id=$_GET['id'];
    $nome = $_GET['nome'];
    $apelido = $_GET['apelido'];
    $endereco = $_GET['endereco'];
    }else{
        //se clicar
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $endereco = $_POST['endereco'];

        $sql = "update crud SET nome=:nome, apelido=:apelido, endereco=:endereco";
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":myid"=>$id,":nome"=>$nome,":apelido"=>$apelido,":endereco"=>$endereco));
    
        header("Location:index.php");
    }

    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- PHP_SELF FAZ AÇÃO E RECARREGA NA MESMA PÁGINA -->
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                <input type="text" name="id" value="<?php echo $id; ?>">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome;?>">
                <label>Apelido:</label>
                <input type="text" class="form-control" name="apelido"  value="<?php echo $apelido;?>">
                <label>Endereço:</label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $endereco;?>">
                <br>
                <td><input type="submit" name="alterar" value="Alterar"></td>

            </form>
            </div>
        </div>


    </div>
</body>

</html>