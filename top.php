<div id="top">
    <header>
        <nav>
            <ul>
                <li><a href="index.php">daFence</a></li>
                <li><a href="index.php">daFence</a></li>
                <li><a href="index.php">daFence</a></li>
                <li><a href="index.php">daFence</a></li>
                <?php
                ini_set('display_errors', 1);
                session_start();
                if (isset($_SESSION["usuario"])){
                echo " <li class='cliente'><a href='index.php?p=cliente'>"
                    .$_SESSION['usuario']
                    ."</a><ul class='user'>"
                    ."<li><a href='index.php?p=mydados'>Meus Dados</a></li>"
                    ."<li><a href='logoff.php'>Sair</a></li>"
                    ."</ul></li> ";
                } else {
                echo" <li class='cliente'><a href='index.php?p=login'>Espaço Cliente</a></li> ";              
                } ?>
            
            </ul>
        </nav>
    </header>
</div>