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
		td:nth-of-type(2):before { content: "Trabalho"; }
		td:nth-of-type(3):before { content: "Tipo"; }
		td:nth-of-type(4):before { content: "Data"; }

    }
    @media screen and (min-width: 1000px){
        body{color: white;}
        input{width:100%}
        
        
    }
</style>
<br>
<br>
<?php 





if(isset($_POST['submit'])){
  $nomee="%".$_POST['mama']."%";

  
  $query="select email,trabalho2,Tipo,dta from a14949_alteracoes where nome like ? ";
  $st=$liga->prepare($query);
  $st->bind_param('s',$nomee);
  $st->execute(); 
  $st->bind_result($email,$trab,$ti,$dta);
  echo '<center><table role="table" >
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">Email</th>
      <th role="columnheader">Trabalho</th>
      <th role="columnheader">Tipo</th>
      <th role="columnheader">Data</th>

    </tr>
  </thead>';



    $o=0;
    while($st->fetch()){
      if($email=='champsilva16@gmai.com'){
            echo "<div></div>";
      }else{
        echo"<tr class='tabela'>";
        echo "<form name='id$o'  method='POST'>";
        echo "<input type='hidden' name='alt'/>";
        echo '<tbody role="rowgroup">
        <tr role="row">
          <td role="cell"><input type="text"class="form-control" name="email" value="'.$email.'" readonly></td>
          <td role="cell"><input type="text" class="form-control"name="nome" value="'.$trab.'"readonly></td>
          <td role="cell"><input type="text" class="form-control"name="tele" value="'.$ti.'"readonly></td>
          <td role="cell"><input type="text" class="form-control" name="nick" value="'.$dta.'"readonly></td>';
         
       
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
    $query="SELECT * FROM a14949_alteracoes ORDER BY dta desc";
    $sta=$liga->prepare($query);
    $sta->execute();
    $sta->bind_result($id,$email,$trab,$ti,$dta);
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
    <th role="columnheader">Trabalho</th>
    <th role="columnheader">Tipo</th>
    <th role="columnheader">Data</th>

    </tr>
  </thead>';



    $o=0;
    while($sta->fetch()){
      if($email=='champsilva16@gmai.com'){
            echo "<div></div>";
      }else{
        echo"<tr class='tabela'>";
        echo "<form name='id$o'  method='POST'>";
        echo "<input type='hidden' name='alt'/>";
        echo '<tbody role="rowgroup">
        <tr role="row">
          <td role="cell"><input type="text"class="form-control" name="email" value="'.$email.'" readonly></td>
          <td role="cell"><input type="text" class="form-control"name="nome" value="'.$trab.'" readonly></td>
          <td role="cell"><input type="text" class="form-control"name="tele" value="'.$ti.'" readonly></td>
          <td role="cell"><input type="text" class="form-control" name="nick" value="'.$dta.'" readonly></td>';
         
       
        echo "</form>";
       echo"</tr>";
      }
    }
    $sta->close();
   /*echo "</table></div>";*/
 echo' </tbody>
</table>';
  }
?>
<br><br><br>