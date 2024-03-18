<?php
$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = "";

if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];
    switch ($calcular) {
        case 'adicao':
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            break;
        case 'divisao':
            $resultado = $num1 / $num2;
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Interativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <h1>Calculadora PHP</h1>
            </div>
        </div>
        <form>
            <h4 class="text-start">Primeiro Número</h4>
            <input class="form-control" type="number" placeholder="Digite o primeiro número" aria-label="default input example" name="num1" value=<?php echo $num1; ?> required>
            <br>
            <h4 class="text-start">Segundo Número</h4>
            <input class="form-control" type="number" placeholder="Digite o segundo número" aria-label="default input example" name="num2" value=<?php echo $num2; ?> required>
            <br>
            <h4 class="text-start">Selecione uma operação</h4>
            <select name="calcular" class="form-select" aria-label="Default select example">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <br>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="Calcular">
            </div>
            <br>
        </form>
        <h5>O resultado é <?php echo $resultado; ?></h5>
    </div>
</body>

</html>