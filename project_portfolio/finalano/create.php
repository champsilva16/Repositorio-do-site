
<!doctype html>
<html lang="en">
  <head>
    <!-- requiredd meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title> Make Yours - Criar conta</title>
  </head>
  <style>
  h1{
  color: white;

  }
  label{
  color: white;
}</style>
  
  <body>
  <div style="height: 70px;">
    <?php
    include"menu.php";
    ?>
    
 <br>
   <br>
   <br>
   

  <h1 style="text-align: center;">Criar conta</h1>
  <center>
  <section class="container">
  <form class="was-validated row g-3" method="post" action="">
  <div class="col-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="inputfone" placeholder="" name="tele" required>
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="pass1" required>
  </div>
  <div class="col-6">
    <label for="inputPassword4" class="form-label">Confirme Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="pass2" required>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputnome" placeholder="" name="nome" required>
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Nickname</label>
    <input type="text" class="form-control" id="inputnick" placeholder="" name="nick" required>
  </div>
  </center>
  <div class="col-12">
    
    <br>
   <center><input type="submit" class="btn btn-primary" name="submit" value="Criar conta"></center> 
  </div>

  </div>
  <div class="col-12">
 
  </div>
</form>
  </section>
  <?php 

if(isset($_POST['submit'])){
   
    

   if($_POST['pass1']==$_POST['pass2']){
     $email=$_POST['email'];
     $nome=$_POST['nome'];
     $pass=$_POST['pass1'];
     $nick=$_POST['nick'];
     $tele=$_POST['tele'];
     $tp=1;
   
 
     $sql="insert into a14949_utils(email ,nome ,telefone ,password ,nickname,tipo) values(?,?,?,?,?,?)";
     $st=$liga->prepare($sql);
     $st->bind_param('ssissi',$email,$nome, $tele,$pass, $nick,$tp);

     if($st->execute() && $st->affected_rows>0){
         echo "<div class='alert'> registo inserido</div>";
         ?>
       
            <?php 

     } 
         else echo "<p> falha no registo</p>";
     $st->close();
 }
   
   else
   echo "<div>Password nao corresponde</div>";
}





?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>