<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>
    <!-- main -->
    <main>
        <div class="container my-5">
            <div class="row row-cols-5 justify-content-center g-3">
                <?php include __DIR__ . '/partials/albums.php' ?>
            </div>
        </div>
    </main>
</body>

</html>