
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title> Make Yours - Entrar</title>
  </head>
  <body>
  <style>
  h1{
  color: white;

  }
  label{
  color: white;
}
.opa{
    width: 70%;
  }
@media screen and (max-width: 1000px){ 
  .opa{
    width: 100%;
  }
}

</style>
  <div style="height: 70px;">
    <?php
    include"menu.php";
    ?>
 
   <br>
   <br>
   <br>
   
<center>
  <section class="container">
  <form class="was-validated row g-3" method="POST" action="">
  <div class="col-4"></div>
  <div class="col-4">
  <h1 style="text-align: center;">Entrar</h1>
  </div>

  <div class="col-4"></div>

  <div class="col-2"></div>
  <div class="col-8">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control opa" id="inputEmail4" required>
  </div>
  
  <div class="col-2"></div>
  <div class="col-2"></div>
  
  <div class="col-8">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control opa" id="inputPassword4" required>
    <br>  
    
    <button type="submit" name="submit" class="btn btn-primary">Entrar</button>

    <a href="create">Não tem conta?</a>
  </div>
  <div class="col-2"></div>
  </div>
  <br>
  <div class="col-12" style="margin-left: 9%;">
   
  </div>
</form>
  </section>

  <?php
  if(isset($_POST['submit'])){
    $sql = "select email,nome,password,tipo from a14949_utils WHERE email=? and password=?";
        $st = $liga->prepare($sql);
        $st->bind_param('ss',$_POST['email'],$_POST['pass']);
        $st->execute();
        $st->bind_result($email,$nome,$pass,$tp);
        if ($st->fetch()) {
          $_SESSION['email']=$email;
          $_SESSION['nome']=$nome;
          $_SESSION['tipo']=$tp;?>
          <script>
              window.open('index.php','_self');
            </script>
            <?php
            
        }
        else {
            echo "<div>Email ou password errada!</div>";
        }
        $st->close();
         
      
  }
  //echo $_SESSION['email'];

  ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>