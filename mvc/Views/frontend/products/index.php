<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Index</title>
</head>

<body>
    <table border="1" align="center" cellpadding="15">
        <!-- Products List -->
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Category</th>
            <th>Options</th>
        </tr>
        <?php
        // show product list
        while ($row = mysqli_fetch_array($products)) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>
                        <a href=' . $_SERVER["REQUEST_URI"] . '?edit=' . $row[0] . '>Edit</a>
                        <a href=' . $_SERVER["REQUEST_URI"] . '?del=' . $row[0] . '>Delete</a>
                    </td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>