<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Search</title>
</head>

<style>
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
}

html {
    font-size: 62.5%;
}

table {
    margin: 1rem auto;
    width: 50rem;
    height: 10rem;
    font-size: 1.6rem;
    text-align: center;
}

.alert {
    font-size: 3rem;
    text-align: center;
}

h4.alert {
    font-size: 3rem;
    text-align: center;
}

h4.error {
    font-size: 3rem;
    text-align: center;
    height: 100vh;
    line-height: 100vh;
}
</style>

<body>
    <?php
    if (mysqli_num_rows($products) > 0) { ?>
    <h4 class="alert">There are <?php
                                    echo mysqli_num_rows($products) . (mysqli_num_rows($products) > 1 ? ' products' : ' product')
                                    ?> to be found</h4>
    <table border="1" align="center" cellpadding="15">
        <!-- Products List -->
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Amount</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($products)) {
                echo '<tr>';
                echo '<td>' . $row[0] . '</td>';
                echo '<td>' . $row[1] . '</td>';
                echo '<td>' . $row[2] . '</td>';
                echo '</tr>';
            }
            ?>
        <?php

    } else {
        echo '<h4 class="alert error">There are no product.</h4>';
    }

        ?>

</body>

</html>