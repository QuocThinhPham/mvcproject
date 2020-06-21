<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new category</title>
</head>

<style>
form {
    width: 300px;
    height: 200px;
    border: 1px solid #000;
    display: flex;
    align-items: center;
    justify-content: center;
}

legend {
    text-align: center;
    padding: 10px 0;
}

.row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding: 10px;
}

.col {
    text-align: center;
}
</style>

<body>
    <?php

    $URL = $_SERVER['REQUEST_URI'];
    $arr = explode('/', substr($URL, 1, strlen($URL)));
    unset($arr[count($arr) - 1]);
    $actionPath = implode('/', $arr);

    ?>
    <form action="./index.php" method="GET">
        <div>
            <legend>Add New Category</legend>
            <div class="row">
                <div class="col">
                    <label for="id">ID</label>
                </div>
                <div class="col">
                    <input type="text" name="id" id="id" placeholder="Enter Id">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="name">Name</label>
                </div>
                <div class="col">
                    <input type="text" name="name" id="name" placeholder="Enter Name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit">Add</button>
                </div>
                <div class="col">
                    <a href="<?= $_SERVER['HTTP_REFERER'] ?>">Cancel</a>
                </div>
            </div>
        </div>
    </form>

</body>

</html>