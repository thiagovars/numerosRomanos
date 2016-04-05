<!DOCTYPE html>
<html>
<head>
  <title>Numeros romanos</title>
</head>
<body>
<form action="romanos.php" method="post">
  <input type="text" name="iNum"></input>
  <input type="submit" value="verificar"></input>
</form>
<br/>
<br/>
  <?
  include_once('class.numeroRomano.php');
  
  $numeroRomano = new numeroRomano();
  echo $numeroRomano->converteNumero(10);
  ?>
  </body>
</html>
