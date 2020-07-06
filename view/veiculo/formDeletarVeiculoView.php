<?php

//para que os metodos fiquem visiveis
    //include '../../control/ClienteController.php';
include '../../control/VeiculoController.php';
include '../../lib/util.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar Veículo</title>
</head>

<body>
    <?php

    $objVeiculoController = new VeiculoController();

    if (!empty($_POST['confirmar'])) {
        //chama o metodo DELETAR recebendo os dados do usuário através do metodo $_POST
        $objVeiculoController->remove($_GET['id']);
        //metodo header faz uma chamada para a tela de listagem
        //depois que realizou a adicao
        header("Location: listarVeiculoView.php");
    }
    ?>
    <!-- propriedade action faz a chamada do BD.php para pegar o valor do form
        o restante e um formulario comum usando o metodo POST
    -->
    <form action="formDeletarVeiculoView.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <label>Deseja Deletar o Registro?</label>
        <input type="hidden" name="confirmar" value="ok" /> <br>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />

        <input type="submit" value="Deletar">
    </form>
    <a href="listarVeiculoView.php"><button>Cancelar</button></a>
</body>
<style>
    body{
        background-color: #CCC;
    }   
</style>
</html>