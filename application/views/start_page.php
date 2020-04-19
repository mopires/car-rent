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
        <?php foreach ($carros as carro){ ?>
        <tr>
            <td><?php $carro['nome']</td>
        </tr>
    </table>
</head>
<body>





</body>
</html>