<?php
require 'vendor/autoload.php';
$auth = require 'config/auth_bootstrap.php';
echo "Sucesso: AuthManager instanciado corretamente!\n";
echo "Objeto: " . get_class($auth) . "\n";
