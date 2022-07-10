<?php
    require_once('./conexao.php');
    
    
    function fnAddContato($nomes, $emails, $telefones, $mensagens)
    {
        $query = "insert into contato(nome, email, telefone, mensagem) values ('{$nomes}', '{$emails}', '{$telefones}', '{$mensagens}')";
        $link = getConnection();
        
        $result = mysqli_query($link, $query);

        mysqli_close($link); 

        if($result) 
        {
            return true; 
        }
        return false; 
    }

    function fnListaContato()
    {
        $link = getConnection();
        $query = "select * from contato";

        $result = mysqli_query($link, $query);

        $contatos = array();
        while($contato = mysqli_fetch_assoc($result))
        {
            array_push($contatos, $contato);
        }
        
        mysqli_close($link);
        return $contatos;
    }

    function fnFindContato($idcontato)
{
    $link = getConnection();
    $query = "select * from contato where idcontato = {$idcontato}";

    $result = mysqli_query($link, $query);

    mysqli_close($link);
    return mysqli_fetch_assoc($result);
}

function fnUpdateContato($nome, $email, $telefone, $mensagem, $idcontato)
{
    $link = getConnection();

    $query = "update contato " .
        "set nome = '{$nome}' , " .
        "email = '{$email}', " .
        "telefone = '{$telefone}', " .
        "mensagem = '{$mensagem}' where idcontato = {$idcontato}";        

    $result = mysqli_query($link, $query);

    mysqli_close($link);             

    if ($result)
     {
        return true;
    }      
    return false;
}
function fnDeleteContato($idcontato)
{
    $link = getConnection();
    $query = "delete from contato where idcontato = {$idcontato};";   

    $result = mysqli_query($link, $query);
    mysqli_close($link);

     if ($result) {
        return true;
    }

    return false;
}
    