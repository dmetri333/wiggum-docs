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
							<h1>Database: Delete</h1>
						</div>
					</section>
					
					<section>	
						<p>
							The query builder may also be used to delete records from the table via the delete method. You may constrain 
							delete statements by adding where clauses before calling the delete method:
						</p>

						<pre class="language-php"><code class="language-php">$this->db->table('users')->delete()->execute();

$this->db->table('users')->delete()->where('votes', '>', 100)->execute();</code></pre>
                       
					</section>
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	