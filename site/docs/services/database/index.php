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
							<h1>Database: Getting Started</h1>
						</div>
					</section>
					
					<section>
						<h2>Installation</h2>
						<p>By following the steps below your controllers will have access to a database connection and query builder via a object property <code>$this-&gt;db</code></p>
						<ul>
							<li>
								Add the below code to the <code>services.php</code> file in your boot folder.
							<pre class=" language-php"><code class=" language-php"><span class="token variable">$app</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">addService<span class="token punctuation">(</span></span><span class="token string">'db'</span><span class="token punctuation">,</span> <span class="token keyword">function</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
	<span class="token variable">$config</span> <span class="token operator">=</span> <span class="token variable">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">config</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">get<span class="token punctuation">(</span></span><span class="token string">'services.db'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
	<span class="token keyword">return</span> <span class="token keyword">new</span> <span class="token class-name">wiggum<span class="token punctuation">\</span>services<span class="token punctuation">\</span>db<span class="token punctuation">\</span>DB</span><span class="token punctuation">(</span><span class="token variable">$config</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>												
							</li>
							<li>
								Add the below settings array to your <code>services.php</code> file found in your confirg folder. Update the varibles to your own database credentials.
								<pre class=" language-php"><code class=" language-php"><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
<span class="token string">'db'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token punctuation">[</span>
	<span class="token string">'username'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'username'</span><span class="token punctuation">,</span>
	<span class="token string">'password'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'password'</span><span class="token punctuation">,</span>
	<span class="token string">'name'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'databaseName'</span><span class="token punctuation">,</span>
	<span class="token string">'url'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'localhost'</span><span class="token punctuation">,</span>
	<span class="token string">'port'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'3306'</span><span class="token punctuation">,</span>
	<span class="token string">'protocol'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'mysql'</span>
<span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
</code></pre>
							</li>
						</ul>
					</section>
					
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	