var app = new Vue({
  el: "#app",
  data: {
    list: null,
    usuarios: []
  },
  
  mounted: function () {
    this.getAllusuarios();
    this.getUsers();
  },
  
  methods: {
      getAllusuarios: function () {
        axios.get("../php/api.php?action=read")
        .then(function (response) {
          if (response.data.error) {
            app.errorMessage = response.data.message;
          } else {
            app.usuarios = response.data.usuarios;
            app.filtrados = response.data.usuarios;
          }
        })
    },
    getUsers: function() {
			var lista = this;
			axios.get("./config.json").then(function(response) {
				lista.list = response.data;
			}, function(error) {
				console.log(error.statusText);
			});
		}
  },
  computed: {
      getTotalusuarios: function () {
        return this.Usuarios.length;
      },
  
      UsuariosVacio: function () {			
        return this.getTotalUsuarios == 0;
      },
  
      busqueda: function () {
          return this.filtrados.filter((item) => item.busqueda.includes(this.busqueda));
      }
  
    },
  })
    