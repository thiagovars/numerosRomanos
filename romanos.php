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


  // $sNum = '';

  // if($iNum && is_numeric($iNum)){
  //   $iNumPrint = $iNum;
  //   while($iNum != 0){
      
  //     if($iNum >= 1000){
  //       $iNum -= 1000;
  //       $sNum .= MIL; 
        
  //     } else if($iNum >= 900){
  //        $iNum -= 900;
  //        $sNum .= 'CM'; 
  //     }else if($iNum >= 500){
  //       $iNum -= 500;
  //       $sNum .= QUINA; 
  //     }else if($iNum >= 400){
  //        $iNum -= 400;
  //        $sNum .= 'CD'; 
  //     } else if($iNum >= 100){
  //       $iNum -= 100;
  //       $sNum .= CEM; 
  //     }else if($iNum >= 90){
  //        $iNum -= 90;
  //        $sNum .= 'XC'; 
  //     }else if($iNum >= 50){
  //       $iNum -= 50;
  //       $sNum .= CINQUENTA; 
  //     }else if($iNum >= 40){
  //        $iNum -= 40;
  //        $sNum .= 'XL'; 
  //     }else if($iNum >= 10){
  //       $iNum -= 10;
  //       $sNum .= DEZ; 
  //     }else if($iNum == 9){
  //        $iNum -= 9;
  //        $sNum .= 'IX'; 
  //     }else if($iNum >= 5){
  //       $iNum -= 5;
  //       $sNum .= CINCO; 
  //     } else if($iNum >= 4){
  //        $iNum -= 4;
  //        $sNum .= 'IV'; 
  //     }else{
  //       $iNum --;
  //       $sNum .= UM; 
  //     }
  //   }
  //   echo 'O numero '.$iNumPrint.' é '.$sNum.' em romano';
  // }
  ?>
  </body>
</html>
