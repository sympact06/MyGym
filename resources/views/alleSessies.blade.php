<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Sessies</title>
    <link href="{{ asset('css/menuSelected.css') }}" rel="stylesheet">
    <script src="{{ asset('js/createSessieTable.js') }}" defer></script>
</head>
<body>
    <header>
        <a>Terug naar Mijn BigGym</a>
    </header>
    <main>
        <table id="tableparent">
            <tr>
                <th>Naam Sessie</th>
                <th>Tijd</th>
                <th>Trainer</th>
                <th>Aantal Plekken over</th>
            </tr>

        </table>
    </main>
</body>
</html>
