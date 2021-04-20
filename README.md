## JSON (Notación de Objetos de JavaScript)

- Es un formato de texto que hace que sea más fácil la manera de compartir datos entre dispositivos de tipo clientes y servidores. Se basa en la forma de cómo funcionan los Objetos en JavaScript, aunque se originó en este lenguaje está disponible para casi todos los lenguajes de programación que existen. 

- Nos permite intercambiar datos entre lenguajes de programación que no tienen comunicación entre ellos.

## Objetos JavaScript y objetos JSON

### Estructura JSON

```json
{ 
  "nombre": "Omar Villafuerrte"
}
```

### Estructura Objeto Javascript

```javascript
var variable = { 
  nombre: "Omar Villafuerte",
  getName: function() {
    console.log(this.nombre);
  }
};
```

### Analizar y convertir JSON en Objeto JavaScript
```javascript
JSON.parse();
```

Ejemplo:
```javascript
var obj = JSON.parse('{ "name":"Omar", "age":27, "city":"La Habana"}');

console.log(obj.name)
```

### Convertir objeto de JavaScript en una cadena JSON
```javascript
JSON.stringify();
```

Ejemplo:
```javascript
var obj = { "name":"Omar", "age":26, "city":"La Habana"};
var myJSON = JSON.stringify(obj);

console.log(myJSON);
```

### Herramientas y referencias
- [Documentación](https://www.json.org/json-es.html)
- [Editor online](https://jsoneditoronline.org/)
- [Validador](https://jsonlint.com/)
- [Analizador](http://json.parser.online.fr/)
