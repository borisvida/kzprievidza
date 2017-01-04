<!DOCTYPE html>
<html lang="sk">
	<head>
		<base href="/">
		<meta name="fragment" content="!">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<title><?php echo $pageTitle ?></title>
		<meta name="description" content="<?php echo $description ?>">
		<meta name="author" content="KZ Prievidza">
        <meta name="keywords" content="kresťanský, krestansky,
        zbor, prievidza, kresťan, krestan, hriech, peklo, večný, život, vecny,
        zivot, pokánie, spasenie, pán, pan, jezis, ježiš, kristus, znovuzrodenie,
        vykúpenie, vykupenie, očistenie, ocistenie, milosť, milost, boh, božia,
        bozia, svätý, krestania, kz, kresťania" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="language" content="sk">

		<link rel="shortcut icon" href="resources/favicon.ico">
		<link href="styles/style.css" media="screen" type="text/css" rel="stylesheet" />
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-77939414-1', 'auto');
			ga('send', 'pageview');
        </script>
	</head>

	<body>
		<div id="lang"><a href="http://en.kzprievidza.sk"><img src="resources/english.png" title="Anglická verzia stránky" alt="Anglická verzia stránky"></a></div>
		<?php include 'views/_header.html'?>
		<div id="outer">
			<?php include 'views/_navigation.html' ?>
			<div id="inner">
				<div id="content">
					<?php include $content ?>
				</div>
				<?php include 'views/_casy.html'?>
			</div>
			<?php include 'views/_aktuality.php'?>
		</div>
		<?php include 'views/_footer.html'?>
	</body>
</html>
