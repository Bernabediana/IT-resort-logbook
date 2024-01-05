<?php include 'header.php'; 

?>

<div class="container wrapper">
    <div class="row justify-content-center">
        <div class="col-6 shadow p-4  mt-4">
        <?php if (isset($_GET['msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_GET['msg']; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <form method="POST" action="login.php">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label text-white">Email📧</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pass" class="col-sm-2 col-form-label text-white">Pass:🔐</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="pass" name="password">
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-light m-4" name="login">Sign in</button>

                <center> <p style="color: white;">Do not have an account? 
                    <a href="register.php" class="text-blue">Sign up here</a> </p> </center> 
            </form>
        </div>
    </div>
</div> 