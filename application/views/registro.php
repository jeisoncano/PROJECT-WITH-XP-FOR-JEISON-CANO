<div class="container">
<div class="center">
    <h1 class="center">Formulario de registro</h1>
</div>
<form action="<?php echo base_url() . "Registro/addUser" ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre completo</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted">Ingresa el nombre completo</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Ingresa el correo electronico</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="number" class="form-control" name="cellphone" id="cellphone" placeholder="telefono">
    <small id="emailHelp" class="form-text text-muted">Ingresa el numero de celular o fijo</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Crear contraseña</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted">crar una contraseña</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>