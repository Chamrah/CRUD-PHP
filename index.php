<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
      include_once "header.php";
      $pdo = new PDO('mysql:host=localhost;dbname=etudiant','root','ziadox1');
      $sqls = $pdo->query('SELECT * FROM etudiant1');
      $data = $sqls->fetchAll(PDO::FETCH_OBJ);
      
?>
<div class="container">
    <br><br>
 <table border="1" class="table table-hover">
    <tr>
        <th>#ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Operations</th>
    </tr>
    <tr>
       <?php  foreach($data as $etudiant){
        ?>
        <tr>
             <td><?php echo $etudiant->id_etudiant ?></td>
             <td><?php echo $etudiant->nom_etudiant ?></td>
             <td><?php echo $etudiant->email_etudiant ?></td>
             <td>
                
                    <a  href="edit.php?id_etudiant=<?php echo $etudiant->id_etudiant ?>"><button class="btn btn-success">Modifier</button></a>
               
                    <a href="delete.php?id_etudiant=<?php echo $etudiant->id_etudiant;?> " class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')">Supprimer</a>

             </td>
             <td></td>
        </tr>
        <?php
       } ?>
    
 </table>
</div>
</body>
</html>