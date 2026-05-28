<?php

require_once 'Paquete.php';
require_once 'sensor.php';

$paqueteA = new Paquete();
$paqueteB = new Paquete();

// Asignar valores públicos
$paqueteA->codigoSeguimiento = "ABC123";
$paqueteA->pesoKilogramos = 2.5;
$paqueteA->esFragil = true;

// Intentar asignar valor a propiedad privada
$paqueteA->costoInterno = 500.00; 

// Instanciar Sensor
$sensor = new Sensor();
$sensor->id = 1;
$sensor->marca = "Bosch";
$sensor->ultimaLectura = new DateTime();
$sensor->rangoMaximo = 100.5;
