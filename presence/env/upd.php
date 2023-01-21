<?php
     $bdd = mysqli_connect("localhost", "root", "", "presence" ) or die("Erreur de connexion");


        $res = "SELECT * FROM student";
        $ret = mysqli_query($bdd,$res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editer</title>
</head>
<body>
    <br>
    <br>
    <?php
            $test = $_GET["id"];
            $result = mysqli_query($bdd, "SELECT * FROM student where id= '".$test."'" );
                if($result)
                {
                    echo"<center><p class='h1'> MODIFIER LES DONNEES DU PARTICIPANT</p></center>";
                    $li = mysqli_fetch_array($result);
                    echo" <br>
                            <br>
                            <form action='read.php' method='post'>
                            <div class='row'>
                                <p>
                                    <div class='col'>
                                        <input type='text' class='form-control' name='nom' placeholder='Nom' aria-label='Nom' value=' ".$li['nom']."' required>
                                    </div>
                                    <div class='col'>
                                        <input type='text' class='form-control' name='prenom' placeholder='Prenoms' aria-label='Prenoms' value=' ".$li['prenom']."' required>
                                    </div>
                                </p>
                            </div>
                            <div class='row'>
                                <p>
                                    <div class='col'>
                                        <input type='email' class='form-control' pattern='.+@gmail\.com' title='votre email doit contenir obligatoirement @gmail.com'  name='mail' id=' placeholder='mail' aria-label='mail' value=' ".$li['mail']."' required>
                                    </div>
                                    <div class='col'>
                                        <input type='tel' class='form-control' name='tel' id='' placeholder='numero de telephone' value=' 0".$li['tel']."' required>
                                    </div>
                                    <div class='col'>
                                        <input type='hidden' class='form-control' name='id' placeholder='Nom' aria-label='Nom' value=' ".$li['id']."' required>
                                    </div>
                                </p>
                            </div>
                            <div class='col-12'>
                                <center><button name='submit' class='btn btn-primary' type='submit'>Enregistrer</button></center>
                            </div>
                      </form>";
                }
        ?>
</body>
</html>