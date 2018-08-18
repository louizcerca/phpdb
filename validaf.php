    <?php
    $login = trim($_POST["login"]);
    $senh = trim($_POST["senha"]);
    //require_once 'modelos/Pessoa.php';
    //$pessoa = new Pessoa();
    //$pass = crypt($_POST['senha'], '$1$salt$');
    //$exito = ($pessoa->signinf($login, $pass));
        if (($login == "admin") && ($senh == "1234")){
            session_start();
            $_SESSION["usuario"] = $login;   
            header("Location:index.php?p=cadastroadm");
            }  
            /*else if($exito){
                session_start();
                $_SESSION["usuario"] = $exito["nome"]; 
                header("Location:index.php?p=func&c=sist");
            }*/
            else {
            echo '<script> alert("Login e/ou Senha incorretos");'
            . 'window.location.href = "index.php?p=inicio"</script>';
            } 
?>