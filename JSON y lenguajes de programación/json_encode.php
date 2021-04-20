<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>JSON en PHP</h1>

    <div id="contenedor"></div>

    <?php

    $data = array(
        "nombre" => "Omar Villafuerte",
        "edad" => 26,
        "estudiante" => true,
        "clases" => array(
            "Frontend Developer",
            "Backend Developer"
        ),
        "horario" => array(
            "lunes" => "8am - 4pm",
            "martes" => "9am - 12pm",
            "viernes" => array("8am - 10am", "2pm - 4pm")
        ),
        "vacaciones" => null
    );

    echo json_encode($data);

    ?>
</body>

</html>