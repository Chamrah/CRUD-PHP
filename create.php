<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once "header.php"; ?>
    <br><br><br>
   <div class="container">
    <form action="" method="POST">
        
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
         <input width="50%" type="text" class="form-control" placeholder="Nom" aria-label="Username" aria-describedby="addon-wrapping" name="nom">
        </div>
        <br>
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">@</span>
         <input width="50%" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping" name="email">
        </div>
        <br>
        <input class="btn btn-primary" type="submit" value="Valider" name="submit">
     </form>
   </div>
   <?php
    if(empty($_POST['nom']) || empty($_POST['email'])){?>
     <div class="container">
        <br><br>
         <div class="alert alert-danger" role="alert">
         Veullez remplir tous les champs
         </div>
     </div>
<?php
    }
    else{
      if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];

        $pdo = new PDO('mysql:host=localhost;dbname=etudiant','root','ziadox1');
        $sqls = $pdo->prepare('INSERT INTO etudiant1 VALUES(null,?,?)');
        $data = $sqls->execute([$nom,$email]);
       
      }
    }

?>
</body>
</html>