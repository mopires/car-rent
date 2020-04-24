<?php
defined('BASEPATH') OR exit('No direct script access allowed');



?><!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');?>"/>

</head>
<body>
<?if (is_array($erro)){
echo $erro->erro;
}?>
    <div class="container">
        <div class="row">


            <div class="offset-4">
                <h1>Locadora </h1>
            </div>

            <div class="offset-4">
                <form method="post" action="<? echo site_url('login/validate')?>">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>


        </div>
    </div>



</body>
</html>