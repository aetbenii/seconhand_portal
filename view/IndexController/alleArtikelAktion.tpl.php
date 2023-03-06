<!DOCTYPE html>

<head>
    
</head>
<body>
    <table>
        <tr><th>Artikel</th><th>Beschreibung</th><th>Preiss</th><th>Einstell Datum</th><th>Email</th><th>Telefonnummer</th><th><a href="index.php?aktion=alleArtikelAuf">Zustand</a></th></tr>
        <?php foreach ($artikel as $a) { ?>
            <!-- erste spalte -->
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