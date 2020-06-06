<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $imp=$_POST['imp'];
      $entr=$_POST['entr'];
      $pag=$_POST['pag'];
      $ven=$_POST['ven'];
      echo "<TABLE border=1>";
      echo "<TR>";
      echo "<TD>numero de pagos</TD>";
      echo "<TD>importe de vencimiento</TD>";
      echo "<TD>restante</TD>";
      echo "<TD>fecha</TD>";
      echo "</TR>";
     
      echo "<TR>";
      echo "<TD>entrada</TD>";
      echo "<TD>".$entr."</TD>";
      $restante=$imp-$entr;
      echo "<TD>".$restante."</TD>";
      $fechasis= strftime("%d/%b/%Y");
      echo "<TD>".$fechasis."</TD>";
      echo "</TR>";
      $div=$restante/$pag;
      for ($i=1;$i<=$pag;$i++){
          echo "<TR>";
          echo "<TD>".$i."</TD>";
          
          
          echo "<TD>".$div."</TD>";
          $restante=$restante-$div;
            echo "<TD>".$restante."</TD>";
            
            $fecha_inicio= strtotime("$ven");
          $fech= strftime("%d/%b/%Y", strtotime("$i months",$fecha_inicio));
           echo "<TD>".$fech."</TD>";
      }
      
      
      echo "</TABLE>"
      
      
        ?>
    </body>
</html>
