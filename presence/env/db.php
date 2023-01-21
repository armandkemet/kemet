<?php
    $bdd = mysqli_connect("localhost", "root", "", "presence" ) or die("Erreur de connexion");
    if ($bdd)
    {
        if (isset($_POST['submit'])) 
        {
            $nom = trim($_POST['nom']);
            $sname = trim($_POST['prenom']);
            $mail = trim($_POST['mail']);
            $tel = trim($_POST['tel']);

            $req = "INSERT INTO student (nom,prenom,tel,mail) VALUES ('$nom', '$sname', '$tel', '$mail')";
            if (mysqli_query($bdd, $req)) 
            {
                echo" <center><dt>le participant $nom a bien marqué sa présence</dt> <br></center>";
                echo"
                        <div class='d-grid gap-2 col-6 mx-auto'>
                            <a class='btn btn-warning' href='add.php' role='button'><strong>Ajouter un autre participant</strong></a>
                        </div> <br>
                        <div class='d-grid gap-2 col-6 mx-auto'>
                            <a class='btn btn-primary' href='read.php' role='button'><strong>Afficher les particpants</strong></a>
                        </div>
                ";
            }
            else {
                echo"erreur dans la requete";
                echo" le message d'erreur est : " . mysqli_error($bdd);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajout</title>
</head>
<body>
    
</body>
</html>