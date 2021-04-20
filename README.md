## JSON (Notación de Objetos de JavaScript)

- Es un formato de texto que hace que sea más fácil la manera de compartir datos entre dispositivos de tipo clientes y servidores. Se basa en la forma de cómo funcionan los Objetos en JavaScript, aunque se originó en este lenguaje está disponible para casi todos los lenguajes de programación que existen. 

- Nos permite intercambiar datos entre lenguajes de programación que no tienen comunicación entre ellos.

## Estructura JSON

```json
{ 
  "nombre": "Omar Villafuerte",
  "age": 26,
  "city":"La Habana",
  "country": "Cuba",
  "developer": true
}
```

## JSON y lenguajes de programación

### Javascript
- Analizar y convertir JSON en Objeto Javascript
```javascript
var obj = JSON.parse('{ "name":"Omar", "age":27, "city":"La Habana"}');

console.log(obj.name)
```
- Convertir objeto de JavaScript en una cadena JSON
```javascript
var obj = { "name":"Omar", "age":26, "city":"La Habana"};
var myJSON = JSON.stringify(obj);

console.log(myJSON);
```

### PHP
- Analizar y convertir JSON en Objeto PHP
```php
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
```
- Convertir objeto de PHP en una cadena JSON
```php
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
```

### Python
- Analizar y convertir JSON en Objeto Python
```python
import json

data =  '{ "name":"John", "age":30, "city":"New York"}'

print(json.loads(data))
```

- Convertir objeto de Python en una cadena JSON
```python
import json

data = {
  "name": "John",
  "age": 30,
  "city": "New York"
}

print(json.dumps(data))
```

## Herramientas y referencias
- [Documentación](https://www.json.org/json-es.html)
- [Editor online](https://jsoneditoronline.org/)
- [Validador](https://jsonlint.com/)
- [Analizador](http://json.parser.online.fr/)
