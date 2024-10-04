<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark width-auto">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Dashboard</a>
  
  <p class="text-white pt-3 ">welcome <?php echo $_SESSION['name'];  ?> </p>
  
  <a class="navbar-brand btn-secondary p-2 flex-row-reverse" href="logout">Logout</a>

  
</nav>


</body>
</html>
