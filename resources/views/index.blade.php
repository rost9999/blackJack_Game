<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <p>Dealer cards, score: </p>
            <div id="DealerDeck"></div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Player cards, score: </p>
            <div id="PlayerDeck"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('script.js') }}"></script>
</body>
</html>
