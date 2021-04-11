var app = new Vue({
  el: "#app",
  data: {
    list: {},
    productos:{}
  },
  
  mounted: function () {
    this.getUsers();
  },
  
  methods: {
    getUsers: function() {
			var lista = this;
			axios.get("./config.json").then(function(response) {
				lista.list = response.data;
			}, function(error) {
				console.log(error.statusText);
			});
		}
  },
  })
    