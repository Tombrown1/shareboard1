<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">User Login</h3>
    </div>
    <div class="panel-body">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
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