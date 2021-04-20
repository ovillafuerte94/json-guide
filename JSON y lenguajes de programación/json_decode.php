<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>JSON en PHP</h1>

    <div id="contenedor"></div>

    <?php

    $json = '{
            "nombre": "Omar Villafuerte",
            "edad": 26,
            "estudiante": true,
            "clases": [
                "Frontend Developer",
                "Backend Developer"
            ],
            "horario": {
                "lunes": "8am - 4pm",
                "martes": "9am - 12pm",
                "viernes": [
                    "8am - 10am",
                    "2pm - 4pm"
                ]
            },
            "vacaciones": null
        }';

    print_r(json_decode($json, true));

    ?>
</body>

</html>