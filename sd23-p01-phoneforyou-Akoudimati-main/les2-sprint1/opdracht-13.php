

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miles to Kilometers Conversion</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Miles</th>
        <th>Kilometers</th>
    </tr>
    <?php
    for ($miles = 1; $miles <= 10; $miles++) {
        $kilometers = $miles * 1.609;
        echo "<tr>";
        echo "<td>$miles</td>";
        echo "<td>" . number_format($kilometers, 3) . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>