<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>

    <link rel="stylesheet" href="<?= url("source/Views/css/style.css")?>">
    <?= $v->section("style")?>
</head>
<body>

    <div class="container">
        <div class="header">
            <?= $v->section("header")?>
        </div>

        <div class="body">
            <?= $v->section("content")?>    
        </div>

        
        <div class="footer">
            
        </div>

    </div>
    
    <script src="<?= url("/assets/jquery-3.5.1.min.js")?>"></script>
    <?= $v->section("scripts") ?>
    
</body>
</html>