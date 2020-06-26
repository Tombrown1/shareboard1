<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link rel="stylesheet"  href="/php.dev/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/php.dev/assets/css/style.css">   

</head>

<body>

<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Register User</h3>
    </div>
    <div class="panel-body">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>User Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>User Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
        </form>
    </div>
</div>
</div>

</body>
<html>