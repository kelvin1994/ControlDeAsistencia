<?php

    if (!empty($_GET["id"])) {
        $id=$_GET["id"];
        echo $id;

        $sql=$conexion->query("delete from cargo where id_cargo=$id");

        if ($sql == true) { ?>

         <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"CORRECTO",
                        type:"success",
                        text:"Usuario eliminado correctamente",
                        styling:"bootstrap3"
                    }
                )
            })

        </script>
       <?php  } else { ?>
           
        <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"ERROR",
                        type:"error",
                        text:"Error al eliminar usuario",
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
     

       <?php }

?>