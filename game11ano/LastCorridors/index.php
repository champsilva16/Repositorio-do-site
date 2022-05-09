<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Last Corridors</title>
	<link rel="shortcut icon" href="et.png">
    <title>Document</title>
</head>
<style>
  th{
    font-size: 30px;
  }
  td{
    font-size: 20px;
  }
    #new{
        visibility: hidden;
    }
    body{
        background-color: black;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    

    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}


.modal-content {
  position: relative;
  background-color: black;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}


@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}


.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close1 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color:black;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: black;
  color: white;
}

</style>
<?php
    $bd_host="sql110.epizy.com";
    $bd_user="epiz_31428328";
    $bd_password="LdoTrdvs8b";
    $bd_database="epiz_31428328_last_cor";
  

	$liga=new mysqli($bd_host,$bd_user,$bd_password,$bd_database);

	if($liga->connect_error){
		die ("Erro na ligaçao (" . $liga->connect_error . ") - " . $liga ->connect_error);

	}
    ?>
<body >
<div style="float: right;"><button><a href="porissi.php">Adim</a></button></div>
    <h1 style="text-align: center; color: blanchedalmond;">LAST CORRIDORS</h1>
    <a href="game.php"><img id="et" src="et.png" height="500px" width="300px" class="center" ></a> 
    <button id="myBtn" class="center">INSTRUÇÕES</button>
    <button id="myBtn1" class="center">TOP 10</button>

<!-- The Modal -->
<div id="myModal" class="modal">


  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>OLÁ, BEM-VINDO AO MEU JOGO</h2>
    </div>
    <div class="modal-body">
      <h2 style="color: white;">INSTRUÇÕES</h2>
      <p style="color: white;">CLICA SEMPRE NO ET PARA NÃO PERDERES VIDAS</p>
      <p style="color: white;">AO LONGO DO CAMINHO VÃO APARECER BENEFICIOS PARA TE AJUDAR NA TUA JORNADA</p>
      <p>TU VAIS TER UM MAU DIA</p>
    </div>
    <div class="modal-footer">
      <h3>BOA SORTE</h3>
    </div>
  </div>

</div>
<div id="myModal1" class="modal">


  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h2 style="text-align: left;">Classificações</h2>
    </div>
    <div class="modal-body" >
<table>
  <tr>
    <td>
        <?php
    $e=1;
    $query="select nome ,score from a14949_jogadores order by score DESC";
	$sta=$liga->prepare($query);
	$sta->execute();
	$sta->bind_result($nome,$score);
    echo "<div id='div1'><table class='tabela'>";
	echo"<tr class='tabela'>";
	echo"<th class='tabela' style='color:white'>Nome</th>";
  echo"<th class='tabela' style='color:white'>&nbsp</th>";
  echo"<th class='tabela' style='color:white'>&nbsp</th>";
  echo"<th class='tabela' style='color:white'>&nbsp</th>";
	echo"<th class='tabela' style='color:white'>Score</th>";
	echo"</tr>";
    while($sta->fetch() && $e<11){
		echo"<tr class='tabela'>";
		echo "<td class='tabela' style='color:white'>$e - $nome</td>";
    echo "<td class='tabela' style='color:white'>&nbsp</td>";
    echo "<td class='tabela' style='color:white'>&nbsp</td>";
    echo "<td class='tabela' style='color:white'>&nbsp</td>";
		echo "<td class='tabela' style='color:white'>$score</td>";
        $e=$e+1;
	}
    echo "</table></div>";
		$sta->close();
    ?>
    </td>

    <td style="vertical-align: top;padding-left:50px">
			<div><button><a href="pesquisa.php">Pesquisa um nome</a></button></div>
    </td>

    <div class="modal-footer">
    
    </div>
  </div>

</div>

<script>
    var x=document.getElementById('new');
    function gameover(){
        setTimeout(function(){
            x.style.visibility= "visible";
            
        }, 6000);
    }
    // Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");


var btn = document.getElementById("myBtn");

var btn1 = document.getElementById("myBtn1");

var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
btn1.onclick = function() {
  modal1.style.display = "block";
}


span1.onclick = function() {
  modal1.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
</body>
</html>