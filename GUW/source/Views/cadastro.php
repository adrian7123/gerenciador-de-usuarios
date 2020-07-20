<?php $v->layout("theme/_theme")?>

<?php $v->push('style') ?>
    <link rel="stylesheet" href="<?= url("source/Views/css/form.css")?>">
<?php $v->stop() ?>

<?php $v->push("header")?>
    <h1 class="title">Cadastro de Usuarios</h1>
    <a class="btn" href="<?= url("") ?>">Voltar</a>
<?php $v->stop()?>

<form action="<?= url("cadastro/cadastrar")?>" method="post">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="password" name="senha" placeholder="Senha">
            <input class="btn" type="submit" value="Cadastrar-se">
</form>