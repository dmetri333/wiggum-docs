<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>Middleware | Wiggum a php framework</title>
	
		<?php include getenv('DOCUMENT_ROOT').'/includes/docHeader.php'; ?>
	</head>

	<body>

		<?php include getenv('DOCUMENT_ROOT').'/includes/header.php'; ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				
					<?php include getenv('DOCUMENT_ROOT').'/docs/nav.php'; ?>

				</div>
				<div class="col-md-7">
				
					
					<div class="page-header">
						<h1>Middleware</h1>
					</div>
						
					<section>	
						<p>You can run code before and after your Wiggum application to manipulate the Request and Response objects as you see fit. This is called middleware. Why would you want to do this? Perhaps you want to protect your app from cross-site request forgery. Maybe you want to authenticate requests before your app runs. Middleware is perfect for these scenarios.</p>
					</section>
					
					<section>		
					
						<h2>What is middleware?</h2>
						<p>Technically speaking, a middleware is a callable that accepts three arguments:</p>
						<ul>
							<li>\wiggum\http\Request</li>
							<li>\wiggum\http\Response</li>
							<li>callable - The next middleware callable</li>
						</ul>

						<p>It can do whatever is appropriate with these objects. The only hard requirement is that a middleware MUST return an instance of \Psr\Http\Message\ResponseInterface. Each middleware SHOULD invoke the next middleware and pass it Request and Response objects as arguments.</p>
					</section>
					
					<section>	
						<h2>How do I write middleware?</h2>
						<p>Middleware is a callable that accepts three arguments: a Request object, a Response object, and the next middleware. Each middleware MUST return an instance of \Psr\Http\Message\ResponseInterface.</p>
								
						<pre><code class="language-php">&lt;?php
/**
 * Example middleware closure
 *
 * @param  \wiggum\http\Request $request 
 * @param  \wiggum\http\Response $response
 * @param  callable $next     Next middleware
 *
 * @return \wiggum\http\Response
 */
function ($request, $response, $next) {
    echo 'BEFORE';
    $response = $next($request, $response);
	echo 'AFTER';

    return $response;
};
?&gt;</code></pre>

					</section>
					<section>
						<h2>How do I add middleware?</h2>
						
						<p>All of the middleares for the Wiggum framework are stored in the middleware file usally stored in <code>app/boot/middleware.php</code>.</p>
					
						<p>Middleware is invoked for every incoming HTTP request. Add application middleware with the Wiggum application instance’s <code>addMiddleware()</code> method:</p>
					
					<pre><code class="language-php">&lt;?php
$app->addMiddleware(function ($request, $response, $next) {
	echo 'BEFORE';
	$response = $next($request, $response);
	echo 'AFTER';

	return $response;
});
?&gt;</code></pre>
					
					</section>
				
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	