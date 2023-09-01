<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Voetballers</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>
    <table border="1">
        <thead>
            <th>Naam</th>
            <th>Club</th>
            <th>Leeftijd</th>
            <th>Nationaliteit</th>
            <th>Salaris</th>
        </thead>
        <tbody>
            <tr>
                <?= $data['rows']; ?>
            </tr>
        </tbody>
    </table>

</body>
</html>