<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Make Yours - Trabalhos </title>
    <style>
.opa{
  opacity: 0.4;
}
div.gallery {
  margin:10px;
 float: left;
 


color: white;
padding: 0;
text-align: center;

}


@media screen and (max-width:768px) {
 
div.gallery {
margin: 10px;
color: white;
float: left;
width: 95%;

}

.form-control{
width:100%;
}
.mimi{
  max-width: 200px;
}
}
.mimi{
  padding: 2%;
}




.modal-window {
position: fixed;
background-color: rgba(200, 200, 200, 0.75);
top: 0;
right: 0;
bottom: 0;
left: 0;
z-index: 999;
opacity: 0;
pointer-events: none;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
}

.modal-window:target {
opacity: 1;
pointer-events: auto;
}
.form-control{
width:80%;
}
.modal-window>div {
width:80%;
position: relative;
margin: 5% auto;
padding: 2rem;
background: #fff;
color: #444;
overflow: scroll;

  height: 80%;

}

.modal-window header {
font-weight: bold;
}

.modal-close {
color: #aaa;
line-height: 50px;
font-size: 80%;
position: absolute;
right: 0;
text-align: center;
top: 0;
width: 70px;
text-decoration: none;
}

.modal-close:hover {
color: #000;
}

.modal-window h1 {
font-size: 150%;
margin: 0 0 15px;
}

.modal-image {
float: left;
width:  30vmin;
height: 200px;
object-fit: cover;
}
.center2{
max-width: 70%;
height: 200px;
object-fit: cover;
}
</style>
<body>
<?php
  include"menu.php";

  ?>
  <br>
  <br>
  <br>
  <br>
  <?php
    $sql = "select  noti,dta from a14949_noti WHERE email_noti=? ";
    $st = $liga->prepare($sql);
    $st->bind_param('s',$_SESSION['email']);
    $st->execute();
    $st->bind_result($noti,$dta);
    $p=0;
    while ($st->fetch()) {
     
      $p++;}
      $st->close();
  
  ?>
  <div class="dropdown">
  <button style="margin-left: 20;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Notificações(<?php echo $p ;?>)
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
  <?php
  if(isset($_POST['lim'])){
  
      $sql="DELETE from a14949_noti  WHERE email_noti=? ";
      $st=$liga->prepare($sql);
      $st->bind_param('s',$_SESSION['email']);
  
      if($st->execute() && $st->affected_rows>0){?>
        <script>
          location.reload();
        </script>
       <?php
       }
      $st->close();
  }
  $sql = "select  noti,dta from a14949_noti WHERE email_noti=? ";
  $st = $liga->prepare($sql);
  $st->bind_param('s',$_SESSION['email']);
  $st->execute();
  $st->bind_result($noti,$dta);
  $p=0;
  while ($st->fetch()) {
    echo '<div class="mimi"> <p>'.$noti.'<br>  <i>'.$dta.'</i></p></div>';
    $p++;
 
  }
  if($p==0){
    echo ' <p   class="dropdown-item" >Não tens Notificações</p>';
  }else{
  echo '<form action="" method="post" >';
  echo '<center><input type="submit" class="btn btn-primary" name="lim" value="Limpar"></center>';

  echo '</form>';}
  $st->close();
  
  ?>
   
    
    
  </div>
</div>

<center>
<?php
if(isset($_POST['atualizar1'])){
$sql="update a14949_trabalhos set titulo=?,descricao=? WHERE email_tra=? and trabalho=?";
$st=$liga->prepare($sql);
$st->bind_param('ssss',$_POST['tit1'],
$_POST['des4'],
$_SESSION['email'],
$_POST['fofo1']);
if($st->execute() && $st->affected_rows>0){
  
} 
$st->close();
}
if(isset($_POST['delete'])){
$sql="DELETE from a14949_trabalhos  WHERE email_tra=? and trabalho=?";
$st=$liga->prepare($sql);
$st->bind_param('ss',
$_SESSION['email'],
$_POST['fofo1']);
if($st->execute() && $st->affected_rows>0){
  unlink($_POST['fofo1']);
} 
$st->close();

}
$sql = "select  id_tra,trabalho,titulo,descricao,dta,standby from a14949_trabalhos WHERE email_tra=? ";
$st = $liga->prepare($sql);
$st->bind_param('s',$_SESSION['email']);
$st->execute();
$st->bind_result($id5,$trabalho,$tit,$des,$data,$stand);
while ($st->fetch()) {
$ex=pathinfo($trabalho, PATHINFO_EXTENSION);
$len=strlen($tit);

 
  if($ex=='png'){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/png.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
   
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    }
    else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
  echo"<div class='hehe'>";
  echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
  echo    "<div>";
  echo "<form class='row g-3' method='post' action='' name='form$id5'><center>";
  echo "<a href='$trabalho' target='_blank'><img src='$trabalho' alt='Cinque Terre' class=' center2' style='width: 60vmin;'></a></center>";
  echo "<div class='col-12'>";
  echo   "<label class='form-label'>Titulo</label>";
  echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
  echo "</div>";

  echo "<div class='col-12'>";
  echo"<label class='form-label'>Descrição</label>";
  echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
  echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
  echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";


  echo "</div>";

  echo "</div>";
  echo "<div class='col-12'>";


  echo "</div>";
  echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
  echo "</form>";
  echo"</div>";
  echo"</div>";
  echo"</div>";
  }
  if( $ex=='jpg' || $ex=='jpeg'){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
   
    echo "<img src='sorces/jpg.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
    echo"<div  class='hehe'>";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
    echo "<form class='row g-3' method='post' action='' name='form$id5'><center>";
    echo "<a href='$trabalho' target='_blank'><img src='$trabalho' alt='Cinque Terre' class=' center2' style='width: 40vmin;'></a></center>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='".$tit."' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
  if($ex=='mp4' || $ex=='ogg'){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/video.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>"; 
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
    echo"<div class='hehe'>";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
    echo '<video width="70%"  controls>
    <source src="'.$trabalho.'" type="video/mp4">
    <source src="'.$trabalho.'" type="video/ogg">
  Your browser does not support the video tag.
  </video>';
    echo "<form class='row g-3' method='post' action='' name='form$id5'>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
  if($ex=='pdf' ){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/pdf2.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
    echo"<div class='hehe'>";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
    echo '<a href="'.$trabalho.'" target="_blank">Abrir pdf</a> ';
    echo "<form class='row g-3' method='post' action='' name='form$id5'>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
  if($ex=='mp3' ){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/mp3.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe' >";
    echo"<div class='hehe' >";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
   echo '<audio   width="60%" controls>
          
          <source src="'.$trabalho.'" type="audio/mp3">
        Your browser does not support the audio element.
        </audio>';
    echo "<form class='row g-3' method='post' action='' name='form$id5'>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
  if($ex=='zip'){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/zip.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
    echo "</a>";
   
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
    echo"<div class='hehe'>";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
    echo '<i class="fas fa-file-archive"></i><a href="'.$trabalho.'">Baixar o zip</a>';
    echo "<form class='row g-3' method='post' action='' name='form$id5'>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
  if($ex=='html'){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/html.png' alt='Cinque Terre' class='modal-image ";
    if($stand==0){
      echo "opa";
    }
    echo "'>";
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
    echo"<div class='hehe'>";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
    echo '<a href="'.$trabalho.'" target="_blank">Abrir Página</a> ';
    echo "<form class='row g-3' method='post' action='' name='form$id5'>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
  if($ex=='css'){
    echo "<div class='gallery'>";
    echo "<a href='#open-modal$id5'>";
    echo "<img src='sorces/css.png' alt='Cinque Terre' class='modal-image'>";
    echo "</a>";
    echo " <div class='desc'><b>Titulo</b>: <br>  ";
    if($len>19){
      $i=0;
      for( $i; $i<16; $i++){
          echo $tit[$i];
      }
      echo "(...).$ex<br>";
    } else{
      echo $tit.".$ex<br>";
    }
    echo"</div>";
    echo " <div class='desc'><i>$data</i></div>";
    echo "</div>";
    echo"<div id='open-modal$id5' class='modal-window hehe'>";
    echo"<div class='hehe'>";
    echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
    echo    "<div>";
    echo '<a href="'.$trabalho.'" target="_blank">Abrir Página</a> ';
    echo "<form class='row g-3' method='post' action='' name='form$id5'>";
    echo "<div class='col-12'>";
    echo   "<label class='form-label'>Titulo</label>";
    echo   "<input type='text' class='form-control' name='tit1' value='$tit' >";
    echo "</div>";

    echo "<div class='col-12'>";
    echo"<label class='form-label'>Descrição</label>";
    echo"<textarea  name='des4' class='form-control' >$des</textarea><br>";
    echo  "<input type='submit' class='btn btn-primary' name='atualizar1' value='Mudar dados'>";
    echo  "<input type='submit' class='btn btn-primary' name='delete' value='Eliminar'>";
 
  
    echo "</div>";
  
    echo "</div>";
    echo "<div class='col-12'>";

  
    echo "</div>";
    echo"<input type='hidden' name='fofo1' value='$trabalho'/>";
    echo "</form>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
  }
}
$st->close();
?>
</center>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>