<!DOCTYPE html>
<html>
<?php
include_once('../Templates\defaults\head.php');
?>

<body style="background-color: cornflowerblue">>
<div class="container" style="background:darkslateblue"">
        <?php
        include_once('../Templates/defaults/header.php');
        include_once('../Templates/defaults/adminNav.php');
        include_once('../Templates/defaults/pictures.php');
        ?>
        <h3 class="text-warning">Binnegekomen berichten:</h3>
        <div class="row gy-4" style="width: 95%; margin: auto;">
            <?php foreach ($messages as $message) : ?>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="card-block px-2">
                            <h4 class="card-title"><?=$message->email;?></h4>
                            <p class="card-text"><?=$message->message;?></p>
                            <form method="post">  
                                <input type="hidden" name="messageId" value="<?=$message->id;?>">
                                <button type="submit" name="delete" class="btn btn-danger">Delete
                             </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-footer w-100 text-muted">
                    <?=$message->id;?>
                    <?=$message->date;?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <?php
        include_once('../Templates/defaults/footer.php');
        ?>
    </div>
</body>

</html>