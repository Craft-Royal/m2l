<?php

$ligues = $ligues ?? [];

$resultats = $resultats ?? [];

require_once __DIR__ . '/template/header.php'; ?>

    <h2>Recherche des réservations</h2>

    <form method="get" action="index.php">
        <input type="hidden" name="route" value="recherche">
        <select name="ligue_id">
            <?php foreach ($ligues as $ligue): ?>
                <option value="<?= $ligue->id ?>"><?= $ligue->getNom() ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Rechercher</button>
    </form>

<?php if (isset($_GET['ligue_id'])): ?>
    <h3>Résultats :</h3>
    <ul>
        <?php foreach ($resultats as $reservation): ?>
            <li><?= $reservation['date_reservation'] ?> : <?= $reservation['heure_debut'] ?> - <?= $reservation['heure_fin'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php require_once __DIR__ . '/template/footer.php'; ?>