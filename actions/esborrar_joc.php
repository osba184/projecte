<?php
require_once '../config/db.php';
require_once '../model/videojoc_db.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id > 0) {
 esborrarJoc($pdo, $id);
}
header('Location: ../views/llista.php');
exit;
