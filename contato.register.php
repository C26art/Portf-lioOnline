<?php

    require_once('./contato.crud.php');

    if($_POST['txtNome'] == NULL || $_POST['txtEmail'] == NULL || $_POST['txtTelefone'] == NULL || $_POST['txtMensagem'] == NULL)
    {
        header('location: error.php?status=access-deny'); 
        die(); 
    }

    $result = fnAddContato($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtTelefone'], $_POST['txtMensagem']);
    echo $result;

    header('location: contato.list.php');