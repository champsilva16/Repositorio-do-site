<style>
  .main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
/*
	Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
	*/
	@media
	  only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {
      input{width:100%}
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
    
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

    tr {
      margin: 3 3 1rem 0;
      color:white;
    }
      
  
    
		td {
			/* Behave  like a "row" */
			border: none;
		
			position: relative;
			padding-left: 50%;
            
            
		}

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 0;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			
		}

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
		td:nth-of-type(1):before { content: "Email"; }
		td:nth-of-type(2):before { content: "Nome"; }
		td:nth-of-type(3):before { content: "Telefone"; }
		td:nth-of-type(4):before { content: "Nickname"; }

    }
    @media screen and (min-width: 1000px){
        body{color: white;}
        input{width:100%}
        
        
    }
</style>
<div class="main">
<form action="" method="post">
  <!-- Another variation with a button -->
  <div class="input-group">
    <input type="text" class="form-control" name="mama" placeholder="Pesquise por nome">
    <div class="input-group-append">
      <input type="submit" name="submit" class="btn btn-primary" value="pesquisar">
      <input type='hidden' name='utlis' >
    </div>
  </div>
</form>
</div>
<?php 
if(isset($_POST['tipp'])){
    if($_POST['email']==$_SESSION['email']){
        echo "<p>Voce nao pode se despromover";
    }else{
    $tipooo=$_POST['tipp'];
    if($tipooo=='Despromover')
        $tipooo=1;
    else $tipooo=2;
 
    $sql="update a14949_utils set tipo=? where email=?";
    $st=$liga->prepare($sql);
    $st->bind_param('is',$tipooo,$_POST['email']);
    if($st->execute() && $st->affected_rows>0){
      
    } 	
    $st->close();
}
    }
if(isset($_POST['atualizar1'])){
    $nome1=$_POST['nome'];
    $tele1=$_POST['tele'];
    $nick1=$_POST['nick'];
    
    $email3=$_POST['email'];
    $sql="update a14949_utils set nome=?,telefone=?,nickname=? where email=?";
    $st=$liga->prepare($sql);
    $st->bind_param('siss',$nome1,$tele1,$nick1,$email3);
    if($st->execute() && $st->affected_rows>0){
        $_SESSION['nome']=$nome1;
    } 	
    $st->close();}
       


if(isset($_POST['eliminar1']) && ($_POST['email'])!=$_SESSION['email']){
    $sql = "delete from a14949_utils WHERE email=?";
    $st = $liga->prepare($sql);
    $st->bind_param('s',$_POST['email']);
    if ($st->execute() && $st->affected_rows>0) {
        }
    $st->close();
}
if(isset($_POST['submit'])){
  $nomee="%".$_POST['mama']."%";

  
  $query="select email,nome,telefone,nickname,tipo from a14949_utils where nome like ? ";
  $st=$liga->prepare($query);
  $st->bind_param('s',$nomee);
  $st->execute(); 
  $st->bind_result($email,$nome,$telefone,$nick,$tipo3);
  echo '<center><table role="table" >
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">Email</th>
      <th role="columnheader">Nome</th>
      <th role="columnheader">telefone</th>
      <th role="columnheader">Nickname</th>

    </tr>
  </thead>';



    $o=0;
    while($st->fetch()){
      if($email=='champsilva16@gmai.com'){
            echo "<div></div>";
      }else{
        echo"<tr class='tabela'>";
        echo "<form name='id$o'  method='POST'>";
        echo "<input type='hidden' name='utlis'/>";
        echo '<tbody role="rowgroup">
        <tr role="row">
          <td role="cell"><input type="text"class="form-control" name="email" value="'.$email.'" readonly></td>
          <td role="cell"><input type="text" class="form-control"name="nome" value="'.$nome.'"></td>
          <td role="cell"><input type="text" class="form-control"name="tele" value="'.$telefone.'"></td>
          <td role="cell"><input type="text" class="form-control" name="nick" value="'.$nick.'"></td>';
          ?>
          <td role="cell"><input class="btn btn-primary" type="submit" name="tipp" value="<?php if($tipo3==2 )echo'Despromover';else{echo'Promover';}?>"></td>
        <?php
      echo '<td role="cell"><input type="submit" class="btn btn-primary" name="atualizar1" value="atualizar"></td>';
        echo '<td role="cell"><input type="submit" class="btn btn-danger  " name="eliminar1" value="eliminar "></td>';
       
        echo "</form>";
       echo"</tr>";
        $o++;
      }
    }
    $st->close();
   /*echo "</table></div>";*/
 echo' </tbody>
</table>';
  
}
else{
    $query="SELECT * FROM adminut";
    $sta=$liga->prepare($query);
    $sta->execute();
    $sta->bind_result($email,$nome,$telefone,$nick,$tipo3);
    /*echo "<div id='div1'><table class='tabela'>";
    echo"<tr class='tabela'>";
    echo"<th class='tabela'></th>";
    echo"<th class='tabela'></th>";
    echo"<th class='tabela'></th>";
    echo"<th class='tabela'></th>";
    echo"<th class='tabela'></th>";
    echo"</tr>";*/
    echo '<center><table role="table" >
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">Email</th>
      <th role="columnheader">Nome</th>
      <th role="columnheader">telefone</th>
      <th role="columnheader">Nickname</th>

    </tr>
  </thead>';



    $o=0;
    while($sta->fetch()){
      if($email=='champsilva16@gmai.com'){
            echo "<div></div>";
      }else{
        echo"<tr class='tabela'>";
        echo "<form name='id$o'  method='POST'>";
        echo "<input type='hidden' name='utlis'/>";
        echo '<tbody role="rowgroup">
        <tr role="row">
          <td role="cell"><input type="text"class="form-control" name="email" value="'.$email.'" readonly></td>
          <td role="cell"><input type="text" class="form-control"name="nome" value="'.$nome.'"></td>
          <td role="cell"><input type="text" class="form-control"name="tele" value="'.$telefone.'"></td>
          <td role="cell"><input type="text" class="form-control" name="nick" value="'.$nick.'"></td>';
          ?>
          <td role="cell"><input class="btn btn-primary" type="submit" name="tipp" value="<?php if($tipo3==2 )echo'Despromover';else{echo'Promover';}?>"></td>
        <?php
      echo '<td role="cell"><input type="submit" class="btn btn-primary" name="atualizar1" value="atualizar"></td>';
        echo '<td role="cell"><input type="submit" class="btn btn-danger  " name="eliminar1" value="eliminar "></td>';
       
        echo "</form>";
       echo"</tr>";
        $o++;
      }
    }
    $sta->close();
   /*echo "</table></div>";*/
 echo' </tbody>
</table>';
  }
?>