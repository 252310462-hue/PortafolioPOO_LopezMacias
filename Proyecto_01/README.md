#  Examen práctico contra reloj 

##  Objetivo del Proyecto
El objetivo de este proyecto es implementar los conceptos fundamentales de la Programación Orientada a Objetos (POO) en PHP para modelar un sistema de gestión logística. El software simula el control de paquetes de envío y el monitoreo de variables físicas mediante sensores, asegurando la integridad y consistencia de los datos mediante el tipado estricto y el encapsulamiento de propiedades.

##  Problema que Resuelve
En las empresas de logística y transporte de mercancías, existe una necesidad crítica de rastrear de manera precisa las propiedades de los paquetes (código de seguimiento, peso, fragilidad) y controlar los costos internos de forma segura. Además, para la mercancía delicada, se requiere integrar la lectura de sensores (como los de temperatura o movimiento). 

Este script resuelve la inicialización, asignación de propiedades de transporte y previene la manipulación no autorizada de datos sensibles (como el costo interno de la empresa) mediante restricciones de visibilidad. Finalmente, muestra la información formateada en pantalla para confirmar que el sistema opera de manera óptima.

##  Tecnologías Utilizadas
**Lenguaje de Programación:** PHP (Tipado estricto `declare(strict_types=1);`) 
**Entorno de Desarrollo / Servidor Local:** XAMPP (Apache)
**Control de Versiones:** GitHub 

##  Conceptos Aplicados (Según Temario)
**Clases y Objetos:** Definición de las entidades `Paquete` y `Sensor`, y la posterior instanciación de objetos en memoria (`$paqueteA`, `$paqueteB` y `$sensor`).
* **Encapsulamiento y Visibilidad:** Uso de modificadores de acceso. Las propiedades generales se definieron como `public`, mientras que la propiedad crítica `$costoInterno` se protegió como `private` para impedir su manipulación externa no autorizada.
* **Tipado Estricto (Strict Types):** Uso de `declare(strict_types=1);` para forzar al intérprete de PHP a validar rigurosamente que los datos asignados coincidan exactamente con el tipo declarado (`string`, `float`, `bool`, `int`, `DateTime`).
* **Uso de Objetos Nativos:** Integración de la clase predefinida de PHP `DateTime` para manipular marcas de tiempo de forma profesional, formateando su salida mediante el método `->format()`.

##  Instrucciones de Ejecución
Para poner en marcha este proyecto localmente, sigue estos pasos:

1.  **Copiar la carpeta:** Coloca la carpeta de este proyecto dentro del directorio de publicación de tu servidor local (por ejemplo, en `C:/xampp/htdocs/logistica/`).
2.  **Iniciar el servidor:** Abre el *Control Panel de XAMPP* e inicia el módulo de **Apache**.
3.  **Ejecutar en el navegador:** Abre tu navegador web de preferencia e ingresa a la siguiente dirección URL:
    ```text
    http://localhost/logistica/index.php
    ```

##  Reflexión Personal 

### ¿Qué aprendí?
[cite_start]Aprendí cómo declarar clases en PHP utilizando el tipado estricto, lo cual previene errores en tiempo de ejecución al asegurar que las variables siempre tengan el tipo de dato correcto[cite: 92]. [cite_start]También comprendí de manera práctica cómo estructurar la salida de datos de un objeto y cómo formatear propiedades complejas como las fechas nativas de un sistema[cite: 92].

### ¿Qué fue difícil?
[cite_start]Lo más difícil fue asimilar las reglas de visibilidad del encapsulamiento y comprender que las propiedades privadas no pueden ser modificadas directamente desde fuera de la clase (como en el script principal), obligándonos a comentar esa sección de código para evitar que el intérprete de PHP detenga la ejecución[cite: 93].

### ¿Qué mejoraría?
[cite_start]Para mejorar el diseño de este software, implementaría métodos públicos **Getters** y **Setters** en la clase `Paquete`[cite: 94]. [cite_start]De esta forma, se podría acceder o modificar el `$costoInterno` de manera controlada y segura mediante reglas de validación previas, en lugar de dejar la propiedad completamente inaccesible[cite: 94].


