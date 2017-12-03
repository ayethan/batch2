<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
<h1>About Us</h1>
<ul>
@foreach ($names as $name)
 <li>I'm {{ $name }}</li>
@endforeach
</ul>
</body>
</html>