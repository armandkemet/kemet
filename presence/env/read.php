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
             $id = trim($_POST['id']);
             $requete = "UPDATE student SET nom ='$nom', prenom ='$sname', mail='$mail', tel='$tel'  WHERE id = '$id'";
             $req = mysqli_query($bdd, $requete);
             if (!$req) 
             {
                echo"erreur dans la requete";
                echo" le message d'erreur est : " . mysqli_error($bdd);
            }
        }
     }


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
    <title>Afficher les participants </title>
</head>
<body>
    <table class="table">
        <tr>
            <th scope="col">Numero d'arrivée</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenoms</th>
            <th scope="col">adresse mail</th>
            <th scope="col">Numero de telephone</th>
            <th scope="col">Editer</th>
        </tr>
        <?php
                            if (mysqli_num_rows($ret))
                            {
                                while($row = mysqli_fetch_assoc($ret))
                                {
                                    echo"<tr>

                                            <td> No {$row['id']}  </td>
                                            <td> {$row['nom']}  </td>
                                            <td> {$row['prenom']}  </td>
                                            <td> {$row['mail']}  </td>
                                            <td> 0{$row['tel']}  </td>
                                            <td><a href='upd.php?id=".$row['id']."'><button type='button' id='btn' 
                                                class='btn btn-primary'>Modifier</button></a></td>
                                        </tr>"; 
                    
                                }
                            }

        ?>
    </table>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-warning" href="add.php" role="button"><strong>Ajouter un participant</strong></a>
    </div>
</body>
</html>