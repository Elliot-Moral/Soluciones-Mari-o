<?php
// session_start();

// $usuarios = isset($_SESSION['usuarios']) ? $_SESSION['usuarios'] : [];
$data = [
    ["id" => 1, "title" => "Artículo 1", "content" => "Contenido del artículo 1."],
    ["id" => 2, "title" => "Artículo 2", "content" => "Contenido del artículo 2."],
    ["id" => 3, "title" => "Numero de visitas", "content" => $_SESSION['controlador_vistas']],
];

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo json_encode($data);
        break;
    case 'POST':
        
        // Recibir datos del formulario
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
        $interes = isset($_POST['interes']) ? $_POST['interes'] : '';
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

        // Validar que los datos no estén vacíos (opcional)
        if (empty($nombre) || empty($correo) || empty($numero) || empty($interes) || empty($mensaje)) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios.']);
            exit;
        }

        // $dataRecibe = $_POST;
        // Configurar la respuesta como JSON
        // header('Content-Type: application/json');
        // echo json_encode($dataRecibe);

        ## enviar al correo
        $destinatarios = "contacto@grmarino.com, rmarinodaza@gmail.com";
        $asunto = "Nuevo mensaje desde la página web Grmariño";
        $cuerpo = "
            Nombre: $nombre\n
            Correo: $correo\n
            Número: $numero\n
            Interés: $interes\n
            Mensaje:\n $mensaje
        ";
        
        $headers = "From: $correo\r\n";
        $headers .= "Reply-To: $correo\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        header('Content-Type: application/json');
        
        // Enviar el correo
        if(mail($destinatarios, $asunto, $cuerpo, $headers)) {
            echo json_encode("Datos Enviados Correctamente");
        } else {
            echo json_encode("Error al enviar el correo.") ;
        }



        break;
    case 'DELETE':
        $id = json_decode(file_get_contents('php://input'), true)['id'];
        if (isset($usuarios[$id])) {
            unset($usuarios[$id]);
            $_SESSION['usuarios'] = $usuarios;
            echo json_encode(['mensaje' => 'Usuario eliminado']);
        } else {
            echo json_encode(['mensaje' => 'Usuario no encontrado']);
        }
        break;
    default:
        echo json_encode(['mensaje' => 'Método no permitido']);
        break;
}
?>
