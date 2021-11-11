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
							<h1>Database: Insert</h1>
						</div>
					</section>
					
					<section>	
						<h4>Simple Insert Clauses</h4>
						<p>
							The query builder also provides an insert method for inserting records into the database table. The insert 
							method accepts an array of column names and values:
						</p>
						<pre class=" language-php"><code class="language-php">$this->db->table('users')->insert(
    ['email' => 'john@example.com', 'votes' => 0]
)->execute();</code></pre>
                        <p>
                        	You may even insert several records into the table with a single call to insert by passing an array of arrays. 
                        	Each array represents a row to be inserted into the table:
						</p>
						
						<pre class=" language-php"><code class="language-php">$this->db->table('users')->insert([
    ['email' => 'taylor@example.com', 'votes' => 0],
    ['email' => 'dayle@example.com', 'votes' => 0]
])->execute();</code></pre>
					
					</section>
					
					<section>
                    
						<h4>Auto-Incrementing IDs</h4>
						<p>If the table has an auto-incrementing id, pass true to the execute method to insert a record and then retrieve the ID:</p>
<pre class=" language-php"><code class=" language-php">$id = $this->db->table('users')->insert(
    ['email' => 'john@example.com', 'votes' => 0]
)->execute(true);</code></pre>

					</section>
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	