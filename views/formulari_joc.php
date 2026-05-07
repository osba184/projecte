
<?php
require_once '../config/db.php';
require_once '../model/videojoc_db.php';
require_once '../model/desenvolupador_db.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$joc = $id ? obtenirJocPerId($pdo, $id) : null;
$devs = obtenirTotsElsDevs($pdo);
include 'header.php';
?>
<h2><?= $joc ? 'Editar: '.htmlspecialchars($joc['titol']) : 'Afegir un nou  videojoc' ?></h2>
<form method="POST" action="../actions/desar_joc.php">
 <?php if ($joc): ?>
 <input type="hidden" name="id" value="<?= $joc['id'] ?>">
 <?php endif; ?>
 <!-- campos del formulario... -->
 <select name="desenvolupador_id">
 <option value="">-- Selecciona un desenvolupador --</option>  <?php foreach ($devs as $dev): ?>
 <option value="<?= $dev['id'] ?>"
 <?= (isset($joc['desenvolupador_id']) &&
 $joc['desenvolupador_id'] == $dev['id']) ? 'selected' : '' ?>>  <?= htmlspecialchars($dev['nom']) ?>
 </option>
 <?php endforeach; ?>
 </select>
 <button type="submit"><?= $joc ? 'Guardar Canvis' : 'Crear Videojoc'  ?></button>
</form>
