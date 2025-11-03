<?php
// Ejecuta todo como si estuvieras dentro de /api para que funcionen los includes relativos
chdir(__DIR__ . '/api');
require 'index.php';
