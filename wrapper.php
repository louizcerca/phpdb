<div id="wrapper">
    <section>
        <?php 
            if (isset($_GET["p"])){
		$p = $_GET["p"];
		if (file_exists("conteudos/$p.php")){
			include ("conteudos/$p.php");
		} else {
			echo '<script> alert("Conteudo não encontrand");</script>';
			include ("conteudos/inicio.php");
		}	
	} else {
		include ("conteudos/inicio.php");
	}
?>	
    </section>
</div>