<?php
// Comprobar si el nombre fue enviado a través de POST
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    // Crear un array de chistes para cada nombre
    $chistes = [
        "Ana" => "¿Por qué Juan llevó una escalera a la escuela? Porque quería llegar a las alturas.",
        "Carlos" => "¿Por qué María no podía usar el lápiz? Porque ya estaba en punta.",
        "Samantha" => "¿Qué le dice una impresora a otra? 'Ese papel es tuyo o es una impresión mía, Pedro.'",
        "Yolibet" => "¿sabes cuál es el animal más antiguo? ¡La cebra, porque está en blanco y negro!",
        "Eduardo" => "¿por qué los pájaros no usan Facebook? ¡Porque ya tienen Twitter!"
    ];

    // Obtener el chiste correspondiente al nombre enviado
    if (array_key_exists($nombre, $chistes)) {
        $chiste = $chistes[$nombre];
    } else {
        $chiste = "No se encontró un chiste para ese nombre.";
    }

    // Devolver el chiste como respuesta JSON
    echo json_encode(["chiste" => $chiste]);
} else {
    // Si no se envía ningún nombre, devolver un error
    echo json_encode(["error" => "No se envió ningún nombre."]);
}
?>
