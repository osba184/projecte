<?php
// actions/desar_joc.php
require_once '../config/db.php';
require_once '../model/videojoc_db.php';
$id = isset($_POST['id']) ? (int)$_POST['id'] : null;
$titol = htmlspecialchars(trim($_POST['titol'] ?? ''));
$genere = htmlspecialchars(trim($_POST['genere'] ?? ''));
$preu = (float)($_POST['preu'] ?? 0);
$data = $_POST['data_llancament'] ?? '';
$dev_id = !empty($_POST['desenvolupador_id'])
 ? (int)$_POST['desenvolupador_id'] : null;
if ($id) {
 actualitzarJoc($pdo, $id, $titol, $genere, $preu, $data, $dev_id); } else {
 insertarJoc($pdo, $titol, $genere, $preu, $data, $dev_id);
}
header('Location: ../views/llista.php');
exit;
