<?php require_once('./contato.crud.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulário de Listagem de Contatos</title>
</head>

<style>
section {
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	font-family: "Open Sans", sans-serif;
	background: url(../img/explore2.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	font-weight: 600;
}

.container {
	width: 100%;
	height: 700px;
	overflow-y: scroll;
	box-shadow: 0 10px 100px rgba(0, 0, 0, 0.5);
	margin-bottom: 60px;
}

table {
	width: 100%;
}

table, th, td {
	border: 1px solid #fff;
	border-collapse: collapse;
	text-align: left;
}

th {
	position: sticky;
	top: 0;
	box-sizing: border-box;
}

tr th:nth-child(1) {
	width: 60px;
	text-align: center;
	background:#122b53;
}

tr td:nth-child(1) {
	text-align: center;
	background: #f28123;
	color: #fff;
}
</style>
</head>
<body>

	
	<section>
		<div class="container">
			<table class="table table-success">
				<thead>
					<tr class="table-dark">
						<th>#</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>						
						<th>Mensagem</th>											
						<th>Ações</th>
					</tr>
				</thead>
            <tbody>
                <?php foreach (fnListaContato() as $contato) : ?>
                    <tr>
                        <td><?= $contato['idcontato'] ?></td>
                        <td><?= $contato['nome'] ?></td>
                        <td><?= $contato['email'] ?></td>
                        <td><?= $contato['telefone'] ?></td>
                        <td><?= $contato['mensagem'] ?></td>                        
                        <td>
                            <a href="contato.form.edit.php?idcontato=<?= $contato['idcontato'] ?>">[Editar]</a>
                            <a href="contato.delete.php?idcontato=<?= $contato['idcontato'] ?>" onclick="return confirm('Deseja realmente remover o contato ?')">[Excluir]</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>