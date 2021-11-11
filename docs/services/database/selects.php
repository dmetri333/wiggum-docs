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
							<h1>Database: Selects</h1>
						</div>
					</section>
					
					<section>
						<h4>Basic Selects</h4>
						<div class="sub-section">
							<pre class="language-php"><code class="language-php">$users = $this->db->table('users')->select('*')->fetchRows();</code></pre>
				        	<em class="muted">select `foo`, `bar`, `baz`, `boom` from `users`</em>
						</div>
						
						<div class="sub-section">
						<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')->distinct()->fetchRows();</code></pre>
						<p><em class="muted">select distinct `foo`, `bar` from `users</em></p>
						</div>
						
						<div class="sub-section">
							<pre class="language-php"><code class=" language-php">$this->db->table('users')->select('foo')->addSelect('bar')->addSelect(['baz', 'boom'])->fetchRows();</code></pre>
							<p><em class="muted">select `foo`, `bar`, `baz`, `boom` from `users`</em></p>
						</div>
					</section>
					<section>
						<h4>Ordering, Grouping, Limit, &amp; Offset</h4>
						<div class="sub-section">
    						<h5>orderBy</h5>
    						<p>
    							The orderBy method allows you to sort the result of the query by a given column. The first argument to the orderBy method should 
    							be the column you wish to sort by, while the second argument controls the direction of the sort and may be either asc or desc:
    						</p>
							<pre class="language-php"><code class="language-php">$users = $this->db->table('users')
    ->orderBy('name', 'desc')
    ->fetchRows();</code></pre>
				
						</div>
						
						<div class="sub-section">
    						<h5>groupBy</h5>
    						<p>
    							The groupBy and having methods may be used to group the query results. The having method's signature is similar to that of the where method:
    						</p>
							<pre class="language-php"><code class="language-php">$users = $this->db->table('users')
    ->groupBy('account_id')
    ->fetchRows();</code></pre>
    
    						<p>
    							You may pass multiple arguments to the groupBy method to group by multiple columns:
    						</p>
							<pre class="language-php"><code class="language-php">$users = $this->db->table('users')
    ->groupBy('first_name', 'status')
    ->fetchRows();</code></pre>
						</div>
						
						<div class="sub-section">
    						<h5>Limit / Offset</h5>
    						<p>
    							Return a limited set by using the <code>limit</code> method. It also has a optional parameter to pass a offset.
    						</p>
    						<pre class="language-php"><code class="language-php">$users = $this->db->table('users')
    ->limit(10)
    ->fetchRows();
    
$users = $this->db->table('users')
    ->limit(10, 20)
    ->fetchRows();</code></pre>
    						<p>
    							Set a offset using the <code>offset</code> method.
    						</p>
    						<pre class="language-php"><code class="language-php">$users = $this->db->table('users')
    ->offset(20)
    ->fetchRows();</code></pre>
						</div>
						
						<div class="sub-section">
    						<h5>latest / oldest</h5>
    						<p>
    							Coming Soon
    						</p>
						</div>
						
						
					</section>
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	