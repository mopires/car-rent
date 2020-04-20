<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

    <table>
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
</head>
<body>





</body>
</html>