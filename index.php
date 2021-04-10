<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://dert98.github.io/Porfolio/global.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <header>
    </header>
    <main id="app">
        <div class="m-4 text-center m-auto">
            <label class="h1">{{list['name']}}</label>
        </div>
        <div>
            <div class="container text-center m-auto">
                <div class="text-center">
                    <div class="m-4">
                        <label class="h1">Productos</label>
                        <div>
                            <a href="">Empanadas</a> /
                            <a href="">Pizzas</a>
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div v-for="producto in list['productos']" class="col-md-3 mb-4">
                            <p>
                                <img v-bind:src="producto['src']" class="w200 h200 img-thumbnail" alt="">
                            </p>
                            <p>
                                <label for="" class="">{{producto['nombre']}}</label>
                            </p>
                            <p>
                                <label for="" class="" v-if="">{{producto['precio']}}</label>
                            </p>
                            <p class="text-streng">
                                <a href="" class="btn btn-success">comprar</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/app.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>