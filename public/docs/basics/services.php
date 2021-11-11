<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>Controllers | Wiggum</title>
	
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
						<h1>Services</h1>
					</div>
						
					<section>	
						<p>Services get attach to Controllers as properties, all services are dependency container. Wiggum uses a dependency container to prepare, manage, and inject application dependencies. </p>
						<p>All of the service declarations for the Wiggum framework are stored in the services file usally found in <code>app/boot/services.php</code>.</p>
					</section>
					
					<section>		
					
						<h2>How to use the container</h2>
						<p>You can fetch services from your controller implicitly. You can implicitly fetch services from the container like this:</p>
						
						<pre><code class="language-php">&lt;?php
 $myService = $this->myService;
?&gt;</code></pre>
					</section>
					
					<section>	
						<h2>How do I write services?</h2>
						<p>A service is a callable that returns a object. Below is an example of adding the database service to your application.</p>
								
						<pre><code class="language-php">&lt;?php
$app->addService('db', function() {
	$config = $this->config->get('services.db');
	return new wiggum\services\db\DB($config);
});
?&gt;</code></pre>

					</section>
					
					<section>
						<h2>Required services</h2>
						<p>Your application MUST implement these required services:</p>
						<ul>
							<li>exceptionHandler</li>
							<li>errorHandler</li>
						</ul>
					</section>
					
				
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	