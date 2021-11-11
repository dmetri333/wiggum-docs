<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>Directory | Wiggum a php framework</title>
	
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
						<h1>Directory Structure</h1>
					</div>
					
					<section>
						<p>The default application structure is intended to provide a great starting point for both large and small applications. Of course, you are free to organize your application however you like. Wiggum imposes almost no restrictions on where any given class is located - as long as Composer can autoload the class.</p>
					</section>
					
					<section>
						<h2>The Root Directory</h2>
                        
                        <section class="sub-section">
                      		<h5>The App Directory</h5>
                        		<p>The app directory should contain the core code of your application. The majority of your application is housed in the app directory. By default, this directory is namespaced under App and is autoloaded by Composer using the PSR-4 autoloading standard.</p>
                        </section>

                        <section class="sub-section">
	                        	<h5>The Config Directory</h5>
	                        	<p>The config directory, as the name implies, contains all of your application's configuration files.</p>
                        </section>

                        <section class="sub-section">
	                        	<h5>The Public Directory</h5>
	                        	<p>The public directory contains the index.php file, which is the entry point for all requests entering your application and configures autoloading. This directory also houses your assets such as images, JavaScript, and CSS.</p>
                        </section>

                        <section class="sub-section">
	                        <h5>The Storage Directory</h5>
    		                    <p>The public/storage directory may be used to store user-generated files, such as profile avatars, that should be publicly accessible.</p>
                        </section>

                        <section class="sub-section">
    		                    <h5>The Vendor Directory</h5>
	                        <p>The vendor directory contains your Composer dependencies.</p>
                        </section>				
					
					</section>
					
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	