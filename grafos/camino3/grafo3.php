<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta 
      http-equiv="X-UA-Compatible" 
      content="IE=edge"
    >
    <meta 
      name="viewport" 
      content="width=device-width, initial-scale=1.0"
    >
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
      crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <body>
  </body>
</html>
  <?php
error_reporting(0);
    $s=0; $i=0; $j=0;
    $n=array();
    $bin= array();
    if(isset($_POST ["MatrizNodo"])){
        $n[0][0]= (int)$_POST ["txtn00"];
        $n[0][1]= (int)$_POST ["txtn01"];
        $n[0][2]= (int)$_POST ["txtn02"];
      

        $n[1][0]= (int)$_POST ["txtn10"];
        $n[1][1]= (int)$_POST ["txtn11"];
        $n[1][2]= (int)$_POST ["txtn12"];


        $n[2][0]= (int)$_POST ["txtn20"];
        $n[2][1]= (int)$_POST ["txtn21"];
        $n[2][2]= (int)$_POST ["txtn22"];


    }
    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            $bin[$i][$j]=$n[$i][$j];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{ 
            border: 1px solid;
        }
    </style>
</head>
<body>
<form method="post" action="./grafo3.php">
<table width="115" border="0"> 
    <tr>
        <td colspan="4" style="text-align: center;" ><strong >ESCRIBIR PESO DE CONEXION</td>
    </tr>
    <tr>
        <td>  </td>
        <td> A </td>
        <td> B </td>
        <td> C </td>
        
    </tr>
    <tr>
        <td width="43"> A </td>
        <td width="43"><input name="txtn00" type="text" id="txtn00"
        value="<?= 0?>" size = "3"/> </td>
        <td width="62"><input name="txtn01" type="text" id="txtn01"
        value="<?= $n[0][1]?>" size = "3"/> </td>
        <td width="62"><input name="txtn02" type="text" id="txtn02"
        value="<?= $n[0][2]?>" size = "3"/> </td>
   

    </tr>
    <tr>
        <td width="43"> B </td>
        <td width="43"><input name="txtn10" type="text" id="txtn10"
        value="<?= $n[1][0]?>" size = "3"/> </td>
        <td width="62"><input name="txtn11" type="text" id="txtn11"
        value="<?= 0?>" size = "3"/> </td>
        <td width="62"><input name="txtn12" type="text" id="txtn12"
        value="<?= $n[1][2]?>" size = "3"/> </td>
        

    </tr>
    <tr>
        <td width="43"> C </td>
        <td width="43"><input name="txtn20" type="text" id="txtn20"
        value="<?= $n[2][0]?>" size = "3"/> </td>
        <td width="62"><input name="txtn21" type="text" id="txtn21"
        value="<?= $n[2][1]?>" size = "3"/> </td>
        <td width="62"><input name="txtn22" type="text" id="txtn22"
        value="<?= 0?>" size = "3"/> </td>
    </tr>
    <tr></tr>
    <tr>
        <td>
            <input name= "MatrizNodo" type="submit" id="MatrizNodo" value="Mostrar"/></td>
        </td>
    </tr>
</table>
<?php
      for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            if($bin[$i][$j]>0){
                $bin[$i][$j]=1;
            }
        }
    }
?>
<table width="115" border="0"> 
    <tr>
        <td colspan="4" style="text-align: center;" ><strong >Matriz De Adyacencia</td>
    </tr>   
    <tr>
        <td>  </td>
        <td> A </td>
        <td> B </td>
        <td> C </td>
       
    </tr>
    <tr>
        <td width="43"> A </td>
        <td><?php echo $bin[0][0];?></td>
        <td><?php echo $bin[0][1];?></td>
        <td><?php echo $bin[0][2];?></td>
        
    </tr>
    <tr>
        <td width="43"> B </td>
        <td><?php echo $bin[1][0];?></td>
        <td><?php echo $bin[1][1];?></td>
        <td><?php echo $bin[1][2];?></td>
        

    </tr>
    <tr>
        <td width="43"> C </td>
        <td><?php echo $bin[2][0];?></td>
        <td><?php echo $bin[2][1];?></td>
        <td><?php echo $bin[2][2];?></td>
       
    </tr>

    
</form>























  