    <?php
        require_once "src/listaDDD.php";
        require_once "src/pegarCEP.php";
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        <h1>dados do Cliente</h1>
        <?=dadosCliente($dados['cliente1']);?>
        <div id="ender">
            <form action="" method="post">
                <label for="cep">Informar Cep: </label>
                <input type="text" name="cep" id="cep">
                <button type="submit">Buscar Endereço</button>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD']==="POST"){
                    $cep =trim($_POST['cep']);
                    
                    pegarEndereco($cep);

                }
            ?>

        </div>
        
    </body>
</html>