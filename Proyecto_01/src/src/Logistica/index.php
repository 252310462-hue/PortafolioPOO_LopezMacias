<?php

// 1. Importar los archivos de las clases
require_once 'Paquete.php';
require_once 'Sensor.php';

// 2. Instanciar dos objetos de la clase Paquete
$paqueteA = new Paquete();
$paqueteB = new Paquete();

// 3. Asignar valores a las propiedades públicas de $paqueteA
$paqueteA->codigoSeguimiento = "ABC123";
$paqueteA->pesoKilogramos = 2.5;
$paqueteA->esFragil = true;

// 4. Intentar asignar un valor a la propiedad privada (COMENTADO)

// 5. Instanciar un objeto Sensor con la instancia predefinida DateTime
$sensor = new Sensor();
$sensor->id = 1;
$sensor->marca = "Bosch";
$sensor->ultimaLectura = new DateTime();
$sensor->rangoMaximo = 100.5;

// Mensaje para confirmar en pantalla que el archivo corre perfectamente
echo "DATOS DEL PAQUETE A:\n";
echo "Codigo de Seguimiento: " . $paqueteA->codigoSeguimiento . "\n";
echo "Peso en Kilogramos: " . $paqueteA->pesoKilogramos . "\n";
echo "Es Fragil: " . ($paqueteA->esFragil ? 'Si' : 'No') . "\n";

echo "\n-------------------------------------\n\n";

echo "DATOS DEL SENSOR:\n";
echo "ID del Sensor: " . $sensor->id . "\n";
echo "Marca: " . $sensor->marca . "\n";
echo "Rango Maximo: " . $sensor->rangoMaximo . "\n";
// El método format() se usa para que el objeto DateTime se pueda mostrar como texto legible
echo "Ultima Lectura: " . $sensor->ultimaLectura->format('Y-m-d H:i:s') . "\n";
