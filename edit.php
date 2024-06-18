<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<?php include_once "header.php"; 
  $pdo = new PDO('mysql:host=localhost;dbname=etudiant','root','ziadox1');


      $id1 = $_GET['id_etudiant'];
      $sqls = $pdo->prepare('SELECT * FROM etudiant1 WHERE id_etudiant=?');
      $sqls->execute([$id1]);
      $data = $sqls->fetchAll(PDO::FETCH_ASSOC);
    





?>
<br><br>

<div class="container">
     <?php
       foreach($data as $etudiant){
        ?>

        <form action="" method="GET">
                <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">#</span>
                <input width="50%" type="text" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="addon-wrapping" name="id" value="<?php echo $etudiant['id_etudiant'] ;?>">
                </div>
                <br>
                <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                <input width="50%" type="text" class="form-control" placeholder="Nom" aria-label="Username" aria-describedby="addon-wrapping" name="nom" value="<?php echo $etudiant['nom_etudiant'] ;?>">
                </div><br>
                <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input width="50%" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping" name="email" value="<?php echo $etudiant['email_etudiant'] ;?>">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Valider" name="submit">
        </form>



<?php
       }
       if(isset($_GET['submit'])){
         
         $nom = $_GET['nom'];
         $email = $_GET['email'];
         $id2 = $_GET['id'];

         $pdo = new PDO('mysql:host=localhost;dbname=etudiant','root','ziadox1');

        $sqls = $pdo->prepare('UPDATE etudiant1 set nom_etudiant=? , email_etudiant=? where id_etudiant=? ');
        $sqls->execute([$nom,$email,$id2]);
        header('location:index.php');
       

       }

?>
   </div>
</body>
</html>