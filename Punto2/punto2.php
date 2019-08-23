<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
  <h1>PUNTO 2</h1>
</body>
</html>

<form  action="punto2.php" method="post">
<input type="number" name="diames" value="" placeholder="Ingrese Dia">
<input type="submit" name="ENVIAR" value="ENVIAR">
</form>
<?php if ($_POST)
{
  $dia=$_POST['diames'];
  switch ($dia) {
    case 1:{
      echo "<p>Sabado 1 de septiembre del presente año 2018</p>";
      break;}
    case 2:{
      echo"Domingo 2 de septiembre del presente año 2018";
      break;
    }
    case 3:{
      echo"Lunes 3 de septiembre del presente año 2018";
      break;
    }
    case 4:{
      echo"Martes 4 de septiembre del presente año 2018";
      break;
    }
    case 5:{
      echo"Miercoles 5 de septiembre del presente año 2018";
      break;
    }
    case 6:{
      echo"Jueves 6 de septiembre del presente año 2018";
      break;
    }
    case 7:{
      echo"Viernes 7 de septiembre del presente año 2018";
      break;
    }
    case 8:{
      echo"Sabado 8 de septiembre del presente año 2018";
      break;
    }
    case 9:{
      echo"Domingo 9 de septiembre del presente año 2018";
      break;
    }
    case 10:{
      echo"Lunes 10 de septiembre del presente año 2018";
      break;
    }
    case 11:{
      echo"Martes 11 de septiembre del presente año 2018";
      break;
    }
    case 12:{
      echo"Miercoles 12 de septiembre del presente año 2018";
      break;
    }
    case 13:{
      echo"Jueves 13 de septiembre del presente año 2018";
      break;
    }
    case 14:{
      echo"Viernes 14 de septiembre del presente año 2018";
      break;
    }
    case 15:{
      echo"Sabado 15 de septiembre del presente año 2018";
      break;
    }
    case 16:{
      echo"Domingo 16 de septiembre del presente año 2018";
      break;
    }
    case 17:{
      echo"Lunes 17 de septiembre del presente año 2018";
      break;
    }
    case 18:{
      echo"Martes 18 de septiembre del presente año 2018";
      break;
    }
    case 19:{
      echo"Miercoles 19  de septiembre del presente año 2018";
      break;
    }
    case 20:{
      echo"Jueves 20 de septiembre del presente año 2018";
      break;
    }
    case 21:{
      echo"Viernes 21 de septiembre del presente año 2018";
      break;
    }
    case 22:{
      echo"Sabado 22 de septiembre del presente año 2018";
      break;
    }
    case 23:{
      echo"Domingo 23 de septiembre del presente año 2018";
      break;
    }
    case 24:{
      echo"Lunes 24 de septiembre del presente año 2018";
      break;
    }
    case 25:{
      echo"Martes 25 de septiembre del presente año 2018";
      break;
    }
    case 26:{
      echo"Miercoles 26 de septiembre del presente año 2018";
      break;
    }
    case 27:{
      echo"Jueves 27 de septiembre del presente año 2018";
      break;
    }
    case 28:{
      echo"Viernes 28 de septiembre del presente año 2018";
      break;
    }
    case 29:{
      echo"Sabado 29 de septiembre del presente año 2018";
      break;
    }
    case 30:{
      echo"Domingo 30 de septiembre del presente año 2018";
      break;
    }
    }
}

  ?>