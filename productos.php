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