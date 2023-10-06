<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica se número é primo</title>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
    <h1>Verifica se número é primo</h1>

    <form action="valida.php" method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar Primo</button>
    </form>

    <script src="/index.js"></script>
</body>
</html>