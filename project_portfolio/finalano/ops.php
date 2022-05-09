
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Make Yours - Opçoes</title>
  </head>
  <style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);



.button-wrapper {
  position: relative;
  width: 100px;
  text-align: center;
  margin: 5% auto;
}

.button-wrapper span.label {
  position: relative;
  z-index: 0;
  display: inline-block;
  width: 100%;
 background:rgb(0, 130, 199);
  cursor: pointer;
  color: #fff;
  padding: 10px 0;
  text-transform:uppercase;
  font-size:12px;
}

#upload {
    display: inline-block;
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 50px;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}
#main2 {
   background-position: center;
    background-size:cover;
    background-repeat: no-repeat;
    width: 250px;
    height: 250px;
    display: block;
  margin-left: auto;
  margin-right: auto;
}
.content {
  
  margin: auto;
}
label{
  color: white;
}
</style>
  <body>
  <div style="height: 70px;">
    <?php
    include"menu.php";
    ?>
    <br>
    <br>   
    <br>
 



<div class="content">

  <section class="container">

  <?php
  if(isset($_FILES['upload'])){
    $destino =  "profile/a" . uniqid() ; 

    if($_FILES["upload"]["type"]=="image/jpeg")
        $destino=$destino . ".jpg";
    else
        if($_FILES["upload"]["type"]=="image/png")
            $destino=$destino . ".png";
    
    if($_FILES["upload"]["type"]=="image/jpeg" || $_FILES["upload"]["type"]=="image/png" || $_FILES["upload"]["type"]=="image/gif" ){
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $destino)) {
            $email=$_SESSION['email'];
            $sql="update a14949_utils set foto=? where email=?";
            $st=$liga->prepare($sql);
            $st->bind_param('ss',$destino,$email);
            if($st->execute() && $st->affected_rows>0){
          
            } 
           
            $st->close();
            ?>
            <script>
            window.open('ops.php','_self');
          </script>
          <?php
        }
  }


  }
      if(isset($_POST['atualizar1'])){
        $nome=$_POST['nome'];
        $sql="update a14949_utils SET  nome=?,nickname=?,telefone=? WHERE email=?";
        $st=$liga->prepare($sql);
        $st->bind_param('ssis',$_POST['nome'],
        $_POST['nick'], 
        $_POST['tele'],
        $_SESSION['email']);
        if($st->execute() && $st->affected_rows>0){
            echo "<div class='alert'> registo atualizado</div>";
             $_SESSION['nome']=$nome;
        } 
            else echo "<h1> falha no registo\atualizaçao</h1>";
        $st->close();
        $_SESSION['nome']=$_POST['nome'];
    }
   $sql = "select email,nome,telefone,nickname,foto FROM a14949_utils WHERE email=?";
   $st = $liga->prepare($sql);
   $st->bind_param('s',$_SESSION['email']);
   $st->execute();
   $st->bind_result($email1,$nome1,$tele1,$nick1,$foto);
   if ($st->fetch()) {
   }
   else {
       echo "<div>Não encontrado!</div>";
       
   }
   $st->close();
    echo "<section class='container'>";
    echo '<div id="main2" class="rounded-circle" style="border:3px solid white;background-image:url( '. $foto . ') ">

    </div>
    <form method="post" action=""  enctype="multipart/form-data" id="fotoform">
    <div class="button-wrapper" >
  <span class="label" >
    Selecione uma foto
  </span> 
    <input type="file" name="upload" id="upload" class="upload-box"  placeholder="Upload File" onchange="sub()">
    </form>
    </div>';
    echo "</section>";
    echo "<section class='container'>";
    echo "<form class='row g-3' method='post' action=''>";

    echo "<div class='col-2'></div><div class='col-8'>";
    echo "<label for='inputEmail4' class='form-label'>Email</label>";
    echo "  <input type='email' class='form-control' id='inputEmail4' name='email' value='$email1' readonly>";
    echo "</div>
    <div class='col-2'></div>
    ";

    echo "<div class='col-2'></div><div class='col-8'>";
    echo   "<label for='inputAddress' class='form-label'>Nome</label>";
    echo   "<input type='text' class='form-control' id='inputnome' placeholder='' name='nome' value='$nome1' >";
    echo "</div>  <div class='col-2'></div>";
    echo "<div class='col-2'></div><div class='col-8'>";
    echo   "<label for='inputAddress2' class='form-label'>Nickname</label>";
    echo   "<input type='text' class='form-control' id='inputnick' placeholder='' name='nick' value='$nick1'>";
  
    echo "</div>  <div class='col-2'></div>";
    echo "<div class='col-2'></div><div class='col-8'>";
    echo  "<label for='inputAddress2' class='form-label'>Telefone</label>";
    echo  "<input type='text' class='form-control' id='inputfone' placeholder='' name='tele' value='$tele1'><br>";
    echo   "<center><input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>
    <br>
    <br>
    <a href='sair.php' class='btn btn-primary'>Sair</a>
    ";

  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'><br><br><br>";

  
    echo "</div>";
 
    echo "</form>";
    echo "</section>";
  ?>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
 
<script>
  function sub(){
    document.getElementById("fotoform").submit();
  }


</script>
  </body>
</html>