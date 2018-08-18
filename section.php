<section>
            <?php 
        	if (isset($_GET["p"])){
		$p = $_GET["p"];
		if (file_exists("conteudos/$p.php")){
			include ("conteudos/$p.php");
		} else {
			echo '<script> alert("OOOPs!!!\n\n Conteudo não encontrando!!!\n Tente mais tarde.\n\n\t\t\t\t\t Obrigado.");</script>';
                include ("conteudos/inicio.php");
		}	
                } else {
		include ("conteudos/inicio.php");
	}
            ?>	
</section>
