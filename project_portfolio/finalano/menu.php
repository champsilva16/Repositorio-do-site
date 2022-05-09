<?php
session_start();

?>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: all 0.4s;
    font-family: -apple-system, 
    BlinkMacSystemFont,
    "Segoe UI",
    Roboto,
    Helvetica,
    Arial,
    sans-serif,
    "Apple Color Emoji",
    "Segoe UI Emoji",
    "Segoe UI Symbol";
}

.container{
    margin-left: 5%;
    margin-right: 5%;
}

/* Navbar section */
#vi{
    visibility: hidden;
}
.nav{
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: right;
    background-color: rgba(0,0,0,0.8);
    z-index: 99;
}

.nav div.logo{
    width: 180px;
    height: 10px;
    position: absolute;
}

.nav div.logo a{
    text-decoration: none;
    color: #fff;
    font-size: 1.2em;
    text-transform: uppercase;
}

.nav div.logo a:hover {
    color: #c0c0c0;
}

.nav div.main_list{
    width: 9    00px;
    height: 65px;
    float: right;
}

.nav div.main_list ul{
    width:100%;
    height: 65px;
    display: flex;
    list-style: none;
}

.nav div.main_list ul li{
    width: 120px;
    height: 65px;
}

.nav div.main_list ul li a{
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    text-transform: uppercase;
}

.nav div.main_list ul li a:hover{
    color: #c0c0c0;
}

.nav div.media_button {
    width: 40px;
    height: 40px;
    background-color: transparent;
    position: absolute;
    right: 15px;
    top: 12px;
    display: none;
}

.nav div.media_button button.main_media_button {
    width: 100%;
    height: 100%;
    background-color: transparent;
    outline: 0;
    border: none;
    cursor: pointer;
}

.nav div.media_button button.main_media_button span{
    width: 98%;
    height: 1px;
    display: block;
    background-color: #fff;
    margin-top: 9px;
    margin-bottom: 10px;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(1){
    transform: rotateY(180deg);
    transition: all 0.5s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(2){
    transform: rotateY(180deg);
    transition: all 0.4s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(3){
    transform: rotateY(180deg);
    transition: all 0.3s;
    background-color: #c0c0c0;
}

.nav div.media_button button.active span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active span:nth-of-type(2) {
    display: none;
}

.nav div.media_button button.active span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active:hover span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 20deg);
}

.nav div.media_button button.active:hover span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -20deg);
}

/* Home section */

.home{
    width: 100%;
    height: 100vh;
    background-color: #ddd;
}

/* Medai qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    
    .container{
        margin: 0;
    }
    
}
#nav2{
    background: rgba(0, 0, 0, 0.5)
} 





@media screen and (max-width:1024px) {
    
    .container{
        margin: 0;
    }
    
    .nav div.logo{
        margin-left: 15px;
    }
    
    .nav div.main_list{
        width: 100%;
        margin-top: 65px;
        height: 0px;
        overflow: hidden;
    }
    
    .nav div.show_list{
        height: 300px;
    }
    
    .nav div.main_list ul{
        flex-direction: column;
        width: 100%;
        height: 200px;
        top: 80px;
        right: 0;
        left: 0;
    }
    
    .nav div.main_list ul li{
        width: 100%;
        height: 65px;
        background-color:rgba(0,0,0,0.8);
        
    }
    
    .nav div.main_list ul li a{
      text-align: center;
        line-height: 40px;
        width: 100%;
        height: 40px;
        display: table;
   
    }
    
    .nav div.media_button{
        display: block;
    }
    #drop{
        visibility: hidden;
    }
    #vi{
        visibility:visible;
    }
}
#pro{
    vertical-align: middle;
}
#main3 {
   background-position: center;
    background-size:cover;
    background-repeat: no-repeat;
    width: 50px;
    height: 50px;
 
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    margin-top: 10px;
    
}





  </style>
   <?php
   require_once('config/config.php');?>
<nav class="nav" id="nav2">
    <div class="container">
        <div class="logo">
            <a href="index.php">Make Yours</a>
        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
 
      <?php 
           
					if (isset($_SESSION['email'])) 
					{
						$tp=$_SESSION['tipo'];
                        $sql = "SELECT foto FROM a14949_utils WHERE email=?"; 
                        $statement = $liga->prepare($sql);
                        $statement->bind_param('s',$_SESSION['email']);
                        $statement->execute();
                        $statement->bind_result($fotomenu);
                        if($statement->fetch())
                        {
                  	}
                        $statement->close();
                      }
					
					else
					{
						$tp=0;
					}
          if($tp==0){
            $sql = "SELECT idmenu, nomeop, link,permissao FROM 14949_menu WHERE permissao<=?"; 
            $statement = $liga->prepare($sql);
        
            // Ligar os parametros aos ?, onde (s = string, i = integer, d = double,  b = blob)
            $statement->bind_param('i',$tp);
      
            // Executar o query
            $statement->execute();
        
            // Ligar o resultado a variáveis
            $statement->bind_result($idmenu,$nomeop,$link,$per);
            while($statement->fetch())
            {
            ?>
                     <li class="menu__group" style="text-align: center;"><a href="<?php echo $link; ?>" class="menu__link r-link text-underlined"><?php echo $nomeop; ?></a></li>
              
            
      <?php 		}
            $statement->close();
          }
          else{
                if(isset($_SESSION['email']) && isset($_SESSION['tipo']))
                  $sql = "SELECT idmenu, nomeop, link,permissao FROM 14949_menu WHERE permissao>0 and permissao<=? "; 
                //else
                 // $sql = "SELECT idmenu, nomeop, link,permissao FROM menu WHERE permissao<=? "; 
                $statement = $liga->prepare($sql);
            
                // Ligar os parametros aos ?, onde (s = string, i = integer, d = double,  b = blob)
                $statement->bind_param('i',$tp);
          
                // Executar o query
                $statement->execute();
            
                // Ligar o resultado a variáveis
                $statement->bind_result($idmenu,$nomeop,$link,$per);
                while($statement->fetch())
                {
                ?>
                            <li class="menu__group" style="text-align: center;"><a href="<?php echo $link; ?>" class="menu__link r-link text-underlined"><?php echo $nomeop; ?></a></li>

          <?php 	
          
        
        }   
       ?>


<li class="menu__group" id="vi"><a href="ops.php"><div id="main3" class="rounded-circle" style="border:1px solid white;background-image:url('<?php echo $fotomenu; ?>') "></li></a>
<div class="dropdown" id="drop" >

<li class="menu__group"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div id="main3" class="rounded-circle" style="border:1px solid white;background-image:url('<?php echo $fotomenu; ?>') "></li>

<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="ops.php">Opções</a>
  <a class="dropdown-item" href="sair.php">Sair</a>

</div>
</div>
       
       <?php
                $statement->close();
            }
           
                ?>
    
        </ul>
        </div>
        <div class="media_button">
            <button class="main_media_button" id="mediaButton">
            <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
 <script>
 var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");

mediaButton.onclick = function () {
    
    "use strict";
    
    mainListDiv.classList.toggle("show_list");
    mediaButton.classList.toggle("active");
    
};
 </script>   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
          
      
			