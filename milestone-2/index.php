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
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <main id="root">
        <div class="container mx-auto my-5">
            <div class="row row-cols-5 justify-content-center g-3">
                <div class="col" v-for="element in albums">
                    <div class="album-card h-100 p-3">
                        <img class="w-100 pb-3" :src="element.poster" :alt="element.title">
                        <div class="title text-light text-center text-uppercase fw-bold py-2">{{element.title}}</div>
                        <div class="subtitle text-center">{{element.author}}</div>
                        <div class="date text-center">{{element.year}}</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
</body>

</html>