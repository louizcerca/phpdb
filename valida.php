<?php
                require_once 'modelos/Pessoa.php';
                $pessoa = new Pessoa();
                $login = trim($_POST['login']);
                $pass = crypt($_POST['senha'], '$1$salt$');
                $exito = ($pessoa->signin($login, $pass));
                    if($exito){
                        session_start();
                        $_SESSION["usuario"] = $exito["nome"];
                        $_SESSION["id"] = $exito["idaluno"];
                        header("Location:index.php?p=cliente");
                
                } else {
                echo '<script> alert("Login e/ou Senha incorretos");'
                . 'window.location.href = "index.php?p=inicio"</script>';
                }
                
                
               /* <?php
    $login = trim($_POST["login"]);
    $senh = trim($_POST["senha"]);
        if (($login == "admin") && ($senh == "1234")){
            session_start();
            $_SESSION["usuario"] = $login;   
        } 
        header("Location:index.php?p=cliente");