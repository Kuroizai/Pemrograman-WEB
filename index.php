<?php
session_start();
include 'base.php';
if (isset($_COOKIE['mail']) && isset($_COOKIE['passwd'])){
    if (isset($_SESSION['auth'])){
        //     $mail = $_POST['username'];
        //     $password = $_POST['password'];
        //     setcookie('mail',$mail,time()+(60));
        //     setcookie('passwd',$password,time()+(60));
            header('Location: home.php');
            exit;
    }

    
}
?>


<?= create_header('LOGIN'); ?>
    <div class="container" style='margin-top:8%;'>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="log-wrap mx-auto" style='width:50%;'>
            <div class="sign-in">
                <form action="control.php" method="post" id = "form">
                    <div class="form-group d-flex">
                        <label for="username" class='p-2'><i class="fas fa-user"></i></label>
                        <input type="text" name="username" id="username" class=form-control placeholder = 'Username'>
                    </div>
                    <div class="form-group d-flex">
                        <label for="password" class='p-2'><i class="fas fa-lock"></i></label>
                        <input type="password" name="password" id="password" class=form-control placeholder = 'Password'>
                    </div>
                    <div class="button">
                        <button type="submit" class='btn btn-primary' name='log'>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= create_footer();?>
