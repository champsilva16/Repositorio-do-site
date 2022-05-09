
<!DOCTYPE html>
<html>
<head>
	<title>Last Corridors</title>
	<link rel="shortcut icon" href="et.png">
</head>
<style type="text/css">
	#et{
		visibility: hidden;
	}
	#color{
		text-align: center;
		color: white;
	}
	body{
		background-image: url(espaco.png);																
		padding: 0px;
		background-position: center;
		
		
	}
	p{
		color: white;
	}
	#audio1	{
		visibility: hidden;	
	}
	#audio2	{
		visibility: hidden;	
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;

	}
	li {
    float: left;
}
	li p {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
}
	li p:hover {
		background-color: #555;
	}
	#lista1{
		float: left;
	}
	#lista2{
		float: right;

	}
	#boost{
		visibility: hidden;	
	}
	.painel {
		position: absolute;
		width: 190px;
		padding: 10px;
		left: 0px;
		bottom: 0px;
		
		color: #fff;
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
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}

.parent {
  display: grid;
  place-items: center;
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
	if(isset($_POST['submit'])){
		
            $nome=$_POST['nome'];
			$score0=$_POST['score'];
			
				$sql="insert into a14949_jogadores(nome ,score) values(?,?)";
				$st=$liga->prepare($sql);
				$st->bind_param('si',$nome,$score0);

				if($st->execute() && $st->affected_rows>0){

				} 
					
				$st->close();
			}
	if(isset($_POST['submit2'])){ 
		
		$nome=$_POST['nome'];
		$score0=$_POST['score'];
	
			$ql="select id_jogador,score from a14949_jogadores where nome=?";
			$sta=$liga->prepare($ql);
			$sta->bind_param('s',$_POST["nome"]);
			$sta->execute();
			$sta->bind_result($id,$score2);
			while($sta->fetch()){
				}
				$sta->close();
			
			if($score0>$score2){
			$sql="update a14949_jogadores set score=? where id_jogador=?";
			$st=$liga->prepare($sql);
			$st->bind_param('ii',$score0,$id);

			if($st->execute() && $st->affected_rows>0){
			

			} 
				
			$st->close();
			}
		}

		
		
?>
<body >
	

<div id="myModal" class="modal">

	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2 style="text-align: center;">TU PERDESTE</h2>
	  </div>
	  <div class="modal-body">
		<p style="text-align: center;">ACERTASTE: <span id="certoo"></span></p>
		<form  action=""  method="POST" name="frm1">
			<p style="color: white; text-align: center;" >Dejesas guardar o teu score: </p>
			
			<div class="parent"><input type="text" name="nome"></div><br>
			<div class="parent"><input type="submit" name="submit" value="Guardar como novo"></div>
			<div class="parent"><input type="submit" name="submit2" value="Guardar num usuario ja existente"></div>
			<input type="hidden" name="score" id="score" value="">
			
		</form>
	  </div>
	  <div class="modal-footer">
		<button onclick="refresh()" class="center" name="recome">Recomeçar</button>
	  </div>
	</div>
  
  </div>
	<div>
	<div style="float: right;"><button><a href="index.php">Voltar</a></button></div>
		<img id="coracao" src="heart.png" style=" width: 30px; height: 30px ; position:absolute;top: 400px; left: 900px;visibility: hidden;"/>
		<h1 id="color">
			Acertados: <span id="certos"></span>	
		</h1>
		<div id="diva2">
		<ul id="lista1">
			<li id="come"><p onclick="myFunction()">Começar</p></li>
			<li><p onclick="refresh()">Recomeçar</p></li>
		</ul>
		<ul id="lista2">
			<li><p onclick="enableAutoplay()">🔊</p></li>
			<li><p onclick="disableAutoplay()">🔈</p></li>
		</ul>
		</div>
		  	
		  <table>
			<tr>
				<td>
					<audio  id="audio1" controls  >
			  			<source src="1.mp3" type="audio/mpeg">
			 			<source src="1.mp3" type="audio/ogg"> 
					</audio>
				</td>
				<td>
					<audio  id="audio2" controls  >
			  			<source src="2.mp3" type="audio/mpeg">
			  			<source src="2.mp3" type="audio/ogg"> 
					</audio>
				</td>
			</tr>
		</table>
	</div>
	<img id="et" src="et.png" width="120" height="100" style="position:absolute;top:250px;left:250px;" />
	</div>
	<div>
		<img id="boost" src="x2.png" width="80" height="80" style="position:absolute;top:400px;left:400px;">
	</div>
	<img id="bomb" src="bomb.png" width="70" height="60" style=" position: absolute; top:300px;left:300px;visibility: hidden;"/>
	<img id="bomb1" src="bomb.png" width="70" height="60" style=" position: absolute; top:550px;left:550px;visibility: hidden;"/>
	<img id="dividir" src="dividir.png" width="100" height="80" style=" position: absolute; top:50px;left:550px;visibility: hidden;"/>
	<img id="veneno" src="veneno.png" width="100" height="80" style=" position: absolute; top:200px;left:550px;visibility: hidden;"/>
	<img id="extra" src="extra.png" width="40" height="40" style=" position: absolute; top:300px;left:350px;visibility: hidden;"/>
	<div style="height:400px;" id="areadejogo" >
	

	<div class="painel">
		<div class="vidas">
			<img id="v1" src="heart.png" />
			<img id="v2" src="heart.png" />
			<img id="v3" src="heart.png" />
		</div>
		
</body>
<script type="text/javascript">
	var f=1;
	var extra=document.getElementById('extra')
	var veneno=document.getElementById('veneno');
	var come=document.getElementById('come');
	var dividir=document.getElementById('dividir');
	var vida2=0;
	var bomb1=document.getElementById("bomb1");
	var nvidas=2;
	var nuvidas=3;
	var vidas=document.getElementsByClassName("vidas");
	var bomb=document.getElementById("bomb");
	var bost=document.getElementById("boost");
	var lista=document.getElementById("diva2");
    var et= document.getElementById("et");
    var area= document.getElementById("areadejogo");
	var x = document.getElementById("audio1");
	var t = document.getElementById("audio2");
	var px;
	var py;
	var xg;
	var yg;
	var o = 0;
	window.addEventListener('mousemove', function (e) {
    xg=e.x;
    yg=e.y;
});
function enableAutoplay() { 
 		 x.autoplay = true;
 		 x.load();	
}
function disableAutoplay() { 
	  x.autoplay = false;
	  x.load();
} 
function refresh(){
	window.location.reload();
}
var acerto=1;
var velocidade=1000;
function myFunction()
	 {
		come.style.visibility= "hidden";
		et.style.visibility= "visible";
		document.body.style.cursor = "pointer";

	    timer=setInterval(function(){ 
		if(acerto==0){
			if(nvidas>0){
				document.getElementById('v' + nuvidas).style.visibility= "hidden";
				nuvidas--;
				nvidas--;

				}
				else{
					document.getElementById('v1').style.visibility= "hidden";
					gameover();
					clearInterval(timer);
					
				}
		}
	    py=getRandomInt(200,screen.width-300);
		px=getRandomInt(200,screen.height-300);
		document.getElementById('et').style.top=px +'px';
		document.getElementById('et').style.left=py +'px'; 
		acerto=0;
		

	}, velocidade);
    et.onclick = function() {
	
	acerto=1;
	console.log('acertou');
	if(f==1)o=o+1;
	else o=o-1;
	document.getElementById('certos').innerHTML=o;
	if(o==100){
		nvidas=0;
		document.getElementById('v2').style.visibility= "hidden";
		document.getElementById('v3').style.visibility= "hidden";
		clearInterval(timer);
		o=o+1;
		disableAutoplay();
		alert("FOSTE SUGADO POR O BURACO NEGRO");
		alert("PARECE SER O FIM");
		var x=prompt("DESEJAS CONTINUAR?");
		if (x=='SIM'|| x=='sim') {
			alert("...");
			document.body.style.backgroundImage = "url('https://cdn.wallpapersafari.com/33/55/ns84ph.gif')";
			t.autoplay = true;
			  t.load();
			  lista.style.visibility= "hidden";
			  velocidade=800;
			  myFunction();
			}
			else{
				alert("FIZESTE O MELHOR")
				refresh();
			}	
		}
		if(o==15){
			bost.style.visibility= "visible";
			setTimeout(function() {
				bost.style.visibility= "hidden";
			}, 800);
			bost.onclick = function() {
				o=o*2;
				document.getElementById('certos').innerHTML=o;
				this.remove()
			}
			
			
		}
		if(o==50){
				
				py1=getRandomInt(200,screen.width-300);
				px1=getRandomInt(200,screen.height-300);
				bomb.style.top=px1 +'px';
				bomb.style.left=py1 +'px';
				//segunda bomba
				py2=getRandomInt(200,screen.width-300);
				px2=getRandomInt(200,screen.height-300);
				bomb1.style.top=px2 +'px';
				bomb1.style.left=py2 +'px';
			
				//tornar visible
				bomb.style.visibility= "visible";
				bomb1.style.visibility= "visible";
	
			
		
			setTimeout(function() {
				bomb.style.visibility= "hidden";
				bomb1.style.visibility= "hidden";

			}, 9000);
			bomb.onclick=function(){
				this.remove();
				if(nvidas>0){
				document.getElementById('v' + nuvidas).style.visibility= "hidden";
				nuvidas--;
				nvidas--;

				}
				else{
					document.getElementById('v1').style.visibility= "hidden";
					gameover();
					clearInterval(timer);
				}

			}
			bomb1.onclick=function(){
				this.remove();
				if(nvidas>0){
				document.getElementById('v' + nuvidas).style.visibility= "hidden";
				nuvidas--;
				nvidas--;
				

				}
				else{
					document.getElementById('v1').style.visibility= "hidden";
					gameover();
					clearInterval(timer);
				}
				
			}


	}
		if(o==80){
				py1=getRandomInt(200,screen.width-300);
				px1=getRandomInt(200,screen.height-300);
				dividir.style.top=px1 +'px';
				dividir.style.left=py1 +'px';
				dividir.style.visibility= "visible";
				setTimeout(function() {
					dividir.style.visibility= "hidden";
				}, 1500);
				dividir.onclick = function() {
					o=o/2;
					document.getElementById('certos').innerHTML=o;
					this.remove()
				}
			}
			if(o==67){
			veneno.style.visibility= "visible";
			setTimeout(function() {
				veneno.style.visibility= "hidden";
			}, 1000);
			veneno.onclick=function(){
				f=0;
				setTimeout(function() {
				f=1;
			}, 5000);
				}
			}
			if(o==40 && nvidas==0){
				extra.style.visibility= "visible";
			setTimeout(function() {
				extra.style.visibility= "hidden";
			}, 1000);
				extra.onclick=function(){
				this.remove();
				document.getElementById('v2').style.visibility= "visible";
				nuvidas++;
				nvidas++;
				}
			}
}

	area.onclick=function(){
		if(nvidas>0){
				document.getElementById('v' + nuvidas).style.visibility= "hidden";
				nuvidas--;
				nvidas--;
				}
				else{
					
					gameover();
					clearInterval(timer);
					acerto=1;
				}
	}
}
function getRandomInt(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min)) + min;
}
function close_window() {
    close();
}

var modal = document.getElementById("myModal");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function gameover() {
  modal.style.display = "block";
  document.getElementById('certoo').innerHTML=o;
  

  lista.style.visibility= "hidden";
  et.style.visibility="hidden";
  document.getElementById('score').value=o;
  //document.frm1.submit();
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>