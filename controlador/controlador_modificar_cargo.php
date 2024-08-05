<?php
    if (!empty($_POST["btnmodificar"])) 
    {
        if (!empty($_POST["txtnombre"])) 
        {
           $nombre=$_POST["txtnombre"];
           $id = $_POST["txtid"];
           $verificarNombre=$conexion->query("select count(*) as 'total' from cargo where nombre='$nombre' and id_cargo!=$id");
           if ($verificarNombre->fetch_object()->total > 0) { ?>
          <script>
                $(function notificacion(){
                new PNotify(
                    {
                        title:"INCORRECTO",
                        type:"error",
                        text:"el nombre <?= $nombre ?> ya existe",
                        styling:"bootstrap3"
                    }
                        )
                    })
          </script> 
        
        <?php } else { 
            $sql=$conexion->query(" update cargo set nombre='$nombre' where id_cargo= $id ");
            if ($sql==true) { ?>
                 <script>
                $(function notificacion(){
                new PNotify(
                    {
                        title:"CORRECTO",
                        type:"success",
                        text:"El cargo se modifico correctamente",
                        styling:"bootstrap3"
                    }
                        )
                    })
             </script> 
                <?php
            } else { ?>
               
               <script>
                $(function notificacion(){
                new PNotify(
                    {
                        title:"INCORRECTO",
                        type:"success",
                        text:"El cargo no se modifico correctamente",
                        styling:"bootstrap3"
                    }
                        )
                    })
             </script> 

                <?php
            }
            



           }
           

        } else{ ?>

            <script>
                $(function notificacion(){
                new PNotify(
                    {
                        title:"INCORRECTO",
                        type:"error",
                        text:"El campos de cargo estan vacios",
                        styling:"bootstrap3"
                    }
                        )
                    })
             </script> 

        <?php } ?>

        <script>
            setTimeout(() =>{
                window.history.replaceState(null, null, window.location.pathname);
            }, 0);
         </script>

        <?php
     }

?>