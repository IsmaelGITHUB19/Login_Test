<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
  <style>
    body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f8f9fa;
    }
    .card {
      width: 350px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <div class="card">
    <h3 class="text-center mb-4">Login</h3>
    <form action="Verificalogin.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
        <small id="emailHelp" class="form-text text-muted">
          We'll never share your email with anyone else.
        </small>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
      </div>

      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label> <br>
        <a href="Cadastro.php">Cadastrar</a>
      </div>

      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>

</body>
</html>
