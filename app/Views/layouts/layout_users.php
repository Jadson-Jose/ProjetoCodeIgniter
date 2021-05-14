<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Geral</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>">

</head>

<body>

    <h1>Estou no layout 1</h>
        <?php $this->renderSection('conteudo') ?>
    <h1>Estou no layout 2</h>


            <!-- JAVASCRIPT -->
            <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>