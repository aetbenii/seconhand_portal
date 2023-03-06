<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seminartermine</title>
    </head>
    <body>
        
        <table border=1>
            <tr><th>Name</th></tr>
            <?php foreach ($personen as $person) { ?>
            <tr>
                <td><?php echo $person->getname()?></td>
               
                
            </tr>
            <?php } ?>
        </table>
            
    </body>
</html>
