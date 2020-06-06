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
       $f= getdate();
       
       echo "<TABLE border =1>";
       while ($ele= each($f)){
           echo "<TR>";
           echo "<TD>".$ele[0]."</TD>";
           echo "<TD>".$ele[1]."</TD>";
           echo "</TR>";
           
           
       }
       
       

       
       
       echo "</TABLE>";
        ?>
    </body>
</html>
