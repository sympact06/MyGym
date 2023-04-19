<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigGym Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-image: url('https://cdn.discordapp.com/attachments/1096030912296271913/1098209910455537684/IMG_7014-scaled.webp');
            background-size: cover;
            background-repeat: no-repeat;
        }

        #logo {
            max-width: 150px;
            margin: 1rem auto;
            margin-top: 30px;
            display: block;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.75);
            border-radius: 1rem;
            padding: 2rem;
            margin: 5rem auto;
            max-width: 30rem;
        }

        .form-control {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #fff;
            border-radius: 0;
            color: #fff;
            font-size: 1.2rem;
            padding: 0.5rem 0;
            margin-bottom: 1.5rem;
        }

        .form-control:focus {
            border-color: rgb(230, 0, 126);
            box-shadow: none;
        }

        .form-control::placeholder {
            color: #fff;
            opacity: 0.6;
        }

        .btn {
            background-color: rgb(230, 0, 126);
            border: none;
            border-radius: 2rem;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 0.5rem 1rem;
            margin-top: 1.5rem;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #fff;
            color: rgb(230, 0, 126);
            cursor: pointer;
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
            color: rgb(230, 0, 126);
            margin-bottom: 2rem;
            text-align: center;
        }

        .card-text {
            font-size: 1.2rem;
            color: white;
            text-align: center;
            margin-bottom: 2rem;
        }

        label {
            color: white;
        }

        .knop {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="https://cdn.discordapp.com/attachments/1096030912296271913/1098209910107422731/BigGym-Logo-prijs-wit.webp"
         alt="BigGym" id="logo">
    <div class="card">
        <h1 class="card-title">Mijn BigGym</h1>
        <p class="card-text">Log in en ervaar het plezier van online inchecken en sessies inplannen!</p>
        <form action="/api/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Gebruikersnaam</label>
                <input type="text"  name="gebruikersnaam" class="form-control" id="username" placeholder="Voer uw gebruikersnaam in">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> Wachtwoord </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Voer uw wachtwoord in">
            </div>
            <button style="color: white;" type="submit" class="btn knop">Inloggen</button>
        </form>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>
</html>
