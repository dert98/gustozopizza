
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://dert98.github.io/Porfolio/global.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<title>Admin</title>
</head>
<body>
  <section id="services">
    <div id="root">
      <div class="p-4">
        <div class="container p-5">
          <div class="titulo">
            <label for="" class="h1">Admin con Vuejs</label>
          </div>
          <div class="row">
            <div class="alert alert-danger col-md-6" id="alertMessage" role="alert" v-if="errorMessage">
              {{ errorMessage }}
            </div>
            <div class="alert alert-success col-md-6" id="alertMessage" role="alert" v-if="successMessage">
              {{ successMessage }}
            </div>
            <div>
              <p class="btn btn-secondary" @click="showingaddModal = true">Agregar usuario</p>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody class="tbody-custom">
                <tr v-for="usuario in usuarios">
                  <td>{{usuario.id}}</td>
                  <td>{{usuario.firstname}}</td>
                  <td>{{usuario.lastname}}</td>
                  <td>{{usuario.email}}</td>
                  <td><button @click="showingeditModal = true; selectusuario(usuario);"
                      class="btn btn-warning">Edit</button></td>
                  <td><button @click="showingdeleteModal = true; selectusuario(usuario);"
                      class="btn btn-danger">Delete</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/app.js"></script>
</body>
</html>
    