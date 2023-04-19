<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/omgeving.css') }}" rel="stylesheet">
</head>
<body>
<div class="left">
    <h1>HALLO, {{$caps_gebruikersnaam}}</h1>
    <br><br>
    <button>ACCOUNT</button><br>
    <button>LIDMAATSCHAPPEN</button><br>
    <button>GESCHIEDENIS</button><br>
    <h5>©️ Big Gym</h5>
</div>
<div class="right">
    <div id="opkomend">
        <h1>SESSIE:</h1>
        <h2>Aquarobics met de omas</h2>
        <p>⏰ | 14:00-15:30</p>
        <p>🧑‍🏫 | Dhr. Peter Lijten</p>
    </div>

</div>
</body>
</html>


