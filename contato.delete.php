<?php

require_once('./contato.crud.php');

if ($_GET['idcontato'] == NULL) {
    header('location: error.php?status=access-deny'); 
    die(); 
}

$result = fnDeleteContato($_GET['idcontato']);

if ($result) {
    header("location: contato.list.php?status=success");
    die();
}

header("location: contato.list.php?status=fail");
die();
