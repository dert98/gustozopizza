var app = new Vue({
    el: "#app",
    data: {
      list: [],
    },

    mounted: function () {
        this.cargar();
    },
    methods: {
        cargar: function () {
            $http= "../config.json";
            this.$http.get().then((respuesta) => {
                this.list = respuesta;
            });
        },
    },
})