<!doctype html>
<html lang="en">

<head>
  <title>gpa-Sign Up</title>
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

<h1 class="text-center">Sign up</h1>
<!-- signup form  -->
<div class="container " >
    <div class="row">
        <div class="col-md-4  container-fluid justify-content-sm-center m-auto" >
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">E-mail</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" >
  <br>
  
  <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
  <br> 
  
  <label for="exampleFormControlInput1" class="form-label">Set Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  <br>
  
  <label for="exampleFormControlInput1" class="form-label">Set Password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">  
  <br>
  
  <label for="exampleFormControlInput1" class="form-label">Retype password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
  <span>Password should be same as the set password</span>
  <br>
  <br>

  <div class="btn btn-primary text-center">Sign Up</div>

</div>


</div>
        </div>
    </div>
</div>
<br>
<br>

<?php
    include "footer.php";
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