<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			{{ $msg }}
			<blockquote>
				<strong>Name: </strong>{{{ $name }}}<br/>
				<strong>Email: </strong><a href="mailto:{{{ $email }}}"></a>{{{ $email }}}<br/>
				<strong>Phone: </strong><a href="tel:{{{ $phone }}}">{{{ $phone }}}</a><br/>
			</blockquote>
		</div>
	</body>
</html>
