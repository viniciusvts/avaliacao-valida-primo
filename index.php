<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica se número é primo</title>
    <link rel="stylesheet" href="/index.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/index.js"></script>
</head>
<body>
    <div class="container">
    <h1 class="title">Verifica se número é primo</h1>

    <form class="form" id="formulario">
        <label class="label" for="numero">Digite um número inteiro</label>
        <input class="input" type="number" id="numero" name="numero" required>
        <button class="button" type="button" onclick="verificarPrimo()">Verificar Primo</button>
    </form>

    </div>
</body>
</html>