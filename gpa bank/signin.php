<!doctype html>
<html lang="en">

<head>
  <title>gpa-Sign In</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
<?php
    include "header.php";
?>
<br>
<h1 class="text-center">Sign  in </h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-4 container-fluid justify-content-sm-center m-auto">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your username">
  <br>
  
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter your password">  
  <br>
  <div class="btn btn-success m-auto">Sign in</div>
        </div>
    </div>
</div>
<br>
<br>

<?php
    include "footer.php"
?>  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>