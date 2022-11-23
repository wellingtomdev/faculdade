<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Adicionar hábito</title>
</head>

<body>
    <div class="container pt-4">
        <h1>Novo Hábito</h1>
        <form id="formulario" action="inserthabito.php">
            <p><input type="text" id="nome" name="nome" autofocus placeholder="Dê um nome ao hábito" class="form-control" /></p>
            <p class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./index.php" class="btn btn-secondary "> Cancelar </a>
                <input type="submit" value="Confirmar" class="btn btn-primary ">
            </p>
        </form>
    </div>
    <script type="text/javascript">
        function validaForm() {
            const nomeHabito = document.getElementById("nome").value
            if (!nomeHabito.trim().length) {
                alert("É necessário informar o nome do Hábito ")
                return false
            }
        }
        document.getElementById("formulario").onsubmit = validaForm
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>