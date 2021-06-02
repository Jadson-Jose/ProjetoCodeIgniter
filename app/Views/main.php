<?php
$this->extend('layouts/layout_main');
?>

<?php $this->section('conteudo') ?>
<a href="<?php echo site_url('users') ?>" class="btn btn-outline-primary btn-200">Users</a>
<?php $this->endSection() ?>