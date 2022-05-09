<?php
session_start();
$id3=$_GET['id'];
require_once('config/config.php');
?>
<?php
$sql = "select  email,area,areatext,sobremin,back,perfil,real_email from a14949_portfolio WHERE id=? ";
$st = $liga->prepare($sql);
$st->bind_param('i',$id3);
$st->execute();
$st->bind_result($email,$area,$areatext,$sobremim,$back,$perfil,$real);
$st->fetch();
$st->close();
$sql = "select  nome  from a14949_utils WHERE email=?  ";
$st = $liga->prepare($sql);
$st->bind_param('s',$real);
$st->execute();
$st->bind_result($nome);
$st->fetch();
$st->close();

?>
<style>



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
height: 300px;
object-fit: cover;
}
.ttt{
   width:100%;
   height:250px;
   object-fit:cover;
   object-position:50% 50%;
  
}
@media screen and (max-width:768px) {
    .modal-window>div {
width:80%;
position: relative;
margin: 20% auto;
padding: 2rem;
background: #fff;
color: #444;
overflow: scroll;

  height: 80%;

}

}
    
</style>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title> Portfólio</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<h1 style="color: white;"><?php echo $nome ?></h1>
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre mim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">O que eu faço</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url(' <?php echo $back;?>')">
		<div class="heading">
			<h1>Bem-vindo ao meu portefólio</h1>
			
		
		</div>
	</section>

	

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>Sobre mim</h2>
                       <p><?php echo $sobremim; ?></p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="<?php echo $perfil;?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>O que é que eu faço</h3>
               
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-12">
                    <div class="services-inner-box">
						
						<h2><?php echo $area;?></h2>
						<p><?php echo $areatext;?></p>
					</div>
               
			
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Portfolio</h3>
                <p>Aqui estão os meus trabalhos.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">Todos</button>
                        <button data-filter=".gal_a">Imagens</button>
						<button data-filter=".gal_b">Video ou Audio</button>
						<button data-filter=".gal_c">Pdfs</button>
                        <button data-filter=".gal_d">Zips</button>
                        <button data-filter=".gal_e">Sites</button>
						
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
            <?php
        $sql = "select  id_tra,trabalho,titulo,descricao,dta,standby from a14949_trabalhos WHERE email_tra=? and standby=1";
        $st = $liga->prepare($sql);
        $st->bind_param('s',$real);
        $st->execute();
        $st->bind_result($id5,$trabalho,$tit,$des,$data,$stand);
        while ($st->fetch()) {
            $ex=pathinfo($trabalho, PATHINFO_EXTENSION);
            if($ex=='png' || $ex=='jpg' || $ex=='jpeg'){
                echo '
                
				<div class="col-md-4 col-sm-6 gallery-grid gal_a ">
					<div class="gallery-single fix">
                    <a href="#open-modal'.$id5.'">
						<img src="'.$trabalho.'" class="ttt" alt="hehheh">
					</div>
				</div>';
                echo"<div id='open-modal$id5' class='modal-window hehe'>";
                echo"<div  class='hehe'>";
                echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
                echo    "<div>";
                echo "<center>";
                echo "<img src='$trabalho' alt='Cinque Terre' class=' center2' style='width: 80vmin;'></center></div>";
              echo '<br><br><h2>Título</h2>';
              echo '<p>'.$tit.'</p>';
              echo '<h2>Descrição</h2>';
              echo '<p>'.$des.'</p>';
              echo "</div>";
  
              echo "</div>";
             
					
			
            }
            if($ex=='mp4'){
                echo '
                
				<div class="col-md-4 col-sm-6 gallery-grid gal_b ">
					<div class="gallery-single fix">
                    <a href="#open-modal'.$id5.'">
						<img src="sorces/video.png" class="ttt" alt="hehheh">
					</div>
				</div>';
                echo"<div id='open-modal$id5' class='modal-window hehe'>";
                echo"<div  class='hehe'>";
                echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
                echo    "<div>";
                echo "<form class='row g-3' method='post' action='' name='form$id5'><center>";
                echo '<video width="70%"  controls>
                <source src="'.$trabalho.'" type="video/mp4">
                <source src="'.$trabalho.'" type="video/ogg">
              Your browser does not support the video tag.
              </video></center></div>';
              echo '<br><br><h2>Título</h2>';
              echo '<p>'.$tit.'</p>';
              echo '<h2>Descrição</h2>';
              echo '<p>'.$des.'</p>';
              echo "</div>";
  
              echo "</div>";
             
            
           }
           if($ex=='mp3'){
            echo '
            
            <div class="col-md-4 col-sm-6 gallery-grid gal_b ">
                <div class="gallery-single fix">
                <a href="#open-modal'.$id5.'">
                    <img src="sorces/mp3.png" class="ttt" alt="hehheh">
                </div>
            </div>';
            echo"<div id='open-modal$id5' class='modal-window hehe'>";
            echo"<div  class='hehe'>";
            echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
            echo    "<div>";
 
            echo '<center><audio   width="60%" controls>
      
            <source src="'.$trabalho.'" type="audio/mp3">
          Your browser does not support the audio element.
          </audio></center></div>';
          echo '<br><br><h2>Título</h2>';
          echo '<p>'.$tit.'</p>';
          echo '<h2>Descrição</h2>';
          echo '<p>'.$des.'</p>';
          echo "</div>";
  
          echo "</div>";
         
        }
        if($ex=='pdf'){
            echo '
            
            <div class="col-md-4 col-sm-6 gallery-grid gal_c ">
                <div class="gallery-single fix">
                <a href="#open-modal'.$id5.'">
                    <img src="sorces/pdf2.png" class="ttt"  alt="hehheh">
                </div>
            </div>';
            echo"<div id='open-modal$id5' class='modal-window hehe'>";
            echo"<div  class='hehe'>";
            echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
            echo    "<div>";
            echo "<form class='row g-3' method='post' action='' name='form$id5'><center>";
            echo '<a href="'.$trabalho.'" target="_blank">Abrir pdf</a></center></div>';
            echo '<br><br><h2>Título</h2>';
            echo '<p>'.$tit.'</p>';
            echo '<h2>Descrição</h2>';
            echo '<p>'.$des.'</p>';
          echo "</div>";
  
          echo "</div>";
        }
        if($ex=='zip'){
            echo '
            
            <div class="col-md-4 col-sm-6 gallery-grid gal_d ">
                <div class="gallery-single fix">
                <a href="#open-modal'.$id5.'">
                    <img src="sorces/zip.png" class="ttt" alt="hehheh">
                </div>
            </div>';
            echo"<div id='open-modal$id5' class='modal-window hehe'>";
            echo"<div  class='hehe'>";
            echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
            echo    "<div>";
            echo "<form class='row g-3' method='post' action='' name='form$id5'><center>";
            echo '<a href="'.$trabalho.'" target="_blank">Baixar zip</a></center></div>';
            echo '<br><br><h2>Título</h2>';
            echo '<p>'.$tit.'</p>';
            echo '<h2>Descrição</h2>';
            echo '<p>'.$des.'</p>';
          echo "</div>";
  
          echo "</div>";
        }
        if($ex=='html'){
            echo '
            
            <div class="col-md-4 col-sm-6 gallery-grid gal_e ">
                <div class="gallery-single fix">
                <a href="#open-modal'.$id5.'">
                    <img src="sorces/html.png" class="ttt" alt="hehheh">
                </div>
            </div>';
            echo"<div id='open-modal$id5' class='modal-window hehe'>";
            echo"<div  class='hehe'>";
            echo    "<a href='#modal-close' title='Close' class='modal-close'>close &times;</a>";
            echo    "<div>";
            echo "<form class='row g-3' method='post' action='' name='form$id5'><center>";
            echo '<a href="'.$trabalho.'" target="_blank">Abrir página</a></center></div>';
            echo '<br><br><h2>Título</h2>';
            echo '<p>'.$tit.'</p>';
            echo '<h2>Descrição</h2>';
            echo '<p>'.$des.'</p>';
          echo "</div>";
  
          echo "</div>";
        }
        }?>
				
			
			
			
			</div>
			</div>
		</div>
	</div>
    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Contacta-nos</h3>
                
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Telefone" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Mensagem" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<a href="mailto:webmaster@example.com"><button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Send Message" >Enviar</button></a>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Sobre min</a>
                        <a href="#">Faq</a>
                        <a href="#">Contactos</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Make your</a> Design By : Daniel Lindo 
				
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>