<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>Installation | Wiggum a php framework</title>
	
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
						<h1>Installation</h1>
					</div>
					
					<section>
						<h3>Server Requirements</h3>
						<p>The Wiggum framework has a few system requirements. You will need to make sure your server meets the following requirements:</p>
						<ul>
							<li>PHP &gt;= 5.5.9</li>
							<li>PDO PHP Extension (required for database control)</li>
						</ul>
					</section>
					<section>	
						<h3>Installation Instructions</h3>
						<p>Use the skeleton application to quickly setup and start working on a new Wiggum Framework application.</p>
						<p>This skeleton application was built for Composer. This makes setting up a new Wiggum Framework application quick and easy.</p>
						
						<p>Run this command from the directory in which you want to install your new Wiggum Framework application:</p>
						<pre><code class="language-php">php composer.phar create-project wiggum/skeleton [my-app-name]</code></pre>						
						
						<p>Replace [my-app-name] with the desired directory name for your new application.</p>

						<p>Point your virtual host document root to your new application's <code>public/</code> directory.</p>
					
					</section>
				
				
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	