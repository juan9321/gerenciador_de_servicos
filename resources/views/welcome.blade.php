<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite([
            'resource/js/app.js',
            'resource/js/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css'
        ])
         
    </head>
    <body  style="background-color: #D3D3D3;">

<div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary" >
      <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA WEB </a>
          <a class="navbar-brand" href="#">Consulta </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
          
            </div>
          </div>
        </div>
         </nav>
  <div class="bg-white">
       
<div class="container px-5">
<br>
<h2>Cadastrar - Agendamento de Potenciais Clientes</h2>
      <h5>Sistema utilizado para agendamento de serviços</h5>


    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div>
        <label for="exampleInputEmail1" class="form-label">Telefone</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="(xx)xxxxx-xxxx">
        </div>
        <div>
          <label for="exampleInputEmail1" class="form-label">Data de contato</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <br>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Origem</label>
          <select class="form-select" aria-label="Default select example" >
          <option value="1">Telefone</option>
          <option value="2">Celular</option>
          <option value="3">E-mail</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
<br><br>
      </div>
      </div>
      </div>
    </body>
</html>
