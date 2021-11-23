<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='main.js'></script>
</head>
<body >
    <div class="position-absolute top-50 start-50 translate-middle">

    <form class="shadow p-3 mb-5 bg-bposition-relative bg-dark text-white rounded-3">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit" href="login-aksi.php">Button</button>
          </div>
    </div> 
</body>
</html>

