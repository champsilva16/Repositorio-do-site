<style>
  /* Styles for wrapping the search box */

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
    td:nth-of-type(1):before { content: "Nome Utilizador"; }
		td:nth-of-type(2):before { content: "Email"; }
		td:nth-of-type(3):before { content: "Titulo"; }
		td:nth-of-type(4):before { content: "Descrição"; }
        td:nth-of-type(5):before { content: "Data de upload"; }
	
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
    <input type="text" class="form-control" name="mama" placeholder="Pesquise por nome do utilizador">
    <div class="input-group-append">
      <input type="submit" name="submit" class="btn btn-primary" value="pesquisar">
      <input type='hidden' name='stand' value="666">
    </div>
  </div>
</form>
</div>
<?php 

   if(isset($_POST['aprovacions'])){
    $sql = "update  a14949_trabalhos set standby=1  WHERE id_tra=?";
    $st = $liga->prepare($sql);
    $st->bind_param('i',$_POST['id']);
    if ($st->execute() && $st->affected_rows>0) {
        } 
    $st->close();
   }


if(isset($_POST['eliminar1'])){
    $sql = "delete from a14949_trabalhos WHERE id_tra=?";
    $st = $liga->prepare($sql);
    $st->bind_param('i',$_POST['id']);
    if ($st->execute() && $st->affected_rows>0) {
        }
    $st->close();
    $noti='O seu trabalho '.$_POST['tit'].' foi rejeitado pelos administradores se tiver algumas duvidas contacte-nos.';
    $sql="INSERT into a14949_noti(email_noti,noti) values(?,?)";
              $st=$liga->prepare($sql);
          
              $st->bind_param('ss',$_POST['email'],$noti);
         
              if($st->execute() && $st->affected_rows>0){
                  echo""; 
              } 
                  else echo "<p></p>";
              $st->close();
    
}

if(isset($_POST['submit'])){
  $nomee="%".$_POST['mama']."%";

  
  $query="select email from a14949_utils where nome like ? ";
  $st=$liga->prepare($query);
  $st->bind_param('s',$nomee);
  $st->execute(); 
  $st->bind_result($emailtrue);
  
  while($st->fetch()){
    
  echo "<p></p>";
}

  $st->close(); 



  $query="select id_tra,trabalho,email_tra,titulo,descricao,dta from a14949_trabalhos where email_tra=? and  where standby=0";
    $sta=$liga->prepare($query);
    $sta->bind_param('s',$emailtrue);
    $sta->execute();
    $sta->bind_result($id,$trab,$email,$tit,$desc,$dta);

    echo '<center><table role="table" >
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">Nome Utilizador</th>
      <th role="columnheader">Email</th>
      <th role="columnheader">Titulo</th>
      <th role="columnheader">Descrição</th>
        <th role="columnheader">Data</th>
      
    </tr>
  </thead>';


  $my = new mysqli($bd_host,$bd_user,$bd_password,$bd_database);
    $o=0;
    while($sta->fetch()){
      if($email=='champsilva16@gmai.com'){
        echo "<div></div>";
      }else{
      $sql2 = "SELECT nome FROM a14949_utils where email=? ";
      $st1 = $my->prepare($sql2);
      $st1->bind_param('s',$email);
      $st1->bind_result($nome3);
      $st1->execute();
      $st1->fetch()  ;

      $trab2='"'.$trab.'"';
        echo"<tr class='tabela'>";
        echo "<form name='id$o'  method='POST'>";
        echo "<input type='hidden' name='stand'/>";
        echo "<input type='hidden' name='id' value='$id'/>";
        echo '<tbody role="rowgroup">
        <tr role="row">
        <td role="cell"><input type="text" class="form-control" name="nome" value="'.$nome3.'" readonly></td>
       
        <td role="cell"><input type="text" class="form-control"name="email" value="'.$email.'" readonly></td>
        <td role="cell"><input type="text"  class="form-control"name="tit" value="'.$tit.'" readonly></td>
        <td role="cell"><input type="text" class="form-control"name="desc" value="'.$desc.'" readonly></td>
        <td role="cell"><input type="text" class="form-control"name="dta" value="'.$dta.'" readonly></td>
        
        ';

        echo '<td role="cell"><input type="submit"  name="aprovacions" value="Aprovar " class="btn btn-success"  ></td>';
        echo '<td role="cell"><input type="submit"  name="eliminar1" value="Reprovar " class="btn btn-danger"  ></td>';
        echo " <td role='cell'><input type='button'  value='Ver Trabalho'  class='btn btn-dark' onclick='red($trab2)'></td>";
      echo "</form>";
     echo"</tr>";
        $o++;
        $st1->close();  
    }}
    $sta->close();
   echo "</table></div>";
 echo' </tbody>
</table></center>';

}else{
    $query="select id_tra,trabalho,email_tra,titulo,descricao,dta from a14949_trabalhos where standby=0";
    $sta=$liga->prepare($query);
    $sta->execute();
    $sta->bind_result($id,$trab,$email,$tit,$desc,$dta);

    echo '<center><table role="table" >
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">Nome Utilizador</th>

      <th role="columnheader">Email</th>
      <th role="columnheader">Titulo</th>
      <th role="columnheader">Descrição</th>
        <th role="columnheader">Data</th>
      
    </tr>
  </thead>';



  $my = new mysqli($bd_host,$bd_user,$bd_password,$bd_database);
  $o=0;
  while($sta->fetch()){
    if($email=='champsilva16@gmai.com'){
      echo "<div></div>";
    }else{
    $sql2 = "SELECT nome FROM a14949_utils where email=? ";
    $st1 = $my->prepare($sql2);
    $st1->bind_param('s',$email);
    $st1->bind_result($nome3);
    $st1->execute();
    $st1->fetch()  ;

    $trab2='"'.$trab.'"';
      echo"<tr class='tabela'>";
      echo "<form name='id$o'  method='POST'>";
      echo "<input type='hidden' name='stand'/>";
      echo "<input type='hidden' name='id' value='$id'/>";
      echo '<tbody role="rowgroup">
      <tr role="row">
      <td role="cell"><input type="text" class="form-control" name="nome" value="'.$nome3.'" readonly></td>
     
      <td role="cell"><input type="text" class="form-control"name="email" value="'.$email.'" readonly></td>
      <td role="cell"><input type="text"  class="form-control"name="tit" value="'.$tit.'" readonly></td>
      <td role="cell"><input type="text" class="form-control"name="desc" value="'.$desc.'" readonly></td>
      <td role="cell"><input type="text" class="form-control"name="dta" value="'.$dta.'" readonly></td>
      
      ';

      echo '<td role="cell"><input type="submit"  name="aprovacions" value="Aprovar " class="btn btn-success"  ></td>';
      echo '<td role="cell"><input type="submit"  name="eliminar1" value="Reprovar " class="btn btn-danger"  ></td>';
      echo " <td role='cell'><input type='button'  value='Ver Trabalho'  class='btn btn-dark' onclick='red($trab2)'></td>";
    echo "</form>";
   echo"</tr>";
      $o++;
      $st1->close();  
  }}
    $sta->close();
 
 echo' </tbody>
</table></center>';
}
?>
<script>

function red(n){

  window.open(n);
}

</script>