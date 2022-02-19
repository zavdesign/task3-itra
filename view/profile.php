<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 text-end">
        <a href='vendor/logout.php'>Выход</a>
    </div>
</header>

<!-- Profile -->
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    BLOCK ALL
                </label>
            </div>
        </th>
        <th scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    UNBLOCK ALL
                </label>
            </div>
        </th>
        <th scope="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    DELETE ALL
                </label>
            </div>
        </th>
        <th scope="col">ID</th>
        <th scope="col">USER</th>
        <th scope="col">DATE REGISTRATION</th>
        <th scope="col">LAST DATE LOGIN</th>
        <th scope="col">STATUS</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
        </th>
        <th scope="row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
        </th>
        <th scope="row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
        </th>
        <td><?php echo 'ID' ?></td>
        <td><?php echo 'USER' ?></td>
        <td><?php echo 'DATE' ?></td>
        <td><?php echo 'DATE LOGIN' ?></td>
        <td><?php echo 'STATUS' ?></td>
    </tr>

    </tbody>
</table>

</body>
</html>