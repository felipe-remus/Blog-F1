<?php
$data_inicio = $_GET['data_inicio'] ?? '';
$data_fim = $_GET['data_fim'] ?? '';
require "model_categoria.php";
require "views/filtros-view.php";
?>