<?php

	$campo_vazio = isset($_GET['campo_vazio']) ? $_GET['campo_vazio'] : 0;
	$pagamento = isset($_GET['pagamento']) ? $_GET['pagamento'] : 0;
	$presente = isset($_GET['presente']) ? $_GET['presente'] : 0;

?>

<?php
	if($pagamento == 1){

		if ($presente == "Presente1") {
			header("Location: https://www.mercadopago.com/mlb/checkout/start?pref_id=440160869-bde8835d-7295-4bad-9c34-2053685591cb");
		}
		
	}
?>
<script type="text/javascript">
	(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kimberli & Fernando</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site de casamento de Kimbeli e Fernando" />

	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
		function reply_click(clicked_id)
		{
		    $(".modal-body #PId").val(clicked_id);
		    $('#myModal').modal('show');
		}

	</script>

	</head>
	<body  >
		
	<div class="fh5co-loader"></div>
	
	<div id="page" >
	<nav class="fh5co-nav" role="navigation" style="background-color: black;">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php">Casamento...</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="galeria.html">Galeria</a></li>
						<li class="active"><a href="presentes.php">Lista de presentes</a></li>
						<li><a href="contato.html">Contato</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	</br>
	</br>
	</br>
	</br>

	<div >
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Lista de presentes</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<?php
							if($campo_vazio == 1){
								echo '<font color="#FF0000"><strong>Você esqueceu de preencher seu nome ou email ao selecionar um presente! Selecione novamente o presente e preencha todos os campos.</strong></font>';
							}
				        ?>
					</div>
			    </div>
				


				
				<div class="row animate-box" >
					<div class="col-md-2 col-sm-8">
					</div>

					<div class="col-md-5 col-sm-8">
						<h3>Presente 1</h3>
					</div>
								
					<div class="col-md-3 col-sm-4">
						<button type="button" class="btn btn-default btn-block" id="Presente1" onClick="reply_click(this.id)">Quero dar esse presente!</button>
					</div>	

					<div class="col-md-2 col-sm-8">
					</div>

				</div>

				<div class="row animate-box" >
					<div class="col-md-2 col-sm-8">
					</div>

					<div class="col-md-5 col-sm-8">
						<h3>Presente 2</h3>
					</div>
								
					<div class="col-md-3 col-sm-4">
						<button type="button" class="btn btn-default btn-block" id="Presente2" onClick="reply_click(this.id)">Quero dar esse presente!</button>
					</div>	

					<div class="col-md-2 col-sm-8">
					</div>

				</div>

				

				
			</div>
			
		</div>
	</div>

	</div>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Preencha suas informações</h4>
	      </div>
	      <div class="modal-body">

			<form method="post" action="Armazenarpresentes.php" id="Presentes">	
				<input type="hidden" id="PId" name="PId" value=""/>	
				<div class="form-group">
					<label for="name" class="sr-only">Nome</label>
					<input type="name" class="form-control" id="name" name="name" placeholder="Name">
				</div>
						
				<div class="form-group">
					<label for="email" class="sr-only">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-default btn-block">Pronto</button>	
				</div>				
			</form>
	      </div>
	    </div>

	  </div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-color: black;">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2019 Todos os direitos reservados.</small> 
					</p>
				</div>
			</div>

		</div>
	</footer>

</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>


	</body>
</html>
