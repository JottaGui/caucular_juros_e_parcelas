<?php
include 'CalculoJuros.php'; 
if (isset($_POST['valortotal'], $_POST['parcelas'], $_POST['pagamento'])) {
    $valorTotal = $_POST['valortotal'];
    $parcelas = $_POST['parcelas'];
    $pagamento = $_POST['pagamento'];

    $calculo = new CalculoJuros($valorTotal, $parcelas, $pagamento);

    $valorFinal = $calculo->calcularValorTotal();

} else {
    echo "Dados não enviados corretamente.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <div class="container-fluid mt-auto" id="centro">
        <form action="recebe.php" method="POST">
            <div class="container-fluid" id="cadastro2">
                <h1 class="container-fluid" id="vendas"><?php echo "O valor total é de:<br>R$ " . number_format($valorFinal, 2, ',', '.'); ?></h1>

                </div>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>