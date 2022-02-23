<?php

session_start();
error_reporting(E_ALL);
require_once 'controller/ContactsController.php';


$controller = new ContactsController();
$controller->handleRequest();
?>






