<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form bad word</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Bad word</h1>
            <form action="bad_words.php" method="get">
                <div class="mb-3">
                    <label for="frase" class="form-label">frase:</label>
                    <small id="fraseHelper" class="text-muted">scrivi una frase qui sotto</small>
                    <input type="text" name="frase" id="frase" class="form-control" placeholder="Scrivi qui ..." aria-describedby="paragrafoHelper">
                </div>
                <div class="mb-3">
                    <label for="parola" class="form-label">Parola:</label>
                    <small id="parolaHelper" class="text-muted">scegli una parola della tua frase e inseriscila qui sotto</small>
                    <input type="text" name="parola" id="parola" class="form-control" placeholder="Scrivi qui ..." aria-describedby="parolaHelper">
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
            </form>
        </div>
</body>
</html>