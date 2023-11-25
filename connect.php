<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=pxx", "root", "Princewolf");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Problème de connexion à la base de données : " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $stmt = $bdd->prepare("INSERT INTO artistes (Nom, Prenom, DateNaissance, Pseudonyme, Adresse, Evenements2023, ReseauxSociaux) VALUES (?, ?, ?, ?, ?, ?, ?)");

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $datenaiss = $_POST['dateNaissance'];
        $pseu = $_POST['pseudonyme'];
        $adresse = $_POST['adresse'];
        $even = $_POST['evenements'];
        $reseau = $_POST['reseauxSociaux'];

        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $datenaiss);
        $stmt->bindParam(4, $pseu);
        $stmt->bindParam(5, $adresse);
        $stmt->bindParam(6, $even);
        $stmt->bindParam(7, $reseau);
        $stmt->execute();

        echo "Nouvel artiste enregistré avec succès";
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion dans la base de données : " . $e->getMessage();
    } finally {
        $stmt = null;
    }
}
?>
