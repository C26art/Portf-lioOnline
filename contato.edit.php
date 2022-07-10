<?php

require_once('./contato.crud.php');

if($_POST['txtNome'] == NULL || $_POST['txtEmail'] == NULL || $_POST['txtTelefone'] == NULL || $_POST['txtMensagem'] == NULL || $_POST['txtidcontato'] == NULL)
    {
        header('location: error.php?status=access-deny'); 
        die(); 
    }

    $result = fnUpdateContato($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtTelefone'], $_POST['txtMensagem'], $_POST['txtidcontato']);
    
    if ($result) {
        header("location: contato.list.php?idcontato={$_POST['txtidcontato']}&status=success");
        die();
    }
    
    header("location: contato.form.edit.php?idcontato={$_POST['txtidcontato']}&status=fail");
    die();
