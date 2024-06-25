<?php

$socialIcons = [
	'https://integraltunes.bandcamp.com' => 'fa fa-bandcamp',
	'https://instagram.com' => 'fa fa-instagram',
    'https://x.com/integral' => 'fa fa-twitter',
	'https://facebook.com' => 'fa fa-facebook-square',
	'https://youtube.com' => 'fa fa-youtube-play',
];

$navItems = [
	'index.php'		=>  'Home',
	'about.php'		=>	'About',
	'music.php'		=>	'Music',
	'news.php'		=>	'News',
	'contact.php'	=>	'Contact',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
  	<title>Integral | Home | New EP Out Now!!</title>
  	<meta name="viewport" content="width=device-width,initial-scale=1" />
  	<meta name="description" content="" />
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tiny5&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://cdn.jsdelivr.net/npm/modern-normalize@v2.0.0/modern-normalize.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/shared.css" />
  	<link rel="stylesheet" type="text/css" href="css/main.css" />
  	<link rel="icon" href="favicon.png">
  	<meta property="og:title" content="" />
  	<meta property="og:description" content="" />
  	<meta property="og:image" content="" />
  	<meta name="twitter:card" content="" />
  	<meta name="twitter:site" content="" />
  	<meta name="twitter:title" content="" />
  	<meta name="twitter:description" content="" />
  	<meta name="twitter:image" content="" />
</head>
<body>
  	<header>
  		<div class="container">
  			<div class="pre-nav">
  				<div class="pre-nav-social">
  					<?php foreach ($socialIcons as $socialLink => $socialIcon) : ?>
  						<a class="pre-nav-social_icon" href="<?= $socialLink ?>" target="_blank"><i class="<?= $socialIcon ?>"></i></a>
  					<?php endforeach; ?>
  				</div>
  			</div>
  			<nav class="nav">
  				<div class="logo">
  					<a href="index.php">::integral</a>
  				</div>
  				<div class="nav-items">
  					<?php foreach ($navItems as $navLink => $navItem) : ?>
  						<a class="nav-items_item" href="<?= $navLink ?>"><?= $navItem ?></a>
  					<?php endforeach ?>
  				</div>
  			</div>
  		</nav>
  	</header>
  	<main>
  		<section class="hero">
  			<div class="hero-text">
  				<h1 class="hero-header">| trance | hard-dance | edm | synthwave |</h1>
  				<p class="hero-para">new EP `Longing` available now on <a href="https://bandcamp.com/integral">Bandcamp</a></p>
  			</div>
  			<div class="hero-buttons">
  				<a href="#" class="hero-button">Music</a>
  				<a href="#" class="hero-button">Booking</a>
  			</div>
  		</section>
  		<section class="about">
  			<div class="about-container">
  				<img class="about-img" src="./images/robodrop.png">
  				<div class="about-text-container">
  					<h1 class="about-text-section">It started with a kick...</h1>
  					<p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Et netus et malesuada fames ac. Massa vitae tortor condimentum lacinia quis vel eros donec. Nunc id cursus metus aliquam eleifend mi. Sed turpis tincidunt id aliquet risus feugiat in ante. Sit amet aliquam id diam. Leo duis ut diam quam nulla.</p>
  				</div>
  			</div>
  		</section>
  		<section class="player-container">
  			<div class="player-card">
			  	<iframe class="player-bandcamp" src="https://bandcamp.com/EmbeddedPlayer/album=311596282/size=large/bgcol=333333/linkcol=e99708/transparent=true/" seamless><a href="https://integraltunes.bandcamp.com/album/longing-ep">Longing EP by Integral</a></iframe>
				<div class="player-album-info">
					<h3 class="player-album-info-header">longing ep</h3><br>
					<p>Scottish dance music producer Integral invites you to immerse yourself in his debut EP, ‘Longing.’ Across five captivating uplifting trance tracks, you’ll experience thumping beats, aggressively catchy melodies, and slick rolling basslines. Longing EP is available to buy right now.</p><br>
					<p>Released June 23, 2024</p><br>
					<p>all rights reserved</p>
				</div>
			</div>
  		</section>
  	</main>
  	<footer class="footer">
  		<div class="footer-container">
  			<div class="logo">
  				<a href="index.php">::int3gral</a>
  			</div>
  			<div class="footer-social">
  				<?php foreach ($socialIcons as $socialLink => $socialIcon) : ?>
  					<a class="footer-social_icon" href="<?= $socialLink ?>" target="_blank"><i class="<?= $socialIcon ?>"></i></a>
  				<?php endforeach; ?>
  			</div>
  			<div class="footer-menu-items">
  				<?php foreach ($navItems as $navLink => $navItem) : ?>
  					<a class="footer-menu-item" href="<?= $navLink ?>"><?= $navItem ?></a>
  				<?php endforeach ?>
  			</div>
  		</div>
  		<p class="copyright">&copy; Copyright 2024 Integral</p>
  	</footer>
</body>
</html>