<?php 
$pathSegments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$pathPiece = isset($pathSegments[1]) ? $pathSegments[1] : '';
?>
 
<header class="site-header">
	<div class="container">
		<a href="/" class="site-title">Wiggum</a>
		<div class="lead">a php framework</div>
	</div>
</header>