{* Smarty *}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error: {$title}</title>
</head>
<body>
    {include file="sections/header.tpl"}
    <div><h4>ERROR CODE: {$code} </h4></div>
    <div><h4>ERROR MESSAGE: {$message}</h4></div>
    <a href="/">HOME</a>
    {include file="sections/footer.tpl"}
</body>
</html>
