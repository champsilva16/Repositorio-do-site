<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title> Make Yours - Adicionar</title>
</head>
<style>
  /* Tooltip - Settings ([$component-property: value]) */
:root {
    --tooltip_bg: rgba(0,0,0, .8);
    --tooltip_fontsize: 13px;
    --tooltip_minwidth: 120px;
    --tooltip_borderradius: 5px;
    --tooltip_color: #ffffff;
    --tooltip_cursor: help;
}


[data-tooltip] {
    position: relative;
    display: inline-flex;
    cursor: var(--tooltip_cursor);
}

[data-tooltip]:before {
    content: attr(data-tooltip);
    opacity: 0;
    position: absolute;
    background: var(--tooltip_bg);
    border-radius: var(--tooltip_borderradius);
    left: 50%;
    transform: translate(-50%, 50%);
    bottom: 50%;
    padding: 5px;
    text-align: center;
    color: var(--tooltip_color);
    font-size: var(--tooltip_fontsize);
    width: 200px;
    min-width: var(--tooltip_minwidth);
    max-height: 0px;
    transition: all .3s ease;
    overflow: hidden;
    margin: auto;
    line-height: 1.3em;
    pointer-events: none;
    z-index: 10;
}

[data-tooltip]:hover:before {
    opacity: 1;
    max-height: 600px;
    bottom: 100%;
    transform: translate(-50%, -10px);
}
body {
  font-family: sans-serif;
 
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #000000;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #000000;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
  border: 1px solid white;
}

.file-upload-btn:hover {
  background: #000000;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #000000;
  position: relative;
    
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #000000;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: white;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 40%;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 600;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
#heeh{
  width: 80%;
  background: none;
  
  
}
.inputt{
      width: 50%;
    }
@media screen and (max-width: 1000px){
    #heeh{
      width: 100%;
    }
    .inputt{
      width: 100%;
    }
    .remove-image {
  width: 100%;

}
}


</style>
<body >
<?php
    include"menu.php";
    ?>
  <br>
  <br>
  <br>
  <br>
  <br>
 
   <?php
   if(isset($_POST['submit'])){
     /*$name=basename( $_FILES['envio']['name']);
     $namereal = pathinfo($name, PATHINFO_FILENAME);*/
     $namereal=$_POST['tit1'];
     if($namereal==''){
      $name=basename( $_FILES['envio']['name']);
      $namereal = pathinfo($name, PATHINFO_FILENAME);

     }
     $des=$_POST['desc'];
    $destino =  "trabalhos/b" . uniqid() .  basename( $_FILES['envio']['name']);
    $ex=0;
     $ex=pathinfo($destino, PATHINFO_EXTENSION);
    if($ex=='mp3' || $ex=='png' || $ex=='jpg' || $ex=='mp4' || $ex=='html' || $ex=='zip' || $ex=='pdf' || $ex=='jpeg' ){
          if(move_uploaded_file($_FILES['envio']['tmp_name'], $destino)) {
            if($_SESSION['email']=='champsilva16@gmai.com'){
              $p=1;
            }else $p=0;
              $sql="INSERT into a14949_trabalhos(trabalho ,email_tra,titulo,descricao,standby) values(?,?,?,?,?)";
              $st=$liga->prepare($sql);
          
              $st->bind_param('ssssi',$destino,$_SESSION['email'],$namereal,$des,$p);
         
              if($st->execute() && $st->affected_rows>0){
                  echo"registado"; 
              } 
                  else echo "<p>nao deu</p>";
              $st->close();
          }
        
    }else{
    
        echo "<div >FICHEIRO NAO SUPORTADO </div>";

   }
  }
   
   ?>

  
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         
             <center><li data-tooltip="Ficheiros Suportados: png, jpg, mp3, mp4, pdf, zip, html"> <i class="far fa-question-circle" id="gg" style="font-size: 250%;" ></i></li></center>
 
   <form method="post"  enctype="multipart/form-data" >
   
<div class="file-upload" id="heeh">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adicionar o seu arquivo</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" name="envio"/>
    <div class="drag-text">
      <h3>Arraste e solte um arquivo ou selecione adicionar o seu arquivo </h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
<center>
<br>
<div class="col-3"></div>
   <div class="col-8">
  <center><label class='form-label' id="hehehehehe" style="color:white;">Titulo</label>
  <input type='text' class='form-control inputt' name='tit1' value='' ></center>
  <br>
   </div>
   <div class="col-3"></div>
   <div class="col-3"></div>
   <div class="col-8">
   <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white;">Descrição</label>
    <textarea class="form-control inputt" id="exampleFormControlTextarea1" rows="3" name="desc" ></textarea>
  </div>
   </div>
   <div class="col-3"></div>
   <br><br>
<input class='btn btn-primary' type="submit" name="submit"></center>
<br><br><br></form>

<br>
<br><br>



  
<script>
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});
</script>
</body>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>