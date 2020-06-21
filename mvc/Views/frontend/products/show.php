<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Show</title>
</head>
<style>
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
    }

    html {font-size: 62.5%;}

    .details {
        width: 40rem;
        height: 30rem;
        transform: translate(-50%, -50%);
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 1.6rem;
        border: 0.1rem solid #000;
    }

    .details__title {
        width: 100%;
        height: 3rem;
        line-height: 3rem;
        padding: 1.5rem 0;
        font-size: 2.4rem;
        text-align: center;
        background-color: lavender;
    }

    .details__content {
        padding: 1.5rem;
        width: auto;
        margin: auto;
    }

    h4.alert {
        font-size: 3rem;
        text-align: center;
        height: 100vh;
        line-height: 100vh;
    }
</style>

<body>
    <?php
        if (mysqli_num_rows($product) > 0)
            while ($row = mysqli_fetch_array($product)) {
    ?>
            <div class="details">
                <div class="details__title">Details Product</div>
                <div class="details__content">
                    <label class="details__label">ID: <?= $row[0] ?></label>
                    <p class="details__name">Name: <?= $row[1] ?></p>
                    <span class="details__span">Amount: <?= $row[2] ?></span>
                </div>
            </div>
    <?php
        } else {
            echo '<h4 class="alert">There are no product.</h4>';
        }
    ?>
    
</body>

</html>