<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>Database | Wiggum a php framework</title>
	
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
					
					<section>
						<div class="page-header">
							<h1>Database: Updates</h1>
						</div>
					</section>
					
					<section>	
						<h4>Simple Update</h4>
						<p>
							The update method, like the insert method, accepts an array of column and value pairs containing the columns to be updated. You may 
							constrain the update query using where clauses:
						</p>
						
						<pre class="language-php"><code class="language-php">$this->db->table('users')
    ->update(['votes' => 1])
    ->where('id', 1)
    ->execute();</code></pre>
					</section>
				
					<section>
                        <h4>Updating JSON Columns</h4>
                        <p>Comming Soon</p>
					</section>
				
					<section>
                		<h4>Increment &amp; Decrement</h4>
						<p>Comming Soon</p>
					</section>
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	