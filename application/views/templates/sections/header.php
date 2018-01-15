<!DOCTYPE html>
<head>
	<title><?php echo $page_title; ?></title>
	

    <meta http-equiv="content-language" content="<?php echo substr($language, 0, -1); ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="robots" content="<?php echo $meta_robots; ?>">

	<link type="image/png" href="/resource/images/site/favicon.png" rel="shortcut icon">
	<link type="text/css" href="/resource/stylesheet/reset.css" rel="stylesheet">
	<link type="text/css" href="/resource/stylesheet/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:100,200,300,400,500,600,700,800,900&amp;subset=cyrillic" rel="stylesheet">

	<link type="text/css" href="/resource/stylesheet/font-awesome.css" rel="stylesheet">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="/resource/lib/functions.js"></script>
	

</head>
<body dir="ltr">
	<main class="page">
		<header class="header page__header">
			<div class="inner">
				<div class="header__block header__block_top">
					<div class="logo">
						<div class="logo__inner">
							<span>Электротовары</span>
						</div>
					</div>
					<nav class="navigation-top">
						<ul class="menu">
							<li class="menu__item">
								<a href="" class="menu__link"></a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header__block header__block_bottom">
					<nav class="navigation-bottom">
						<ul class="menu">
							<?php foreach($Menu as $MenuItem): ?>
							<li class="menu__item">
								<a href="<?=$MenuItem['url'];?>" class="menu__link"><?=$MenuItem['ru_title'];?></a>
							</li>
							<?php endforeach; ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<section class="section">
			<div class="inner">
				<ol class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="breadcrumb__link"></a>
					</li>
				</ol>
			</div>
		</section>
		<section class="section">
			<div class="inner">	
				<aside class="sidebar">
					
				</aside>
				<div class="main">
					<div class="filters">
					
					</div>
					<div class="products">
						<article class="product">
							<div class="product__sale"></div>
							<div class="product__image"></div>
							<div class="product__price"></div>
							<div class="product__review"></div>
						</article>
					</div>
				</div>
			</div>
		</section>