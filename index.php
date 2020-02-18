<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP de 18 de fevereiro</title>
</head>
<body>
    <h3>Você pode ter carteira?!</h3>
    <form>
        <label>Nome</label>
        <br>
        <input type="text" id="txtNome" name="txtNome">
        <br>
        <label>CPF</label>
        <br>
        <input type="text" id="txtCPF" name="txtCPF">
        <br>
        <label>Data</label>
        <br>
        <input type="text" id="txtData" name="txtData">
        <br>

        <label>Opção de carteira á retirar</label>
        <select id="slcCategoria" name="slcCategoria">
            <option value="1">Categoria A</option>
            <option value="2">Categoria B</option>
            <option value="3">Categoria C</option>
            <option value="4">Categoria D</option>
            <option value="5">Categoria E</option>
        </select>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>