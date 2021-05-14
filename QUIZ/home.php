<?php
session_start();
include 'base.php';

if (!isset($_SESSION["auth"])){
    header('location: index.php');
    exit;
}
?>

<?= create_header('HOME'); ?>
<h1>Successfull</h1>
<form action="" method="post">
    <button type="submit" class="btn btn-primary" name='logout'>Log Out</button>
</form>


<?php
    if(isset($_POST['logout'])){
        out_of_biscuits();
    }
?>

<?= create_footer();?>