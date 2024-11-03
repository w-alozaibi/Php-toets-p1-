
<?php

try {

    $db = new PDO('mysql:host=localhost;dbname=les5_school;charset=utf8mb4', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

$query = $db->prepare("SELECT * FROM leerlingen WHERE Klassen_id = :id");
$query->execute(['id' => $_GET['id']]);


$leerlingen = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>voornaam</th>
        <th>tussenvosgsel</th>
        <th>achternaam</th>
    </tr>
    <?php foreach ($leerlingen as $leerling) { ?>
        <tr>
            <td><?php echo htmlspecialchars($leerling['voornaam']); ?></td>
            <td><?php echo htmlspecialchars($leerling['tussenvoegsel']); ?></td>
            <td><?php echo htmlspecialchars($leerling['achternaam']); ?></td>
        </tr>
    <?php } ?>
</table>
<br>
<a href="klassen.php">Terug naar Klassen pagina</a>
