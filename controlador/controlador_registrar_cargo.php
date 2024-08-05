<?php
    if (!empty($_POST["btnregistrar"])) 
    {
        if (!empty($_POST["txtnombre"])) 
        {
           $nombre=$_POST["txtnombre"];
           
           $verificarNombre=$conexion->query("select count(*) as 'total' from cargo where nombre='$nombre'");

           if ($verificarNombre->fetch_object()->total>0) {?>

            <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"ERROR",
                        type:"error",
                        text:"Este cargo ya existe",
                        styling:"bootstrap3"
                    }
                )
            })
        </script>

           <?php
           } else {
           $sql=$conexion->query("insert into cargo (nombre) values ('$nombre')");
           if ($sql==true) {?>

             <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"CORRECTO",
                        type:"success",
                        text:"El cargo se registro correctamente",
                        styling:"bootstrap3"
                    }
                )
            })
        </script>

            <?php
           } else {?>

            <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"ERROR",
                        type:"error",
                        text:"El cargo no se registrooooooooooooo",
                        styling:"bootstrap3"
                    }
                )
            })
        </script>

          <?php }
           
           }
           

        }else{?>
        <script>
            $(function notificacion(){
                new PNotify(
                    {
                        title:"ERROR",
                        type:"error",
                        text:"Los campos de cargo estan vacíos",
                        styling:"bootstrap3"
                    }
                )
            })
        </script>
            
    <?php    }?>

    <script>
            setTimeout(() =>{
                window.history.replaceState(null, null, window.location.pathname);
            }, 0);
    </script>

    <?php
    }
?>