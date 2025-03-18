<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 300px;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Vinho</h1>

    <div class="form-container">
        <form method="post">
            <label for="nome">Nome do Vinho:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipo">Tipo de Vinho:</label>
            <input type="text" id="tipo" name="tipo" required>

            <label for="pais">País de Origem:</label>
            <input type="text" id="pais" name="pais" required>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>

            <button type="submit" name="cadastrar">Cadastrar Vinho</button>
        </form>
    </div>

    <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastrar'])) {
              
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $pais = $_POST['pais'];
                $preco = $_POST['preco'];

               
                $vinho = new Vinho($nome, $tipo, $pais, $preco);

                echo $vinho->mostrarVinho();

                if ($vinho->verificarPreco($preco)) {
                    echo "<strong>Produto em Oferta</strong>";
                } else {
                    echo "<strong>Produto com o preço normal!</strong>";
                }
            }
        ?>
    </div>
</body>
</html>
