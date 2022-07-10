<?php
require_once('./contato.crud.php');

if ($_GET['idcontato'] != NULL) {
    $contato = fnFindContato($_GET['idcontato']);
} else {
    header('location: error.php?status=access-deny');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Contatos</title>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/test.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body >
<?php include "./navbar.php" ?>
<section class="contact adjust" id="contact">
        <div class="container">
        <div class="title">
            <h2>Pergunte Alguma Coisa...</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, corporis.</p>
            <div class="col-sm-12">               
            </div>
        </div>
        <div class="row clear-fix">
            <div class="offset-sm-2 col-sm-8">
            <form action="./contato.edit.php" method="post">
                    <div class="form-group">
                        <label for="nome_id">Nome:</label>
                        <input value="<?= $contato['nome'] ?>"  class="form-control" type="text" name="txtNome" id="nome_id" placeholder="Informe seu nome" require >
                    </div>
                    <div class="form-group">
                    <label for="email_id">Email:</label>
                    <input value="<?= $contato['email'] ?>" class="form-control" type="email" name="txtEmail" id="email_id" placeholder="Informe seu email" require >
                    </div>
                    <div class="form-group">
                    <label for="telefone_id">Telefone:</label>
                    <input value="<?= $contato['telefone'] ?>" class="form-control" type="text" name="txtTelefone" id="telefone_id" placeholder="Informe o seu telefone" require >
                    </div>
                    <div class="form-group">
                    <label for="mensagem_id">Mensagem:</label>                       
                    <input value="<?= $contato['mensagem'] ?>" class="form-control textarea" name="txtMensagem" id="mensagem_id" require></input>
                    </div>
                    <div class="form-group text-center">
                        <button value="<?= $contato['idcontato'] ?>" name="txtidcontato"  class="btn btnD1" type="submit">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    

</body>
</html>