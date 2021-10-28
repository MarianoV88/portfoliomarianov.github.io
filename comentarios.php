<?php
		if($_POST) {
			$identidad_usuario = $_POST['identidad'];
			$correo_usuario = $_POST['correo'];
            $comentario_usuario = $_POST['comentario'];

            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $fecha_actual = date("d/m/Y G:i");

            $carpeta = 'comentarios/';

            $archivo = fopen('comentarios/comentarios.txt', 'a+');
            $crear = "<h4>".$identidad_usuario."  (".$correo_usuario.")"." - ".$fecha_actual."hs</h4><p>".$comentario_usuario."</p><br><br><br>";
           
            fputs($archivo, $crear);
            fclose($archivo);

            $archivo1 = fopen('comentarios/comentarios.txt', 'r');
            echo fpassthru($archivo1);
            fclose($archivo1);
            
        
        }




		
		// 	

        //     $extension = explode(".", $nombre_archivo);
        //     $extension_nueva = end($extension);

        //     $nombre_archivo_nuevo = $identidad_usuario;
            
        //     move_uploaded_file($temporal_archivo, $carpeta.$nombre_archivo_nuevo);
        //     $datos_usuario = "<p>".$identidad_usuario." ".$correo_usuario."</p>";
            
        //     header ("Location: unidad3.php?ok");
			
		// }
		?>