<?php
require_once 'models/airports_model.php';

$airport = new Airports();

$tabla = "bdapt_aeropuertos";
$condicion = "ciudad_pais like '%peru%'";

$matriz_airports = $airport->get_airports($tabla, $condicion);

require_once 'views/airports_view.php';