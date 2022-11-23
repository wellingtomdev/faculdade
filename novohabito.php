<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Lista de hábitos</title>
</head>

<body>
    <div class="container pt-4">
        <h1>Novo Hábito</h1>
        <!-- Formulário para cadastro de pessoas
 Note a utilização do atributo name, que
faz
 o link entre os elementos do DOM e o
JavaScript-->
        <form id="formulario" action="inserthabito.php">
            <p><input type="text" id="nome" name="nome" autofocus placeholder="Dê um nome ao hábito" class="form-control" /></p>
            <p  class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" value="Criar" class="btn btn-primary ">
            </p>
        </form>
    </div>
    <script type="text/javascript">
        // Declara uma função para
        // validar o formulário
        var validaForm = function() {
            var nomeHabito = document.
            getElementById("nome").value;
            if ("" == nomeHabito) {
                alert("É necessário informar o nome do Hábito ");
                return false;
            }
        }
        // Aqui declaramos que esta
        // função ocorre sempre no
        // submit do formulário
        document.getElementById("formulario").
        onsubmit = validaForm;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>