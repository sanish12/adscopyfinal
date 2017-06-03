<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/admin/dashboard">Home</a></li>
      <li><a href="/admin/mngcategory">Manage Categories</a></li>
      <li><a href="#">Gigs</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
   <li ><a href="/admin/logout">LOGOUT</a></li>
 </ul>
  </div>
</nav>
@yield('main')

</body>
</html>
