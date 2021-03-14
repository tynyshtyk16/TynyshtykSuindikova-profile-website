<!DOCTYPE html>
<html lang="en">
<head>
<meta charser="UTF-8">
<title>creating new blog</title>
</head>
<body>
<form method ="POST" action="{{ route('add-blog') }}">
@csrf
<input type="text" name="id" placeholder="id">
<input type="text" name="title" placeholder="title">
<input type="text" name="body" placeholder="body">
<button type="submit"> create</button>
</body>
</html>
