
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="styles/fotstyle.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Make Yours</title>
</head>

<body>
<?php
    include"menu.php";

    ?>
    <br>
    <br>
    <br>
    <br>
<style>
 body{
   color: white;
 }
#aa{
    color: white;
    text-decoration: none;
    text-align: center;
    margin-top: 100px;

}
 
#aa2{
    color: white;
    text-decoration: none;
    text-align: center;

}
p{
  color: white;
  
}


.buttons {
	overflow: hidden;
}

.buttons > div {
	width: calc(50% - 40px);
	padding: 20px;
	float: left;
	position: fixed;
	bottom: 0;
	top: 0;
}
.buttons .dark {
	background: #000;
	left: 50%;
}
.buttons a {
	float: left; 
	margin-right: 20px;
  margin-bottom: 20px;
}
a#link {position: absolute; left: 20px; bottom: 10px; text-decoration: none; color: #555; font-weight: bold;}
/*------------------------------------------------------*/
/* BUTTONS */
/*------------------------------------------------------*/
.btn,
input[type="submit"]{
	cursor: pointer;
    border-radius: 0px;
    text-decoration: none;
    padding: 12px 18px;
    font-size: 12px;
    line-height: 19px;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif; font-weight:400;
    letter-spacing: 3px;
    -webkit-transition: all .4s ease-in-out;
       -moz-transition: all .4s ease-in-out;
        -ms-transition: all .4s ease-in-out;
         -o-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
}

.btn-mid {
    border-radius: 0px;
    text-decoration: none;
    padding: 14px 21px;
    font-size: 13px;
    line-height: 25px;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif; font-weight:400;
    letter-spacing: 3px;
    -webkit-transition: all .4s ease-in-out;
       -moz-transition: all .4s ease-in-out;
        -ms-transition: all .4s ease-in-out;
         -o-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
}

.btn-big {
    border-radius: 0px;
    text-decoration: none;
    padding: 18px 24px;
    font-size: 14px;
    line-height: 40px;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif; font-weight:400;
    letter-spacing: 3px;
    -webkit-transition: all .4s ease-in-out;
       -moz-transition: all .4s ease-in-out;
        -ms-transition: all .4s ease-in-out;
         -o-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
}
.btn:hover,
input[type="submit"]:hover{
    -webkit-transition: all .4s ease-in-out;
       -moz-transition: all .4s ease-in-out;
        -ms-transition: all .4s ease-in-out;
         -o-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
}
.btn-white{
    border:solid 2px #fff;
    background: transparent;
    color: #fff !important;
}
.btn-white:hover{
    border:solid 2px #fff;
    background: #fff;
    color: #1f1f1f !important;
}

.btn-dark,
input[type="submit"]{
    border:solid 2px #1f1f1f;
    background: transparent;
    color: #1f1f1f;
}
.btn-dark:hover,
input[type="submit"]:hover,
.btn-dark.active{
    border:solid 2px #1f1f1f;
    background: #1f1f1f;
    color: #fff;
}

.btn-color{
    background: transparent;
}
.btn-color:hover{
    color: #fff;
}
#bot{
 text-align: center;
  
}
.cr{
  width: 75%;
 


}

@media screen and (max-width: 1000px){
  body{
    text-align: center;
  }
  #aa{
    color: white;
    text-decoration: none;
    text-align: center;
    margin-top: 100px;
    margin-left:0%
}
 
#aa2{
    color: white;
    text-decoration: none;

    text-align: center;

}
p{
  color: white;
  text-align: center;

}
.dark{

  margin: auto;
  width: 50%;
    padding: 10px;
}
h1{
  text-align: center;
}
.cr{
  
  width: 80%;
  float: left;
  margin: 40px;
  
  

}
}

.card-text{
  margin: 0 ;
}
.card-title{
  color: white;
}



</style>


    <center>
    <div >
        <h1 id="aa"><a href="create.php" id="aa2">Queres criar o teu portfólio?</a></h1>
      
        <p >O jeito mais fácil de criares o teu portfólio gratuitamente.</p>
        <br>
        <?php
        if(isset($_SESSION['tipo'])){
          ?>
           <div class="dark">
	
              <a id="bot" class="btn btn-white" href="add.php">Começar</a>
            </div>
            <br><br>
          </div><?php
        }else{
          ?>
           <div class="dark">
	
              <a id="bot" class="btn btn-white" href="create.php">Começar</a>
            </div>
            <br><br>
          </div><?php
        }

        ?>
    <div id="carouselExampleControls" class="carousel slide cr " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="sorces/carrosel1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sorces/carrosel2.jpg  " alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sorces/carrosel3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
  
  
 
   

    <br>
    <br>
    <br><br><br>
  <div >
    <div class="card mb-3" style="width: 80%; background-color:black;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://brandslogo.net/wp-content/uploads/2016/07/file-types-vector-icons.png" alt="..." width="75%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Guarda trabalhos gratuitamente</h5>
        <p class="card-text">Guarda os teus trabalhos sem nenhum custo e totalmente seguro.</p>

      </div>
    </div>
  </div>
</div>
<br>

  </div>
  <div class="card mb-3" style="width: 80%; background-color:black;margin-top:5%">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="https://format-com-cld-res.cloudinary.com/image/private/s--n6fwisLk--/c_fit,f_auto,q_auto,w_600/v1/marketing/m674/homepage/portfolio-video-8aecaf9da1a87e546aab9ae453455cd7335dedab1f0035e51cc12f5a71182f08.png.png?600" alt="..." width="75%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">Hospedagem de vídeo incluída</h5>
        <p class="card-text">Pare de depender do Youtube e do Vimeo para hospedar seus vídeos. Envie vídeos diretamente para o formato e mostre seu trabalho da maneira que ele deve ser visto.</p>

      </div>
    </div>
  </div>
</div>
<br>
<div class="card mb-3" style="width: 80%; background-color:black;margin-top:5%">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://format-com-cld-res.cloudinary.com/image/private/s--cKqQ_oJQ--/c_fit,f_auto,q_auto,w_600/v1/marketing/m674/homepage/portfolio-award-bb3a7ef7b131da2e111fecc9f4514faffef5ea5397ea35c2ef05e0a4cafe66b3.png.png?600" alt="..." width="75%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Faz o teu portfólio em minutos</h5>
        <p class="card-text">Modelos projetados profissionalmente que fazem seu trabalho realmente brilhar com personalização completa e milhares de variações de design. Crie um site exclusivo com nosso editor de design intuitivo - sem necessidade de codificação.</p>

      </div>
    </div>
  </div>
</div>
<br>

</div>
</body>
<?php
include"footer/footer.html";

    ?>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>