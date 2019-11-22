<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
            $link = mysqli_connect("localhost","root","");
            mysqli_select_db($link,"practicantes");
       
            $sql = mysqli_query($link,"SELECT * FROM alumnos WHERE matricula = '".$b."'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:red;'>No existe en la base de datos.</span>";
            }
      }     
?>