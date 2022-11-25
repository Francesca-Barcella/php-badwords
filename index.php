<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>funziono</h1>
    <div class="container">

        <form action="bad_words.php" method="get">
            <div class="mb-3">
                <label for="paragrafo" class="form-label">Paragrafo:</label>
                <small id="paragrafoHelper" class="text-muted">scrivi una frase qui sotto</small>
                <input type="text" name="paragrafo" id="paragrafo" class="form-control" placeholder="Scrivi qui ..." aria-describedby="paragrafoHelper">
            </div>
            <div class="mb-3">
                <label for="parola" class="form-label">Parola:</label>
                <small id="parolaHelper" class="text-muted">scrivi una parola qui sotto</small>
                <input type="text" name="parola" id="parola" class="form-control" placeholder="Scrivi qui ..." aria-describedby="parolaHelper">
            </div>
            <button type="submit" class="btn-primary">Invia</button>
            <button type="reset" class="btn-danger">Cancella</button>
        </form>
    </div>
</body>
</html>