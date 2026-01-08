<?php
session_start();
require_once '../core/Router.php';

$url = $_GET['url'] ?? '';
Router::route($url);
