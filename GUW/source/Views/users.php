<?php $v->layout("theme/_theme")?>

<?php $v->push("header")?>
    <h1 class="title">Usuarios Cadastrados</h1>
    <a class="btn" href="<?= url("cadastro") ?>">Criar Usuarios</a>
<?php $v->stop()?>

<br/>
<div class="users">
     <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th colspan="2">Phone</th>
        </tr>

        <?php 
            if($users):
                foreach($users as $user):
                    $num = $user->phone;  
                    $numFinal = '('.substr($num, 0, -9).') '.substr($num, 2);
                ?>

                <tr>
                    <th><?= $user->id?></th>
                    <th><?= $user->nome?></th>
                    <th><?= $user->email?></th>
                    <th><?= $numFinal?></th>
                    <th class="around">
                        <a href="<?= url("editar/{$user->id}")?>" class="btn icon">EDITAR</a>
                        <a href="<?= url("destroy/{$user->id}")?>" class="btn icon">EXCLUIR</a>
                    </th>
                </tr>
                <?php
                endforeach;
            endif;

        ?>
    </table>

</div>
