<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
</head>
<body>
    <table border=1>
        <tr><th>Artikel</th><th>Beschreibung</th><th>Preis</th><th>Einstelldatum</th><th>Email</th><th>Telefonnummer</th><th><a href="index.php?aktion=alleArtikelAb">Zustand</a></th></tr>
        <?php foreach ($artikel as $a) { ?>
            <tr>
                <td><?php echo $a->getBezeichnung()?></td>
                <td><?php echo $a->getBeschreibung()?></td>
                <td><?php echo $a->getPreis()?> €</td>
                <td><?php echo $a->getEinstelldatum()?></td>
                <!-- <td><?php echo Person::finde($a->getPerson_id())->getName()?></td> -->
                <td><?php echo Person::finde($a->getPerson_id())->getEmail()?></td>
                <td><?php echo Person::finde($a->getPerson_id())->getTelefonnummer()?></td>
                <td><?php echo Zustand::finde($a->getZustand_id())->getZustand()?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>