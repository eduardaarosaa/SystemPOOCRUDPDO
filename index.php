<?php
include "config.php";
//$conexao=$base->query("select * from crud");
//$regristo=$conexao->fetchAll(PDO::FETCH_OBJ);
//MODO 2
$regristo = $base->query("Select * from crud")->fetchAll(PDO::FETCH_OBJ);

?>
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
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Apelido</th>
                            <th scope="col">Endereço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            foreach ($regristo as $row) {
                                $id = $row->id;
                                $nome = $row->nome;
                                $apelido = $row->apelido;
                                $endereco = $row->endereco;



                                ?>

                                <th scope="row"><?php echo $id ?></th>
                                <td><?php echo $nome ?></td>
                                <td><?php echo $apelido ?></td>
                                <td><?php echo $endereco ?></td>
                                <td> <a href="deletar.php?id=<?php echo $row->id; ?>"><input type="submit" name="delete" value="Delete"></a></td>
                                <td><a href="alterar.php?id=<?php echo $row->id; ?>&nome=<?php echo $row->nome;?>&apelido=<?php echo $row->apelido;?>&endereco=<?php echo $row->endereco;?>"><input type="submit" name="alterar" value="Alterar"></a></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
                <label>Apelido:</label>
                <input type="text" class="form-control" name="apelido" placeholder="Apelido">
                <label>Endereço:</label>
                <input type="text" class="form-control" name="endereco" placeholder="Endereço">
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-12">
                <input type="submit" name="inserir" value="Inserir">
    

            </div>
        </div>
        <br>
        
        </div>

    </div>

</body>

</html>