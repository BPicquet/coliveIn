<?php get_header(); ?>

<section id="frontpage-subheader" class="frontpage-subheader">
    <div class="frontpage-subheader__container">
		<video
			class="frontpage-subheader__container__video"
			muted
			autoplay>
				<source src="<?= get_template_directory_uri() . '/assets/img/colivein-hero-video.mp4' ?>" type="video/mp4" />
		</video>
		<div>
			<div class="container">
				<h1>Bienvenue dans nos maisons partagées pour séniors autonomes</h1>
				<p>Chez Colive’in on vit en parfaite autonomie dans des maisons familiales typiques de leurs régions, proche de toutes commodités (pharmacie, transport en commun…) <strong>regroupant 4 à 6 personnes</strong> par affinités souhaitant partager leur retraite sous le signe de la convivialité !</p>
				<p>Nous sommes convaincus que les relations humaines et le maintien de l’autonomie sont le ciment d’une retraite épanouie et dynamique.</p>
				<p>Ensemble, vivons une seconde jeunesse ?</p>
			</div>
		</div>
	</div>
</section>

<section id="frontpage-listing-advantage" class="frontpage-listing-advantage">
	<div class="frontpage-listing-advantage__container container">
		<h2>Des maisons pensées pour vous</h2>
		<p>Nos maisons disposent de grands espaces communs et privatifs conçu pour <strong>préserver l’autonomie.</strong> Cette ambiance sereine et confortable vous permettra de passer de beaux moments d’échange entre amis </p>
		<div class="frontpage-listing-advantage__container__card-wrapper">
			<div class="frontpage-listing-advantage__container__card-wrapper__card">
				<img src="https://colivein.com/wp-content/uploads/2022/11/AdobeStock_193059911-1.jpeg" alt="">
				<div>
					<p>Sécurité</p>
				</div>
			</div>
			<div class="frontpage-listing-advantage__container__card-wrapper__card">
				<img src="https://colivein.com/wp-content/uploads/2022/11/AdobeStock_142559683-1536x1025.jpeg" alt="">
				<div>
					<p>Chambre privative ou partagée</p>
				</div>
			</div>
			<div class="frontpage-listing-advantage__container__card-wrapper__card">
				<img src="https://colivein.com/wp-content/uploads/2022/11/AdobeStock_358627891.jpeg" alt="">
				<div>
					<p>Bien-être au quotidien</p>
				</div>
			</div>
			<div class="frontpage-listing-advantage__container__card-wrapper__card">
				<img src="https://colivein.com/wp-content/uploads/2022/11/AdobeStock_509401611-1-1536x1024.jpg" alt="">
				<div>
					<p>Services inclus</p>
				</div>
			</div>
			<div class="frontpage-listing-advantage__container__card-wrapper__card">
				<img src="https://colivein.com/wp-content/uploads/2022/11/AdobeStock_410079959.jpeg" alt="">
				<div>
					<p>Cuisine de qualité</p>
				</div>
			</div>
			<div class="frontpage-listing-advantage__container__card-wrapper__card">
				<img src="https://colivein.com/wp-content/uploads/2022/11/AdobeStock_296426930-1536x1025.jpeg" alt="">
				<div>
					<p>Maison connectée</p>
				</div>
			</div>
		</div>
		<a href="">
			<button>En savoir plus <i class="fa-sharp fa-solid fa-right-long fa-sm"></i></button>
		</a>
	</div>
</section>

<?php get_footer(); ?>