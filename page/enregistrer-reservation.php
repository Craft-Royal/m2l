<?php require_once __DIR__ . '/../template/header.php'; ?>

    <h2>Liste des réservations</h2>

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
                <td><?= $reservation->dateReservation ?></td>
                <td><?= $reservation->getCreneau() ?></td>
                <td><?= $reservation->salle->getNom() ?></td>
                <td><?= $reservation->ligue->getNom() ?></td>
                <td><a href="supprimer-reservation.php?id=<?= $reservation->id ?>">Annuler</a></td>            </tr>
        <?php endforeach; ?>
    </table>

<?php require_once __DIR__ . '/../template/footer.php'; ?>