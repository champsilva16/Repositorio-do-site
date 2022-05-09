<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Iniciar Sessão</title>
  </head>
  <style>
      body{
          background-image: url(https://my.account.sony.com/central/signin/3718401c7ac89607e9e4a64e317791e227e52441/assets/images/wallpaper.jpg);
      }


  </style>
  <body>
  <?php
     $bd_host="sql110.epizy.com";
     $bd_user="epiz_31428328";
     $bd_password="LdoTrdvs8b";
     $bd_database="epiz_31428328_last_cor";
   

    $liga=new mysqli($bd_host,$bd_user,$bd_password,$bd_database);

    if($liga->connect_error){
      die ("Erro na ligaçao (" . $liga->connect_error . ") - " . $liga ->connect_error);

    }
    if(isset($_POST['submit'])){
      $nome=$_POST['nome'];
      $pass3=$_POST['pass'];
      
      $e=0;
      $query="select adim,pass from a14949_admin ";
      $sta=$liga->prepare($query);
      $sta->execute();
      $sta->bind_result($adim,$pass);
        while($sta->fetch()){
           
            
      }
      if($nome==$adim && $pass3==$pass){
        header("Location: admin.php");
    }
    else{
        echo "Nome ou password errada";
    }
        
        $sta->close();
    }
    ?>


    <div class="col-sm-12 text-dark text-center my-3 " >
    <div style="float: right;"><button><a href="index.php">Voltar</a></button></div>
        <h1>Iniciar Sessão</h1>
    </div>
        <div  style="padding-left: 30%;padding-right: 30%; padding-top: 5%;">
        
         <form action="" method="post">   
        <div class="form-floating mb-3" class="border border-dark" >
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nome">
            <label for="floatingInput">Nome</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="col-auto">
            <div class="form-check">
              
              </label>
            </div>
          </div>
          <div class="col-auto">
            <button class="btn btn-primary" name="submit">Entrar</button>
          </div>
        </form>
        <br>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>