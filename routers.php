<?php
// Incluir arquivos de controlador necessários para çidar com diferentes funções
 
require 'controllers/AuthController.php';
require 'controllers/UserController.php';
require 'controllers/DashBoardController';
 
$authController = new $AuthController();
$userController = new $UserController();
$dashboardController = new $DashboardController();
 
 
?>