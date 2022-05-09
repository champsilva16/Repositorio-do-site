<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
<?php
     $bd_host="sql110.epizy.com";
     $bd_user="epiz_31428328";
     $bd_password="LdoTrdvs8b";
     $bd_database="epiz_31428328_last_cor";
 

	$liga=new mysqli($bd_host,$bd_user,$bd_password,$bd_database);

	if($liga->connect_error){
		die ("Erro na ligaçao (" . $liga->connect_error . ") - " . $liga ->connect_error);

	}
    if(isset($_POST['atualizar1'])){
        $id2=$_POST['id'];
        $score2=$_POST['score'];
        $nome2=$_POST['nome'];
        $sql="update a14949_jogadores set score=?,nome=? where id_jogador=?";
        $st=$liga->prepare($sql);
        $st->bind_param('isi',$score2,$nome2,$id2);
        if($st->execute() && $st->affected_rows>0){
        } 	
        $st->close();}
           
    
    
    if(isset($_POST['eliminar1'])){
        $sql = "delete from a14949_jogadores WHERE id_jogador=?";
        $st = $liga->prepare($sql);
        $st->bind_param('i',$_POST['id']);
        if ($st->execute() && $st->affected_rows>0) {
            }
        $st->close();
    }
    
        $query="select id_jogador,nome,score from a14949_jogadores";
        $sta=$liga->prepare($query);
        $sta->execute();
        $sta->bind_result($id,$nome,$score);
        echo "<div id='div1'><table class='tabela'>";
        echo"<tr class='tabela'>";
        echo"<th class='tabela'>Nome</th>";
        echo"<th class='tabela'>Score</th>";
        echo"</tr>";
        while($sta->fetch()){
            echo"<tr class='tabela'>";
            echo "<form name='id$id'  method='POST'>";
            echo "<td class='tabela'><input type='number' name='id' value='$id' readonly></td>";
            echo "<td class='tabela'><input type='text' name='nome' value='$nome'></td>";
            echo "<td class='tabela'><input type='text' name='score' value='$score'></td>";
            echo "<td class='tabela'> <input type='submit'  name='atualizar1' value='atualizar'></td>";
            echo "<td class='tabela'> <input type='submit' name='eliminar1' value='eliminar' onclick='return validae();'></td>";
      
            echo "</form>";
            echo"</tr>";
            
        }
        $sta->close();
        echo "</table></div>";
         
    ?>
   <div style="float: left;"><button><a href="index.php">Voltar</a></button></div>

</body>
</html>