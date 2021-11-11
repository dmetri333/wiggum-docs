<?php 
	$uri = $_SERVER['REQUEST_URI'];

	function startsWith($needle, $heystack) { return substr($heystack, 0, strlen($needle)) === $needle; }
?>

<div class="docs-nav hidden-sm hidden-xs">
	<div class="docs-nav-list">
		<h4 class="title">Get Started</h4>
		<ul>
			<li class="<?= '/docs/' == $uri ? 'active' : '' ?>">
				<a href="/docs/">Installation</a>
			</li>
			<li class="<?= '/docs/started/configuration.php' == $uri ? 'active' : '' ?>">
				<a href="/docs/started/configuration.php">Configuration</a>
			</li>
			<li class="<?= '/docs/started/directory.php' == $uri ? 'active' : '' ?>">
				<a href="/docs/started/directory.php">Directory Structure</a>
			</li>
		</ul>
	</div>
	<div class="docs-nav-list">
		<h4 class="title">Foundation</h4>
		<ul>
			<li class="<?= startsWith('/docs/foundation/application.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/foundation/application.php">Application</a>
			</li>
			<li class="<?= startsWith('/docs/foundation/services.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/foundation/services.php">Services</a>
			</li>
			<li class="<?= startsWith('/docs/foundation/middleware.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/foundation/middleware.php">Middleware</a>
			</li>
			<li class="<?= startsWith('/docs/foundation/routing.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/foundation/routing.php">Routing</a>
			</li>
		</ul>
	</div>
	<div class="docs-nav-list">
		<h4 class="title">Basics</h4>
		<ul>
			<li class="<?= startsWith('/docs/basics/controller.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/basics/controller.php">Controller</a>
			</li>
			<li class="<?= startsWith('/docs/basics/request.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/basics/request.php">Request</a>
			</li>
			<li class="<?= startsWith('/docs/basics/response.php', $uri) ? 'active' : '' ?>">
				<a href="/docs/basics/response.php">Response</a>
			</li>
		</ul>
	</div>
			
	<div class="docs-nav-list">
		<h4 class="title">Services</h4>
		<ul>
			<li class="<?= startsWith('/docs/services/errorhandling/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/errorhandling/">Error Handling</a>
			</li>
			<li class="<?= startsWith('/docs/services/exceptionhandling/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/exceptionhandling/">Exception Handling</a>
			</li>
			<li class="<?= startsWith('/docs/services/logging/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/logging/">Logging</a>
			</li>
			<li class="docs-nav-sub <?= startsWith('/docs/services/database/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/database/">Database</a>
				<ul>
					<li>
						<a href="/docs/services/database/retrievingresults.php">Retrieving Results</a>
					</li>
					<li>
						<a href="/docs/services/database/selects.php">Selects</a>
					</li>
					<li>
						<a href="/docs/services/database/joins.php">Joins</a>
					</li>
					<li>
						<a href="/docs/services/database/unions.php">Unions</a>
					</li>
					<li>
						<a href="/docs/services/database/wheres.php">Where Clauses</a>
					</li>
					<!-- 
					<li>
						<a href="/docs/services/database/">Ordering, Grouping, Limit, & Offset</a>
					</li>
					<li>
						<a href="/docs/services/database/">Conditional Clauses</a>
					</li>
					 -->
					<li>
						<a href="/docs/services/database/inserts.php">Inserts</a>
					</li>
					<li>
						<a href="/docs/services/database/updates.php">Updates</a>
					</li>
					<li>
						<a href="/docs/services/database/delete.php">Deletes</a>
					</li>
				</ul>
			</li>
			<li class="<?= startsWith('/docs/services/flashmessage/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/flashmessage/">Flash Messages</a>
			</li>
			<li class="<?= startsWith('/docs/services/memcache/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/memcache/">Memcache</a>
			</li>
			<li class="<?= startsWith('/docs/services/templates/', $uri) ? 'active' : '' ?>">
				<a href="/docs/services/templates/">Templates</a>
			</li>
		</ul>
	</div>

<!-- 
			<li>
				<span class="title">Utilities</span>
				<ul>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/encryption/">Encryption</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/errors-logging/">Errors & Logging</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/file-io/">File I/O</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/hashing/">Hashing</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/templates/">Templates</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/helpers/">Helpers</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/session/">Session</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/flash-message/">Flash Message</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/utilities/image-processing/">Image Processing</a>
					</li>
				</ul>
			</li>
			<li>
				<span class="title">Database</span>
				<ul>
					<li>
						<a href="http://wiggumdocs.home.org/docs/database/basic-usage/">Basic Usage</a>
					</li>
					<li>
						<a href="http://wiggumdocs.home.org/docs/database/query-builder/">Query Builder</a>
					</li>
				</ul>
			</li>
			 -->
</div>