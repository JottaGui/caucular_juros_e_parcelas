<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="container-fluid mt-auto" id="centro">
        <form action="recebe.php" method="POST">
            <div class="container-fluid" id="cadastro">
                <h1 class="container-fluid" id="vendas">calculo de juros</h1>
                <div class="form-label mb-3">
                    <label for="floatingInput">valor total</label>
                    <input type="number" name="valortotal" class="form-control" id="valortotal"><br>
                    <select class="form-select" aria-label="Default select example" name="pagamento"> 
                        <option>forma de pagamento</option>
                        <option value="credito">credito</option>
                        <option value="à vista">á vista</option>
                    </select> 
                    <label for="floatingPassword">parcelas</label>
                    <input type="number" name="parcelas" class="form-control" id="floatingPassword"> 
                    <input class="btn btn-primary mb-3" type="submit" value="enviar">
                    <input class="btn btn-primary mb-3" type="reset" value="limpar">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>