<?php
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["txtnombre"])and !empty($_POST["txtapellido"])and !empty($_POST["txtdni"]) and !empty($_POST["txtcargo"])) {
           
           $nombre= $_POST["txtnombre"];
           $apellido= $_POST["txtapellido"];
           $dni= $_POST["txtdni"];
           $cargo= $_POST["txtcargo"];

  

           $sql=$conexion->query("insert into empleado(nombre,apellido,dni,cargo)values('$nombre','$apellido','$dni',$cargo) ");
           if ($sql==true) { ?>
            
            <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"CORRECTO",
                        type:"success",
                        text:"Empleados registrados correctamente",
                        styling:"bootstrap3"
                    }
                )
            })
        </script> 

           <?php } else { ?>
            
            <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"ERROR",
                        type:"error",
                        text:"Error al registrar empleado",
                        styling:"bootstrap3"
                    }
                )
            })
        </script> 


         <?php  }
           


        } else { ?>

        <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"ERROR",
                        type:"error",
                        text:"Los campos estan vacios.",
                        styling:"bootstrap3"
                    }
                )
            })
        </script> 

        <?php
        } ?>
        
        <script>
            setTimeout(() =>{
                window.history.replaceState(null, null, window.location.pathname);
            }, 0);
        </script>
      
   <?php }
?>