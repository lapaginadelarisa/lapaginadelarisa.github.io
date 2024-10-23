<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {
    // Lista de personas con nombres
    $lista = [
        [
            "nombre" => "Ana"
        ],
        [
            "nombre" => "Carlos"
        ],
        [
            "nombre" => "Samantha"
        ],
        [
            "nombre" => "Yolibet"
        ],
        [
            "nombre" => "Eduardo"
        ]
    ];

    // Array de chistes correspondientes a cada persona
    $chistes = [
        "Ana" => "¿Por qué Juan llevó una escalera a la escuela? Porque quería llegar a las alturas.",
        "Carlos" => "¿Por qué María no podía usar el lápiz? Porque ya estaba en punta.",
        "Samantha" => "¿Qué le dice una impresora a otra? 'Ese papel es tuyo o es una impresión mía'",
        "Yolibet" => "¿Sabes cuál es el animal más antiguo? ¡La cebra, porque está en blanco y negro!",
        "Eduardo" => "¿por qué los pájaros no usan Facebook? ¡Porque ya tienen Twitter!"
    ];

    // Genera el código HTML de la lista con estilo Material Design.
    $render = "";
    foreach ($lista as $modelo) {
        // Codifica el nombre para evitar inyección de código
        $nombre = htmlentities($modelo["nombre"]);
        
        // Busca el chiste correspondiente al nombre
        $chiste = isset($chistes[$nombre]) ? htmlentities($chistes[$nombre]) : "Chiste no disponible.";
        
        // Crea los elementos HTML con clases MD
        $render .=
        "<li class='md-two-line'>
            <span class='headline'>{$nombre}</span>
            <span class='supporting'>{$chiste}</span>
         </li>";
    }

    // Devuelve el HTML generado en formato JSON
    devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {
    // Manejo de errores
    devuelveErrorInterno($error);
}
