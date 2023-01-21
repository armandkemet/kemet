<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter un present</title>
</head>
<body>
    <center><h1>Ajouter un participant</h1></center>
    <form action="db.php" method="post" id="vormulaire">
        <div class="row">
            <p>
                <div class="col">
                    <input type="text" class="form-control" name="nom" placeholder="Nom" aria-label="Nom" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="prenom" placeholder="Prenoms" aria-label="Prenoms" required>
                </div>
            </p>
        </div>
        <div class="row">
            <p>
                <div class="col">
                    <input type="email" class="form-control" name="mail" id="email" pattern=".+@gmail\.com" title="votre email doit contenir obligatoirement @gmail.com"  size="30" placeholder="mail" aria-label="mail" required>
                    <br>
                    <span id="error"></span>
                </div>
                <div class="col">
                    <input type="tel" class="form-control" name="tel" id="" placeholder="numero de telephone" required>
                </div>
            </p>
        </div>
        <div class="col-12">
            <center><button name="submit" class="btn btn-primary" type="submit">Enregistrer</button></center>
        </div>
    </form>
</body>
</html>