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
        $arc=$_POST['arch'];
        if(file_exists($arc)==1){
            
            
       
        echo "<TABLE border=1";
        echo "<TR>";
        echo "<TD>tamano</TD>";
        echo "<TD>escritura</TD>";
        echo "<TD>lectura</TD>";
        echo "<TD>ejecucion</TD>";
        echo "</TR>";
        
        echo "<TR>";
        echo "<TD>".filesize($arc)."</TD>";
      
       if (is_writable($arc)==1){
           echo"<TD>SI</TD>";
       }else
           echo"<TD>NO</TD>";
        if (is_readable($arc)==1){
           echo"<TD>SI</TD>";
       }else
           echo"<TD>NO</TD>";
       
         if (is_executable($arc)==1){
           echo"<TD>SI</TD>";
       }else
           echo"<TD>NO</TD>";
       
        echo "<TR>";
        echo "<TD>ultimo acceso realizado</TD>";
        echo "<TD>". date("d/m/y h:i:s", fileatime($arc))."</TD>";
            echo "</TR>";
            
             echo "<TR>";
        echo "<TD>ultima modificacion realixada</TD>";
        echo "<TD>". date("d/m/y h:i:s", filemtime($arc))."</TD>";
            echo "</TR>";
            
             echo "<TR>";
        echo "<TD>ultimo cambio realizado</TD>";
        echo "<TD>". date("d/m/y h:i:s", filectime($arc))."</TD>";
         echo "</TR>";
        echo "</TABLE>";
        
        }
        else {
        echo "no existe elk archivo";    
        }
        
        
      
        $dir= opendir('.');
        
        if($dh1=$dir){
            while(($fil= readdir($dh1))!==FALSE){
                if($fil==$arc){
                    echo "".$fil."<BR>";
                }else{
                      echo "".$fil."<BR>";
                }
            }
            
        }
        closedir($dh1);
        
        
        
        ?>
    </body>
</html>
