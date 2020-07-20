<?php $v->layout("theme/_theme")?>

<?php $v->push('style') ?>
    <link rel="stylesheet" href="<?= url("source/Views/css/form.css")?>">
<?php $v->stop() ?>

<?php $v->push("header")?>
    <h1 class="title">Editar de Usuario</h1>
    <a class="btn" href="<?= url("") ?>">Voltar</a>
<?php $v->stop()?>

<form action="<?= url("editar/{$user->id}/")?>" method="post">
            <input type="text" name="nome" placeholder="Nome" value="<?= $user->nome ?>">
            <input type="text" name="email" placeholder="Email" value="<?= $user->email ?>">
            <input type="text" name="phone" placeholder="Phone" value="<?= $user->phone ?>">
            <input type="password" name="senha" placeholder="Senha" value="<?= $user->senha ?>">
            <input class="btn" type="submit" value="Salvar">
</form>