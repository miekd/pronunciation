<? require_once("_data.php"); ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<title>How to pronounce &lsquo;<?=$_data['word']; ?>&rsquo;</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="/favicon.ico" />

	<style>@import "/assets/css/main.css";</style>

	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<div class="root">
	<article class="pronunciation">
		<hgroup>
			<h1><?=$_data['word']; ?></h1>
			<h2><?=$_data['syllables']; ?></h2>
			<h3>[<?=$_data['pronunciation']; ?>]</h3>
		</hgroup>
		<strong><?=$_data['wordtype']; ?></strong>
		<p><?=$_data['definition']; ?></p>
	</article>
</div>
</body>
</html>