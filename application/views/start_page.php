<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');?>"/>

</head>
<body>

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-sm">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#inicio">
                    Locadora
                </a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <a href="<? echo site_url('LoginController/index')?>">Login</a>

                </ul>
            </nav>
        </div>
    </div>

    <table class="table">
        <tr>
            <td>Id</td>
            <td>Nome</td>

        </tr>
        <?php foreach ($carros as $carro) : ?>
            <tr>
                <td><?php echo $carro['id_carro']?></td>
                <td><?php echo $carro['modelo']?></td>
            </tr>
        <?php endforeach; ?>
    </table>



</body>
</html>