<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <!-- Repris de /usr/share/pandoc/data/templates/default.html5 -->
    <meta charset="utf-8" />
    <meta name="author" content="dan" />

    <link rel="stylesheet" href="css/bootstrap/3.4.0/bootstrap.min.css">

    <script src="js/jquery/jquery-3.3.1.min.js"></script>  
    <script src="js/bootstrap/3.4.0/bootstrap.min.js"></script>

  <title>Dan project</title>

</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">DanProject</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="page1.php">Page 1</a></li>
      <li><a href="page2.php">Page 2</a></li>
      <li><a href="page3.php">Page 3</a></li>
    </ul>
  </div>
</nav>

<!-- Container -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Page 1</div>
        <div class="panel-body">
            <pre>$ cf push -m 512M -b php_buildpack php-hellodan</pre>
        </div>
    </div>
</div>


</body>
</html>


