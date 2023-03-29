<?php 
require'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion users</title>
</head>
<body>
    <div class="container">
        <a href="add.php" class="Btn__add"> <img src="img/plus.png" alt="icon__plus">  Ajouter</a>

        <table>
            <tr class="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>          
            </tr>
            <?php 
            // requete pour liste les users
            $req = mysqli_query($con , "SELECT * FROM users");
            if(mysqli_num_rows($req) == 0){
                echo "liste de users vide ajouter!" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['nom']?></td>
                        <td><?=$row['prenom']?></td>
                        <td><?=$row['age']?></td>
                        <!-- Ici on affiche l'id de chaque user grace a ce lien -->
                        <td><a href="edit.php?id=<?=$row['id']?>"> <img src="img/crayon.png" alt="icon"></a>
                        <td><a href="delet.php?id=<?=$row['id']?>"> <img src="img/corbeille.png" alt="icon"></a>
                        
                    </tr>
                    <?php
                }
            }
            ?>



            <!-- <tr>
                <td>NGOUINDA</td>
                <td>Aimé</td>
                <td>25</td>
                <td><a href="edit.php" class=""> <img src="img/crayon.png" alt="icon__plus"></a>
                <td><a href="#" class=""> <img src="img/corbeille.png" alt="icon__plus"></a>
                </td>
            </tr>
            <tr>
                <td>NGOUINDA</td>
                <td>Aimé</td>
                <td>25</td>
                <td><a href="edit.php" class=""> <img src="img/crayon.png" alt="icon__plus"></a>
                <td><a href="#" class=""> <img src="img/corbeille.png" alt="icon__plus"></a>
                </td>
            </tr> -->
        </table>
    
    
    
    </div>

</body>
</html>