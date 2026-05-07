
<?php
function obtenirTotsElsJocs($pdo) {
 $stmt = $pdo->query(
 "SELECT v.*, d.nom AS nom_dev
 FROM videojoc v
 LEFT JOIN desenvolupador d ON v.desenvolupador_id = d.id  ORDER BY v.id ASC"
 );
 return $stmt->fetchAll();
}

function obtenirJocPerId($pdo, $id) {
 $stmt = $pdo->prepare("SELECT * FROM videojoc WHERE id = :id");  $stmt->execute([':id' => $id]);
 return $stmt->fetch();
}

function insertarJoc($pdo, $titol, $genere, $preu, $data, $dev_id) {  $stmt = $pdo->prepare(
 "INSERT INTO videojoc (titol, genere, preu, data_llancament,  desenvolupador_id)
 VALUES (:titol, :genere, :preu, :data, :dev_id)"
 );
 $stmt->execute([
 ':titol' => $titol,
 ':genere' => $genere,
 ':preu' => $preu,
 ':data' => $data,
 ':dev_id' => $dev_id ?: null,
 ]);
}


?>
