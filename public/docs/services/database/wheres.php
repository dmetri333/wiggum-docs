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
							<h1>Database: Where Clauses</h1>
						</div>
					</section>
					
					<section>
						
						<div class="sub-section">
							<h4>Simple Where Clauses</h4>
						
							<p>You may use the where method on a query builder instance to add where clauses to the query. The most basic call to where requires three arguments. The first argument is the name of the column. The second argument is an operator, which can be any of the database's supported operators. Finally, the third argument is the value to evaluate against the column.</p>
		
							<p>For example, here is a query that verifies the value of the "votes" column is equal to 100:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')->where('votes', '=', 100)->fetchRow();</code></pre>
							<p>For convenience, if you simply want to verify that a column is equal to a given value, you may pass the value directly as the second argument to the where method:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')->where('votes', '=', 100)->fetchRow();</code></pre>
							<p>Of course, you may use a variety of other operators when writing a where clause:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')->where('votes', '>=', 100)->fetchRow();
							
$users = $this->db->table('users')->where('votes', '<>', 100)->fetchRow();
		
$users = $this->db->table('users')->where('name', 'like', 'T%')->fetchRow();</code></pre>
						</div>
						
						<div class="sub-section">
							<h4>Or Statements</h4>
							<p>You may chain where constraints together as well as add or clauses to the query. The <code>orWhere</code> method accepts the same arguments as the where method:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->where('votes', '>', 100)
	->orWhere('name', '=', 'John')
	->fetchRow();</code></pre>
						
						</div>
						
						<div class="sub-section">
							<h4>Use an Array</h4>
							<p>You may also pass an array of conditions to the where function:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')->where([
	    'status' => '1',
	    'subscribed' => '1'
	])->fetchRow();</code></pre>
	
						<pre class=" language-php"><code class=" language-php">select * from `users` where `status` = 1 and `subscribed` = 1</code></pre>
							
						</div>
						
						<div class="sub-section">
							<h4>Grouping</h4>
							
							<p>Sometimes you may need to create more advanced where clauses such as nested parameter groupings. The query builder can handle this as well. To get started, let's look at an example of grouping constraints within parenthesis:</p>
							<pre class=" language-php"><code class=" language-php">$this->db->table('users')
	->where('name', '=', 'John')
	->orWhere(function ($query) {
		$query->where('votes', '>', 100)
			  ->where('title', '<>', 'Admin');
		})
	->fetchRow();</code></pre>						
						
							<p>As you can see, passing a Closure into the where method instructs the query builder to begin a constraint group. The Closure will receive a query builder instance which you can use to set the constraints that should be contained within the parenthesis group. The example above will produce the following SQL:</p>
							<pre class=" language-php"><code class=" language-php">select <span class="token operator">*</span> from users where name <span class="token operator">=</span> <span class="token string">'John'</span> <span class="token keyword">or</span> <span class="token punctuation">(</span>votes <span class="token operator">&gt;</span> <span class="token number">100</span> <span class="token keyword">and</span> title <span class="token operator">&lt;</span><span class="token operator">&gt;</span> <span class="token string">'Admin'</span><span class="token punctuation">)</span></code></pre>
						
						</div>
						
						<div class="sub-section">
							<h4>Additional Where Clauses</h4>
    					
    						<h5>Where Between</h5>
							<p>The <code>whereBetween</code> and <code>orWhereBetween</code> method verifies that a column's value is between two values:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->whereBetween('votes', [1, 100])
	->fetchRow();</code></pre>						

							<h5>Where Not Between</h5>
							<p>The <code>whereNotBetween</code> and <code>orWhereNotBetween</code> method verifies that a column's value lies outside of two values:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->whereNotBetween('votes', [1, 100])
	->fetchRow();</code></pre>					
							
							
    						<h5>Where In</h5>
							<p>The <code>whereIn</code> and <code>orWhereIn</code> method verifies that a given column's value is contained within the given array:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->whereIn('id', [1, 2, 3])
	->fetchRow();</code></pre>					
    						
    						<h5>Where Not In</h5>
							<p>The <code>whereNotIn</code> and <code>orWhereNotIn</code> method verifies that the given column's value is not contained in the given array:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->whereNotIn('id', [1, 2, 3])
	->fetchRow();</code></pre>						
						
    						
    					
    						<h5>Where Null</h5>
							<p>The <code>whereNull</code> and <code>orWhereNull</code> method verifies that the value of the given column is NULL:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->whereNull('updated_at')
	->fetchRow();</code></pre>
						
							<h5>Where Not Null</h5>
							<p>The <code>whereNotNull</code> and <code>orWhereNotNull</code> method verifies that the column's value is not NULL:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
	->whereNotNull('updated_at')
	->fetchRow();</code></pre>
							
    					
    						
    						<h5>Where Date</h5>
    						<p>The <code>whereDate</code> method may be used to compare a column's value against a date:</p>
    						<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
    ->whereDate('created_at',  '=','2016-12-31')
    ->fetchRow();</code></pre>
    						
    						<h5>Where Month</h5>
    						<p>The <code>whereMonth</code> method may be used to compare a column's value against a specific month of a year:</p>
    						<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
    ->whereMonth('created_at',  '=','12')
    ->fetchRow();</code></pre>
    						
    						<h5>Where Day</h5>
    						<p>The <code>whereDay</code> method may be used to compare a column's value against a specific day of a month:</p>
    						<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
    ->whereDay('created_at',  '=','31')
    ->fetchRow();</code></pre>
    						
    						<h5>Where Year</h5>
    						<p>The <code>whereYear</code> method may be used to compare a column's value against a specific year:</p>
    						<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
    ->whereYear('created_at', '=', '2016')
    ->fetchRow();</code></pre>
    						
    						<h5>Where Time</h5>
    						<p>The <code>whereTime</code> method may be used to compare a column's value against a specific time:</p>
							<pre class=" language-php"><code class=" language-php">$users = $this->db->table('users')
    ->whereTime('created_at', '=', '11:20:45')
    ->fetchRow();</code></pre>
				
							<h5>Where Column</h5>
							<p>Coming Soon</p>
							
							<h5>Where JSON</h5>
							<p>Coming Soon</p>
						</div>	
							
						
					</section>
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	