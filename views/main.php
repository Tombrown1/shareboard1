<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link rel="stylesheet"  href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">   

</head>
<body>
   
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Shareboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li><a class="nav-link" href="<?php echo ROOT_URL;?>php.dev">Home</a></li>  
      <li><a class="nav-link" href="<?php echo ROOT_URL;?>php.dev/shares">Shares</a></li> 
    </ul>

            <?php if(isset($_SESSION['is_logged_in'])): ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link" href="<?php echo ROOT_URL; ?>php.dev">Welcome <?php echo $_SESSION['user_data']['name'];  ?></a></li>  
      <li><a class="nav-link" href="<?php echo ROOT_URL; ?>php.dev/users/logout">Logout</a></li> 
    </ul>
            <?php else: ?>

    <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link" href="<?php echo ROOT_URL; ?>php.dev/users/login">Login</a></li>  
      <li><a class="nav-link" href="<?php echo ROOT_URL; ?>php.dev/users/register">Register</a></li> 
    </ul>
            <?php endif; ?>
    
  </div>  
</nav>
    <div class="container main">
    <?php messages:: display(); ?>       
            <?php require($view); ?>        
    </div>
</body>
</html>