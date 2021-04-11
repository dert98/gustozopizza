<section>
    <div class="text-center m-autp t5">
        <p class="h3">
            OUR MENU
        </p>
        <p class="h4">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
        </p>
    </div>
    <div class="container text-center text-light m-auto">
        <div class="">
            <label for="" class="h2 bb3">Empanadas</label>
            <div class="col-md-12 row">
                <div v-for="producto in list['empanadas']" class="col-md-4 mb-4 row">
                    <div class="col">
                        <img v-bind:src="producto['src']" class="w200 h200 img-thumbnail" alt="">
                    </div>
                    <div class="col">
                        <label for="" class="">{{producto['nombre']}}</label>
                        <p>
                            <label for="" class="" v-if="">{{producto['precio']}}</label>
                        </p>
                        <p class="text-streng">
                            <a href="" class="btn btn-success">comprar</a>
                        </p>
                    </div>
                </div>
            </div>
            <label for="" class="h2 bb3">Pizzas</label>
            <div class="col-md-12 row">
                <div v-for="producto in list['pizzas']" class="col-md-4 mb-4 row">
                    <div class="col">
                        <img v-bind:src="producto['src']" class="w200 h200 img-thumbnail" alt="">
                    </div>
                    <div class="col">
                        <label for="" class="">{{producto['nombre']}}</label>
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
</section>
<section class="row col-md-12">
    <div class="col-md-6">
        <img src="https://images.deliveryhero.io/image/pedidosya/products/e3a3f7fa-6bed-4602-8deb-36d7d714c220.jpg?quality=80&amp;width=200&amp;height=150"
            alt="" srcset="" class="w-100">
    </div>
    <div class="col-md-6 justify-content-center align-content-center text-light">
        <div class="mt-5">
            <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
        </div>
        <div class="">
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would
                have been rewritten a thousand times and everything that was left from its origin would be the word
                "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing
                the copy said could convince her and so it didn’t take long until a few insidious Copy Writers
                ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they
                abused her for their.</p>
        </div>
    </div>
</section>
<section>
    <div class="col-md-12 row text-laight">
        <div class="col-md-6 row justify-content-around align-content-around" v-for="producto in list['empanadas']">
            <div class="col">
                <img class="rounded-circle"
                    src="https://images.deliveryhero.io/image/pedidosya/products/e3a3f7fa-6bed-4602-8deb-36d7d714c220.jpg?quality=80&amp;width=200&amp;height=150">
            </div>
            <div class="col text-light">
                <p class="">
                    <span class="">{{producto['nombre']}}</span>
                    <span class="t5">{{producto['precio']}}</span>
                </p>
                <p>{{producto['nombre']}}{{producto['nombre']}}</p>
            </div>
        </div>
    </div>
</section>