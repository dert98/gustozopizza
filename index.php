<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustozo - Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://dert98.github.io/Porfolio/global.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<section id="app">
    <div class="container text-center m-auto">
        <div class="text-center">
            <div class="m-4">
                <label class="h1">{{list['name']}}</label>
            </div>
            <div class="col-md-12 row">
                <div v-for="producto in list['list']" class="col-md-6 mb-4">
                    <p>
                        <img v-bind:src="img['src']" class="cp2 b4" alt="">
                    </p>
                    <p>
                        <label for="" class="">{{producto['nombre']}}</label>
                    </p>
                    <p class="text-streng">
                        <a href="" class="btn btn-success">ver</a>
                        <a href="" class="btn btn-success">comentar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
<script src="js/app.js"></script>

</html>