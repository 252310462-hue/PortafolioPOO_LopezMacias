#  Examen práctico contra reloj 

##  Objetivo del Proyecto
El objetivo de este proyecto es implementar los conceptos fundamentales de la Programación Orientada a Objetos (POO) en PHP para modelar un sistema de gestión logística. El software simula el control de paquetes de envío y el monitoreo de variables físicas mediante sensores, asegurando la integridad y consistencia de los datos en memoria.

##  Problema que Resuelve
En las empresas de logística y transporte de mercancías, existe una necesidad crítica de rastrear de manera precisa las propiedades de los paquetes (código de seguimiento, peso, fragilidad) y controlar los costos internos de forma segura. Además, para la mercancía delicada, se requiere integrar la lectura de sensores (como los de temperatura o movimiento). 

Este script resuelve la inicialización, asignación de propiedades de transporte y previene la manipulación no autorizada de datos sensibles (como el costo interno de la empresa) mediante restricciones de visibilidad.

##  Tecnologías Utilizadas
* **Lenguaje de Programación:** PHP (Tipado estricto `declare(strict_types=1);`)
* **Entorno de Desarrollo / Servidor Local:** XAMPP (Apache)
* **Control de Versiones:** GitHub

##  Conceptos Aplicados (Según Temario)
* **Clases y Objetos:** Creación de las plantillas de datos `Paquete` y `Sensor`, e instanciación de objetos reales como `$paqueteA`, `$paqueteB` y `$sensor`.
* **Encapsulamiento y Visibilidad:** Uso de modificadores de acceso. Las propiedades generales se definieron como `public`, mientras que la propiedad crítica `costoInterno` se protegió como `private`.
* **Tipado Estricto (Strict Types):** Implementación de `declare(strict_types=1);` para forzar a que el intérprete de PHP valide rigurosamente que los datos asignados coincidan exactamente con el tipo declarado (`string`, `float`, `bool`, `int`, `DateTime`).

### Interfaz / Salida en Ejecución
* **Intento de asignación a propiedad privada:** *(Inserta aquí la captura del error fatal de PHP que ocurre al intentar hacer `$paqueteA->costoInterno = 500.00;` desde el archivo `index.php`, demostrando que el encapsulamiento funciona correctamente)*.

##  Instrucciones de Ejecución
Para poner en marcha este proyecto localmente, sigue estos pasos:

1.  **Copiar la carpeta:** Descarga o clona este repositorio y coloca la carpeta del proyecto dentro del directorio de publicación de tu servidor local (por ejemplo, en `C:/xampp/htdocs/logistica/`).
2.  **Iniciar el servidor:** Abre el *Control Panel de XAMPP* e inicia el módulo de **Apache**.
3.  **Ejecutar en el navegador:** Abre tu navegador web de preferencia e ingresa a la siguiente dirección URL:
    ```text
    http://localhost/logistica/index.php
    ```
4.  **Nota de depuración:** Si deseas observar el comportamiento de los objetos creados en el código, puedes agregar líneas de depuración como `var_dump($paqueteA);` o `var_dump($sensor);` al final del archivo `index.php`.

##  Reflexión Personal

### ¿Qué aprendí?
Aprendí cómo declarar clases en PHP moderno utilizando el tipado estricto, lo cual previene errores en tiempo de ejecución al asegurar que las variables siempre tengan el tipo de dato correcto. También comprendí de manera práctica cómo los modificadores de acceso (`public` y `private`) protegen la información de un objeto.

### ¿Qué fue difícil?
Al principio, fue un reto entender por qué el script fallaba al intentar asignar un valor a `$costoInterno`. Sin embargo, esto me ayudó a comprender el verdadero propósito del encapsulamiento: el código externo a la clase no debe modificar directamente atributos privados.

### ¿Qué mejoraría?
Para mejorar el diseño de este software, implementaría métodos públicos **Getters** y **Setters** en la clase `Paquete`. De esta forma, se podría acceder o modificar el `$costoInterno` de manera controlada y segura mediante reglas de validación previas.
