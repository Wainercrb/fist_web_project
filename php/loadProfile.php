<?php

   
         
            include "conexion.php";
            $found=false;
            $sql1= "select * from usuario where usuario=\"$_POST[txtUser]\" or email=\"$_POST[txtEmail]\"";
            $query = $con->query($sql1);
            while ($r=$query->fetch_array())
            {
            $found=true;
            break;
            }
                
                
            
        



?>