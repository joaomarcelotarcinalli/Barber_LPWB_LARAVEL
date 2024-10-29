<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <link rel= "icon" href = "img/Imagens/logo2Novo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Horário</title>
    <style>
        form {
            max-width: 400px;
            margin: 12% auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 24px #7a7a7a;
        }

        body {
            background: linear-gradient(90deg, #000000, rgb(59, 59, 59));
        }

        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="date"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            border-bottom: 2px solid #4c4c4c;
        }
        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            font-size: 16px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

    </style>
</head>

<body>

    <form action="{{route('marcaHrBd')}}" method="POST">
        @csrf
        <div class="form-group">
            <h5 style="margin-left: 20%; font-size: 30px; font-family: arial;">Agendar Horário</h5>
            <label for="data">Data:</label>
            <input type="date" name="data" min="2024-10-25" max="2024-11-30" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora:</label>
            <select name="hora" required>
                <option value="08:00">08:00</option>
                <option value="08:30">08:30</option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
            </select>
        </div>
        <button type="submit">Agendar</button>
    </form>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>
