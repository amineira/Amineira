
        <?php

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $observacao = addslashes($_POST['observacao']);
    $doces = array($_POST['doce']);
    
    $doce = json_encode($doces);

    $to = "contato@amineiradoceriagourmet.com.br";
    $subjet = "Orçamento do Site Mineira";
     $body = "Nome: ".$nome. "\r\n".
             "telefone: ".$telefone. "\r\n".
            "email: ".$email. "\r\n".
             "observacao: ".$observacao. "\r\n".
            "doce: ".$doce.  "\r\n".

    // $content = new SendGrid\Content("text/html", "Olá Mineira", "<br> <br> temos mais um pedido: <br> Nome: $nome <br> Telefone: $telefone <br> E-mail: $email <br> Observação: $observacao <br> Doces: $doce")
            
    $header = "From:contato@amineiradoceriagourmet.com.br"."\r\n".
                "Reply-To:".$email."\e\n".
                "X=Mailer:PHP/".phpversion();

    header("Location: index.php#signup");           

    if(mail($to,$subjet,$body,$header)){
        
        
    }else{
        echo("O email nao foi enviado");
    }


    /*    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $observacao = addslashes($_POST['observacao']);
    $doce = addslashes($_POST['doce']);
    $doce2 = addslashes($_POST['doce2']);
    $doce3 = addslashes($_POST['doce3']);
    $doce4 = addslashes($_POST['doce4']);
    $doce5 = addslashes($_POST['doce5']);
    $doce6 = addslashes($_POST['doce6']);
    $quantidade = addslashes($_POST['quantidade']);
    $quantidade2 = addslashes($_POST['quantidade2']);
    $quantidade3 = addslashes($_POST['quantidade3']);
    $quantidade4 = addslashes($_POST['quantidade4']);
    $quantidade5 = addslashes($_POST['quantidade5']);
    $quantidade6= addslashes($_POST['quantidade6']);
    
    $doces = '';
    $quantidade = '';

    $doces = array_map( 'addslashes', $doces );

    $to = "contato@amineiradoceriagourmet.com.br";
    $subjet = "Contato - Programador";
    $body = "Nome: ".$nome. "\r\n".
            "telefone: ".$telefone. "\r\n".
            "email: ".$email. "\r\n".
            "observacao: ".$observacao. "\r\n".
            "doce: ".$doces.  "| quantidade: ".$quantidade. "\r\n".
            "doce: ".$doces2. "| quantidade: ".$quantidade2. "\r\n".
            "doce: ".$doces3. "| quantidade: ".$quantidade3. "\r\n".
            "doce: ".$doces4. "| quantidade: ".$quantidade4. "\r\n".
            "doce: ".$doces5. "| quantidade: ".$quantidade5. "\r\n".
            "doce: ".$doces6. "| quantidade: ".$quantidade6. "\r\n".
            
    $header = "From:From:contato@amineiradoceriagourmet.com.br"."\r\n".
                "Reply-To:".$email."\e\n".
                "X=Mailer:PHP/".phpversion();

    if(mail($to,$subjet,$body,$header)){
        echo("Email enviado com sucesso");
    }else{
        echo("O email nao foi enviado");
    }*/

        ?>



