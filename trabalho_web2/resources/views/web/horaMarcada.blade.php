<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Confirmado | Retrovisor Barbearia</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color:white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 450px;
            background-color: #333;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
            padding: 20px;
        }

        .header {
            margin-bottom: 20px;
        }

        .logo {
            width: 140px;
            height: 100px;
        }

        h1 {
            font-size: 1.8em;
            color: black;
            margin-top: 10px;
        }

        .appointment-details h2 {
            font-size: 1.6em;
            color: black;
            margin-bottom: 10px;
        }

        .appointment-info {
            background-color: #444;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .appointment-info p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        footer {
            margin-top: 20px;
        }

        .social-icons img {
            width: 30px;
            margin: 5px;
            filter: brightness(0.9);
            transition: transform 0.2s ease-in-out;
        }

        .social-icons img:hover {
            transform: scale(1.1);
            filter: brightness(1.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="/img/Imagens/logo2Novo.png" alt="Logo da Barbearia" class="logo">
            <h1>Retrovisor Barbearia</h1>
            <p>Seu estilo, nossa paixão.</p>
        </header>

        <main class="appointment-details">
            <h2>Agendamento Confirmado</h2>
            <p>Obrigado por escolher nossos serviços!</p>
        </main>
    </div>
</body>

</html>
