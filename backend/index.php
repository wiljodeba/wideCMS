<?php

include_once "models/enlaces.php";
include_once "models/ingreso.php";
include_once "models/gestorSlide.php";
include_once "models/gestorArticulos.php";
include_once "models/gestorGaleria.php";
include_once "models/gestorVideos.php";

include_once "controllers/template.php";
include_once "controllers/enlaces.php";
include_once "controllers/ingreso.php";
include_once "controllers/gestorSlide.php";
include_once "controllers/gestorArticulos.php";
include_once "controllers/gestorGaleria.php";
include_once "controllers/gestorVideos.php";

$template = new TemplateController();
$template -> template();
