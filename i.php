<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de l'Artiste</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color:palevioletred;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form method="post" action="connect.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="dateNaissance">Date de naissance :</label>
        <input type="date" id="dateNaissance" name="dateNaissance" required>

        <label for="pseudonyme">Pseudonyme :</label>
        <input type="text" id="pseudonyme" name="pseudonyme" required>

        <label for="adresse">Adresse :</label>
        <textarea id="adresse" name="adresse" rows="4" required></textarea>

        <label for="evenements">À quels événements avez-vous participé en 2023? [Écrivez un message]</label>
        <textarea id="evenements" name="evenements" rows="4"></textarea>

        <label for="reseauxSociaux">Vos réseaux sociaux : [Insérez un lien]</label>
        <input type="url" id="reseauxSociaux" name="reseauxSociaux" placeholder="https://www.example.com">

        <button type="submit">Envoyer</button>
    </form>

</body>
</html>
