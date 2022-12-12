<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/loja.css" rel="stylesheet" />
    <link rel="stylesheet" href="Style.css">
</head>
<body><br>
    <div class="container">
        <div class="principal">
        <h1>Formulário</h1><br>
        <form action="cadastro-usuario.php">
            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Name" aria-label="name" name="name">
            </div><br>

            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="CPF" aria-label="CPF" name="cpf">
            </div><br>

            <div class="col-sm-5">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div><br>

            <div class="col-auto2">
                <button type="submit" class="btncolor">Submit</button>
                <button type="reset" class="btncolor">Clear</button>
            </div>
        </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>