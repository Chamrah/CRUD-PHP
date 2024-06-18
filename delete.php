<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
   <?php include_once "header.php";
    
        $pdo = new PDO('mysql:host=localhost;dbname=etudiant','root','ziadox1');
        $id = $_GET["id_etudiant"]; 
        $sqls = $pdo->prepare('DELETE FROM etudiant1 WHERE id_etudiant=?');
        $data = $sqls->execute([$id]);
        header("location:index.php");
    
   ?>
</body>
</html>