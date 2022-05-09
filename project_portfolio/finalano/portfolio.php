<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Make Yours - Portfolio</title>
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
   <?php
   if(isset($_POST['ir'])){?>
    <script>
    window.open('portefolioreal.php','_self');
  </script><?php
   }
    if(isset($_POST['update'])){
     
      
      $destino =  "portfolioimgs/b" . uniqid() .  basename( $_FILES['envio']['name']);
      $destino2 =  "portfolioimgs/b" . uniqid() .  basename( $_FILES['envio2']['name']);
      $ex1=pathinfo($destino,PATHINFO_EXTENSION);
      $ex2=pathinfo($destino2,PATHINFO_EXTENSION);
     $o=0;
     $p=0;
      if($ex1==''){
        $o=1;
      }
      else{
        $o=0;
      }
      if($ex2==''){
        $p=1;
      }
      else{
        $p=0;
      }
  $ema= $_POST['email'];
  $area=$_POST['area'];
  $text=$_POST['areatext'];
  $sobre=$_POST['sobremim'];
  

            if(move_uploaded_file($_FILES['envio']['tmp_name'], $destino) || move_uploaded_file($_FILES['envio2']['tmp_name'], $destino2)) {
              if($o==1){
                $sql="update a14949_portfolio set email=?,area=?,areatext=?,sobremin=?,back=? where real_email=?";
                $st=$liga->prepare($sql);
            
                $st->bind_param('ssssss',$ema,$area,$text,$sobre,$_POST['hehe'],$_SESSION['email']);
           
                if($st->execute() && $st->affected_rows>0){
                    echo""; 
                } 
                    else echo "<p></p>";
                $st->close();
              }else{
                $sql="update a14949_portfolio set email=?,area=?,areatext=?,sobremin=?,back=? where real_email=?";
                $st=$liga->prepare($sql);
            
                $st->bind_param('ssssss',$ema,$area,$text,$sobre,$destino,$_SESSION['email']);
           
                if($st->execute() && $st->affected_rows>0){
                    echo""; 
                } 
                    else echo "<p></p>";
                $st->close();
              }
              if($p==1){
                $sql="update a14949_portfolio set email=?,area=?,areatext=?,sobremin=?,perfil=? where real_email=?";
                $st=$liga->prepare($sql);
            
                $st->bind_param('ssssss',$ema,$area,$text,$sobre,$_POST['hehe2'],$_SESSION['email']);
           
                if($st->execute() && $st->affected_rows>0){
                    echo""; 
                } 
                    else echo "<p></p>";
                $st->close();
              }else{
                $sql="update a14949_portfolio set email=?,area=?,areatext=?,sobremin=?,perfil=? where real_email=?";
                $st=$liga->prepare($sql);
            
                $st->bind_param('ssssss',$ema,$area,$text,$sobre,$destino2,$_SESSION['email']);
           
                if($st->execute() && $st->affected_rows>0){
                    echo""; 
                } 
                    else echo "<p></p>";
                $st->close();
              }
               
            
          
      }else{
        $sql="update a14949_portfolio set email=?,area=?,areatext=?,sobremin=? where real_email=?";
                $st=$liga->prepare($sql);
            
                $st->bind_param('sssss',$ema,$area,$text,$sobre,$_SESSION['email']);
          
                if($st->execute() && $st->affected_rows>0){
                    echo""; 
                } 
                    else echo "<p></p>";
                $st->close();
            
        
     }
    }
   if(isset($_POST['submit'])){
     
      $destino =  "portfolioimgs/b" . uniqid() .  basename( $_FILES['envio']['name']);
   
      $destino2 =  "portfolioimgs/b" . uniqid() .  basename( $_FILES['envio2']['name']);
 
  

$ema= $_POST['email'];
$area=$_POST['area'];
$text=$_POST['areatext'];
$sobre=$_POST['sobremim'];


          if(move_uploaded_file($_FILES['envio']['tmp_name'], $destino) || move_uploaded_file($_FILES['envio2']['tmp_name'], $destino2)) {

              $sql="INSERT into a14949_portfolio( email ,area, areatext, sobremin,back,perfil,real_email) values(?,?,?,?,?,?,?)";
              $st=$liga->prepare($sql);
          
              $st->bind_param('sssssss',$ema,$area,$text,$sobre,$destino,$destino2,$_SESSION['email']);
         
              if($st->execute() && $st->affected_rows>0){
                  echo""; 
              } 
                  else echo "<p></p>";
              $st->close();
          
        
    }else{
      $sql="INSERT into a14949_portfolio( email ,area, areatext, sobremin,real_email) values(?,?,?,?,?)";
              $st=$liga->prepare($sql);
          
              $st->bind_param('sssss',$ema,$area,$text,$sobre,$_SESSION['email']);
        
              if($st->execute() && $st->affected_rows>0){
                  echo""; 
              } 
                  else echo "<p></p>";
              $st->close();
          
      
   }
  }
  
   
   ?>

  <h1 style="text-align: center;">Meu Portfólio</h1>
  <center>
  <?php

   $query="select id,email ,area, areatext, sobremin,back,perfil,real_email from a14949_portfolio where real_email=? ";
   $st=$liga->prepare($query);
   $st->bind_param('s',$_SESSION['email']);
   $st->execute(); 
   $st->bind_result($id,$email1,$area1,$areatext1,$sobre1,$eb,$b2,$real1);
   if($st->fetch()){
 
  echo '<section class="container">
  <form class="was-validated row g-3" method="post" action="" enctype="multipart/form-data"">
  <div class="col-3"></div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Contactos</label>
    <input type="email" class="form-control" id="inputfone" placeholder="" name="email" required value="'.$email1.'">
  </div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Área de interesse</label>
    <input type="text" class="form-control" id="inputnome" placeholder="" name="area" value="'.$area1.'" required>
  </div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-6">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Sobre as minha Área de interesse</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="areatext" required>'.$areatext1.'</textarea>
  </div>
  </div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-6">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Sobre mim</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sobremim" required>'.$sobre1.'</textarea>
  </div>
  </div>
  <div class="col-3"></div> 
  <div class="col-3"></div> 
  <div class="col-6"> 
 
  <div class="custom-file">
    <label class="custom-file-label" for="inputGroupFile01"   >Foto de fundo</label>
    <br>
    <input type="file" class="custom-file-input" id="inputGroupFile01" style="max-width: 100%;"    name="envio">
  </div>
 
  </div>
  <div class="col-3"></div> 
  <div class="col-3"></div> 
  <div class="col-6"> 
 
  <div class="custom-file">
    <label class="custom-file-label" for="inputGroupFile01">Foto de perfil</label>
    <br>
    <input type="file" class="custom-file-input" id="inputGroupFile01" style="max-width: 100%;" name="envio2">
  </div>
 
  </div>
  <div class="col-3"></div> 
  </center>
  <div class="col-12">
  <input type="hidden"  name="hehe" value="'.$eb.'" >
  <input type="hidden"  name="hehe2" value="'.$b2.'" >
    <br>
   <center><input type="submit" class="btn btn-primary" name="update" value="Guardar"><br><br>
   <button class="btn btn-primary" onclick="red('.$id.')">Ir</button>
   
   </center> 
  
  </div>
<br>
<br><br>
  </div>
  <div class="col-12">
 
  </div>
</form>';

   }
   else{
    echo '<section class="container">
    <form class="was-validated row g-3" method="post" action="" enctype="multipart/form-data"">
    <div class="col-3"></div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Contactos</label>
      <input type="email" class="form-control" id="inputfone" placeholder="" name="email" required >
    </div>
    <div class="col-3"></div>
    <div class="col-3"></div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Area de interesse</label>
      <input type="text" class="form-control" id="inputnome" placeholder="" name="area"  required>
    </div>
    <div class="col-3"></div>
    <div class="col-3"></div>
    <div class="col-6">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Sobre as minha Area de interesse</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="areatext" required></textarea>
    </div>
    </div>
    <div class="col-3"></div>
    <div class="col-3"></div>
    <div class="col-6">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Sobre mim</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sobremim" required></textarea>
    </div>
    </div>
    <div class="col-3"></div> 
    <div class="col-3"></div> 
    <div class="col-6"> 
   
    <div class="custom-file">
      <label class="custom-file-label" for="inputGroupFile01"   >Foto de fundo</label>
      <br>
      <input type="file" class="custom-file-input" id="inputGroupFile01" style="max-width: 100%;" name="envio">
    </div>
   
    </div>
    <div class="col-3"></div> 
    <div class="col-3"></div> 
    <div class="col-6"> 
   
    <div class="custom-file">
      <label class="custom-file-label" for="inputGroupFile01">Foto de perfil</label>
      <br>
      <input type="file" class="custom-file-input" id="inputGroupFile01" style="max-width: 100%;" name="envio2">
    </div>
   
    </div>
    <div class="col-3"></div> 
    </center>
    <div class="col-12">
      
      <br>
     <center><input type="submit" class="btn btn-primary" name="submit" value="Guardar">
 
     </center> 
     <br>
 
    </div>
  <br>
 
  <br><br>
    </div>
    <div class="col-12">
   
    </div>
  </form>';

   }
?>
  </section>
<script>
function ir(){
              window.open('index.php','_self');
     
}
</script>
<script>
function red(x){
    alert(x);
  window.open('http://carecaswebsites.rf.gd/project_portfolio/finalano/portefolioreal.php?id='+x);
}

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>