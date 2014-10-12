<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>{{{ $name }}} left a message for you!</h2>

		<div>
			{{{ $name }}} [{{{ $email }}} | {{{ $phone }}}] says: <br />

			<blockquote>
			    {{{ $msg }}}
			</blockquote>
		</div>
	</body>
</html>
