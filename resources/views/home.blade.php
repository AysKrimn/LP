<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Hello World</h1>
<hr>

<form action="/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="username">
    <br> <br>
    <input type="text" placeholder="email" name="email">
    <br><br>
    <input type="password" placeholder="password" name="password">
    <br><br>

    <input type="submit" value="Kayıt Ol">
</form>
</body>
</html>