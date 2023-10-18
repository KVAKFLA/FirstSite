<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Имя:  <input type="text" name="username" /><br />
        Email: <input type="text" name="email" /><br />
        <input type="submit" name="submit" value="Отправь меня!" />
    </form>
</body>
</html>
<?php
$us = $_POST['username'];
$as = 'HelloWorld!';
function hello() {
    global $as, $us;
    echo $as;
    echo $us;
}
call_user_func('hello');