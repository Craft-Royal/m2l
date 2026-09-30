<?php
$reservations = $reservations ?? [];

require_once __DIR__ . '/template/header.php';
?>

    <h2>Liste des réservations</h2>

<?php if (empty($reservations)): ?>
    <p>Aucune réservation enregistrée pour le moment.</p>
<?php else: ?>
    <table border="1" cellpadding="6">
        <tr>
            <th>Date</th>
            <th>Créneau</th>
            <th>Salle</th>
            <th>Ligue</th>
            <th>Action</th>
        </tr>
        <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= htmlspecialchars($reservation->dateReservation) ?></td>
                <td><?= htmlspecialchars($reservation->getCreneau()) ?></td>
                <td><?= htmlspecialchars($reservation->salle->getNom()) ?></td>
                <td><?= htmlspecialchars($reservation->ligue->getNom()) ?></td>
                <td><a href="index.php?route=supprimer-reservation&id=<?= $reservation->id ?>">Annuler</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php require_once __DIR__ . '/template/footer.php'; ?>