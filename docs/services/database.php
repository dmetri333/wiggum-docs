<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>Installation | </title>
	
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
						<h1>Services: Database</h1>
					</div>
					
					<section>
						<h2>Installation</h2>
						<p>By following the steps below your controllers will have access to a database connection and query builder via a object property <code>$this->db</code></p>
						<ul>
							<li>
								Add the below code to the <code>services.php</code> file in your boot folder.
							<pre><code class="language-php">$app->addService('db', function() {
	$config = $this->config->get('services.db');
	return new wiggum\services\db\DB($config);
});
</code></pre>												
							</li>
							<li>
								Add the below settings array to your <code>services.php</code> file found in your confirg folder. Update the varibles to your own database credentials.
								<pre><code class="language-php">...
'db' => [
	'username' => 'username',
	'password' => 'password',
	'name' => 'databaseName',
	'url' => 'localhost',
	'port' => '3306',
	'protocol' => 'mysql'
],
...
</code></pre>
							</li>
						</ul>
					</section>
					
					<section>
						<h2>Selects</h2>
						<p>Using the select method, you can specify a custom select clause for the query:</p>
						<pre><code class="language-php">$users = $this->db->table('users')->select('name', 'email as user_email')->get();</code></pre>
						<p>The <code>distinct</code> method allows you to force the query to return distinct results:</p>
						<pre><code class="language-php">$users = $this->db->table('users')->distinct()->get();</code></pre>
					</section>
					
					<section>
						<h2>Joins</h2>
						
						<h4>Inner Join Clause</h4>
						<p>The query builder may also be used to write join statements. To perform a basic "inner join", you may use the join method on a query builder instance. The first argument passed to the join method is the name of the table you need to join to, while the remaining arguments specify the column constraints for the join. Of course, as you can see, you can join to multiple tables in a single query:</p>
					
					<pre><code class="language-php">$users = $this->db->table('users')
	->join('contacts', 'users.id', '=', 'contacts.user_id')
	->join('orders', 'users.id', '=', 'orders.user_id')
	->select('users.*', 'contacts.phone', 'orders.price')
	->get();</code></pre>
            
						<h4>Left Join Clause</h4>
						<p>If you would like to perform a "left join" instead of an "inner join", use the leftJoin method. The  leftJoin method has the same signature as the join method:</p>
            
           <pre><code class="language-php"> $users = $this->db->table('users')
->leftJoin('posts', 'users.id', '=', 'posts.user_id')
->get();</code></pre>
            
						<h4>Advanced Join Clauses</h4>
						<p>You may also specify more advanced join clauses. To get started, pass a Closure as the second argument into the join method. The Closure will receive a JoinClause object which allows you to specify constraints on the join clause:</p>
             
            <pre><code class="language-php">$this->db->table('users')
	->join('contacts', function ($join) {
		$join->on('users.id', '=', 'contacts.user_id')
			->on('orders', 'users.id', '=', 'orders.user_id', 'or');
	})
	->get();</code></pre>
        
             			<p>If you would like to use a "where" style clause on your joins, you may use the where and orWhere methods on a join. Instead of comparing two columns, these methods will compare the column against a value:</p>
					
					<pre><code class="language-php">$this->db->table('users')
	->join('contacts', function ($join) {
		$join->on('users.id', '=', 'contacts.user_id')
		->where('contacts.user_id', '>', 5);
	})
	->get();</code></pre>
					</section>
					
					<section>
						<h2>Where Clauses</h2>
						
						<div class="sub-section">
						
							<h4>Simple Where Clauses</h4>
						
							<p>You may use the where method on a query builder instance to add where clauses to the query. The most basic call to where requires three arguments. The first argument is the name of the column. The second argument is an operator, which can be any of the database's supported operators. Finally, the third argument is the value to evaluate against the column.</p>
		
							<p>For example, here is a query that verifies the value of the "votes" column is equal to 100:</p>
							<pre><code class="language-php">$users = $this->db->table('users')->where('votes', '=', 100)->get();</code></pre>
							<p>For convenience, if you simply want to verify that a column is equal to a given value, you may pass the value directly as the second argument to the where method:</p>
							<pre><code class="language-php">$users = $this->db->table('users')->where('votes', 100)->get();</code></pre>
							<p>Of course, you may use a variety of other operators when writing a where clause:</p>
							<pre><code class="language-php">$users = $this->db->table('users')->where('votes', '>=', 100)->get();
		
	$users = $this->db->table('users')->where('votes', '<>', 100)->get();
		
	$users = $this->db->table('users')->where('name', 'like', 'T%')->get();</code></pre>
							
							<p>You may also pass an array of conditions to the where function:</p>
							<pre><code class="language-php">$users = $this->db->table('users')->where([
	    ['status', '=', '1'],
	    ['subscribed', '<>', '1'],
	])->get();</code></pre>
						</div>
						
						<div class="sub-section">
							<h4>Or Statements</h4>
							<p>You may chain where constraints together as well as add or clauses to the query. The orWhere method accepts the same arguments as the where method:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->where('votes', '>', 100)
	->orWhere('name', 'John')
	->get();</code></pre>
						</div>
						
						<div class="sub-section">
							<h4>Additional Where Clauses</h4>
						
							<h5>Where Between</h5>
							<p>The <code>whereBetween</code> method verifies that a column's value is between two values:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->whereBetween('votes', [1, 100])->get();
</code></pre>						
							<h5>Where Not Between</h5>
							<p>The <code>whereBetween</code>method, with the not param set to true, verifies that a column's value lies outside of two values:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->whereNotBetween('votes', [1, 100], 'and', true)
	->get();
</code></pre>						
						
							<h5>Where In</h5>
							<p>The <code>whereIn</code> method verifies that a given column's value is contained within the given array:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->whereIn('id', [1, 2, 3])
	->get();
</code></pre>						
						
							<h5>Where Not In</h5>
							<p>The <code>whereIn</code> method, with the not param set to true, verifies that the given column's value is not contained in the given array:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->whereIn('id', [1, 2, 3], 'and', true)
	->get();
</code></pre>						
						
							<h5>Where Null</h5>
							<p>The <code>whereNull</code> method verifies that the value of the given column is NULL:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->whereNull('updated_at')
	->get();
</code></pre>
						
							<h5>Where Not Null</h5>
							<p>The <code>whereNull</code>,  with the not param set to true, method verifies that the column's value is not NULL:</p>
							<pre><code class="language-php">$users = $this->db->table('users')
	->whereNotNull('updated_at', 'and', true)
	->get();
</code></pre>
						</div>
						
						<div class="sub-section">
							<h4>Parameter Grouping</h4>
							<p>Sometimes you may need to create more advanced where clauses such as nested parameter groupings. The query builder can handle this as well. To get started, let's look at an example of grouping constraints within parenthesis:</p>
							<pre><code class="language-php">$this->db->table('users')
	->where('name', '=', 'John')
	->where(function ($query) {
		$query->where('votes', '>', 100)
			->where('title', '<>', 'Admin');
		}, 'or')
	->get();
</code></pre>						
						
							<p>As you can see, passing a Closure into the where method instructs the query builder to begin a constraint group. The Closure will receive a query builder instance which you can use to set the constraints that should be contained within the parenthesis group. The example above will produce the following SQL:</p>
							<pre><code class="language-php">select * from users where name = 'John' or (votes > 100 and title <> 'Admin')</code></pre>
						</div>
						
					</section>
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	