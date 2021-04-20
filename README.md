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
    alert(nombre);
  }
};
```

### Analizar JSON en JavaScript
```javascript
JSON.parse();
```

### Convertir objeto de JavaScript en una cadena JSON
```javascript
JSON.stringify();
```
