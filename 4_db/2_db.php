<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style/table.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>

    <?php
    require_once "../scripts/connect.php";
    $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id` = `cities`.`id`;";
    $result = $conn->query($sql);

    echo <<< USERTABLE
    <table>
    <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Miasto</th>
    </tr>
USERTABLE;

    while($user = $result->fetch_assoc()){
        echo <<< USERSTABLE
        <tr>
            <td> $user[firstname] </td>
            <td> $user[lastname] </td>
            <td> $user[birthday] </td>
            <td> $user[city] </td>
        </tr>
USERSTABLE;
    }
    echo "</table>";
    ?>
</body>
</html>