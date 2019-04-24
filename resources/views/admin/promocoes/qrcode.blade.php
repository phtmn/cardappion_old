<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promoção</title>
</head>
<body>


<div class="visible-print text-center">

    <p>Clique no link para testar em ambiente de desenvolvimento:</p>
    <a href="{{ $promocao->url }}">{{ $promocao->description }}</a>

    {!! QrCode::size(400)->generate($promocao->url); !!}

</div>
</body>
</html>