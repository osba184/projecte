<?php
// model/desenvolupador_db.php
function obtenirTotsElsDevs($pdo) {
 $stmt = $pdo->query("SELECT * FROM desenvolupador ORDER BY nom ASC");  return $stmt->fetchAll();
}
function insertarDev($pdo, $nom, $pais) {
 $stmt = $pdo->prepare(
 "INSERT INTO desenvolupador (nom, pais) VALUES (:nom, :pais)"  );
 $stmt->execute([':nom' => $nom, ':pais' => $pais]);
}
function esborrarDev($pdo, $id) {
 $stmt = $pdo->prepare("DELETE FROM desenvolupador WHERE id = :id");  $stmt->execute([':id' => $id]);
}


?>
