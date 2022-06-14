<?php include "./vue/entete.html.php"; ?>
<!-- MAIN DE LA PAGE -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Panneau administration</h1>
	</div>
	<p>Bienvenue sur votre panneau d'administration afin de gérer les matchs et les championnats ! </p>
	<img src="https://www.icone-gif.com/gif/sports/ballon-foot/ballon-foot-00.gif" />

<p>Vous êtes connecté en tant que : <?php echo $_SESSION['user']->pseudo; ?></p>

</main>
<?php include "./vue/pied.html.php"; ?>