<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Make Yours - Admin</title>
</head>
<body>
    <style>
        .dd{
            width:13%
        }
        @media screen and (max-width:768px) {
            .dd{
            width:30%
        }


        }

    </style>
<div style="height: 70px;">
    <?php
    include"menu.php";
    ?>
</div>
<h1 style="color: white;text-align:center">Bem-vindo <?php echo $_SESSION['nome'] ?></h1>
<br>
<br>
<br>
<div >
<center>
<form method="post" action="">
    <input  class="btn btn-primary dd" type="submit" name="utlis" value="Utilizadores">
    <input  class="btn btn-primary dd" type="submit" name="foto" value="Trabalhos">
    <input  class="btn btn-primary dd" type="submit" name="stand" value="standBy">
    <input  class="btn btn-primary dd" type="submit" name="alt" value="Alterações">


</form></center></div>
<?php
if(isset($_POST['utlis'])){
    include "adminut.php";
}
if(isset($_POST['foto'])){
    include "admintra.php";
}
if(isset($_POST['alt'])){
    include "adminalt.php";
}
if(isset($_POST['stand'])){
    include "admintsta.php";
}
?>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>