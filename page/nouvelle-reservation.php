<?php require_once __DIR__ . '/../template/header.php'; ?>

    <h2>Nouvelle réservation</h2>

    <form method="post" action="index.php?route=enregistrer-reservation">
        <label>Date :</label><input type="date" name="date"><br><br>
        <label>Heure de début :</label><input type="time" name="heure_debut"><br><br>
        <label>Heure de fin :</label><input type="time" name="heure_fin"><br><br>
        <label>Salle :</label>
        <select name="salle_id">
            <?php foreach ($salles as $salle): ?>
                <option value="<?= $salle->id ?>"><?= $salle->getNom() ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <label>Ligue :</label>
        <select name="ligue_id">
            <?php foreach ($ligues as $ligue): ?>
                <option value="<?= $ligue->id ?>"><?= $ligue->getNom() ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <button type="submit">Réserver</button>
    </form>

<?php require_once __DIR__ . '/../template/footer.php'; ?>