<!DOCTYPE html>
<html lang="en-US">
	<head>
		
		<title>HTTP Requests | Wiggum a php framework</title>
	
		<?php include getenv('DOCUMENT_ROOT').'/includes/docHeader.php'; ?>
	</head>

	<body>

		<?php include getenv('DOCUMENT_ROOT').'/includes/header.php'; ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				
					<?php include getenv('DOCUMENT_ROOT').'/docs/nav.php'; ?>

				</div>
				<div class="col-md-9">
				
					<div class="page-header">
						<h1>HTTP Requests</h1>
						<p class="lead">
							Your controller methods pass an instance of the current HTTP request.
						</p>
					</div>
						
					<h2>Accessing The Request</h2>
					<p>A instance of the current HTTP request as a <code>\wiggum\http\Request</code> object is always passed into your <code>Controller</code>. The current request instance will automatically be populated for you:</p>
					<pre><code class="language-php">&lt;?php
namespace app\components\helloWorld;

use \wiggum\model\Component;
use \wiggum\model\Request;
use \wiggum\model\Response;

class HelloWorld extends Controller 
{
	
	// ...
	
	/**
     *
     * @param  Request  $request
     * @param  Response  $response
     * @return Response
     */
	public function doDefault(Request $request, Response $response) 
	{
		$name = $request->getParameter('name');
		
		return $response;
	}
	
	// ...
}
</code></pre>
					
					<p>Route parameters are also stored in the <code>Request</code> object and can be retreived with <code>$request->getParameter('name');</code>.</p>
					
					<h2>Methods</h2>
					<table class="table">
						<thead>
							<tr>
								<th style="width: 30%;">Method</th>
								<th>Parameters</th>
								<th style="width: 50%;">Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>getRequestURI</code></td>
								<td>-</td>
								<td>Returns the URI which was given in order to access this page; for instance, '/blog/'. This also includes the query string if one exists.</td>
							</tr>
							<tr>
								<td><code>getParameter</code></td>
								<td>
									$name<br />
									$default = null<br />
								</td>
								<td>Returns the value of a request parameter as a String, or null if the parameter does not exist. 
									Setting a default will let you fallback back if the parameter is not found.
									Request parameters are extra information sent with the request. For HTTP requests, parameters 
									are contained in the query string or posted form data. </td>
							</tr>
							
							<tr>
								<td><code>getParameter</code></td>
								<td>
									$name<br />
									$default = null<br />
								</td>
								<td>Returns the value of a request parameter as a String, or null if the parameter does not exist. 
									Setting a default will let you fallback back if the parameter is not found.
									Request parameters are extra information sent with the request. For HTTP requests, parameters 
									are contained in the query string or posted form data. </td>
							</tr>
							
							<tr>
								<td><code>getServerName</code></td>
								<td>
									-
								</td>
								<td>Returns the name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.</td>
							</tr>
							
							<tr>
								<td><code>getContextPath</code></td>
								<td>
									-
								</td>
								<td>Returns the portion of the request URI that indicates the context of the request.</td>
							</tr>
							
						
							<tr>
								<td><code>getContextPathSegments</code></td>
								<td>
									-
								</td>
								<td>Returns an array of each segement of the context path, broken up by the character '/'.</td>
							</tr>
		
							<tr>
								<td><code>getContextPathSegment</code></td>
								<td>
									index
								</td>
								<td>Returns a specfic segement of the of context path..</td>
							</tr>
							
							
							<tr>
								<td><code>getParameters</code></td>
								<td>
									index
								</td>
								<td>Returns an associative array that by default contains the contents of $_GET, $_POST and $_COOKIE. If the request has no parameters, the method returns an empty array.</td>
							</tr>
					
							<tr>
								<td><code>hasParameter</code></td>
								<td>
									$name
								</td>
								<td>Returns a boolean if a parameter exists.</td>
							</tr>
					
	
							<tr>
								<td><code>getAttribute</code></td>
								<td>
									$name<br />
									$default = null<br />
								</td>
								<td>Returns the value of the named attribute as an Object, or null if no attribute of the given name exists. Setting a default will let you fallback back if the attribute is not found.</td>
							</tr>
					
	
							<tr>
								<td><code>setAttribute</code></td>
								<td>
									$name<br />
									value<br />
								</td>
								<td>Stores an attribute in this request. Attributes are reset between requests.</td>
							</tr>
					
							<tr>
								<td><code>hasAttribute</code></td>
								<td>
									$name<br />
								</td>
								<td>Returns a boolean if a attribute exists.</td>
							</tr>
							
							<tr>
								<td><code>getFiles</code></td>
								<td>
									-
								</td>
								<td>Returns an associative array that by default contains the contents of $_FILE that have been reorganized.</td>
							</tr>
					
							<tr>
								<td><code>getFile</code></td>
								<td>
									$name<br />
								</td>
								<td>Returns a associative array of File object for the specified file saved on the server's filesystem, or null if the file was not included in the upload.</td>
							</tr>
	
						</tbody>
					</table>
	
				</div>
			</div>
		</div>
		
		<?php include getenv('DOCUMENT_ROOT').'/includes/docFooter.php'; ?>	
	</body>
</html>	