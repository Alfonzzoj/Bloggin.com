<?php include '../../views/header.php'; ?>
<div class="container p-5 mt-5">

    <div class="card card-body">
        <form action="check_login.php" method="post" class="form-signin">
            <div class="container ">
                <div class="row">
                    <img src="../../source/img/2.png" alt="" style="width: 6rem;" class=" rounded-circle d-block  mx-auto mb-4">
                </div>
            </div>
            <!--  -->
            <div class="form-group">
                <label for="Username">Username</label>
                <input id="Username" class="form-control" type="text" placeholder="Username" name="username" required>
            </div>
            <!--  -->
            <div class="form-group">

                <label for="Password">Password</label>
                <input id="Password" class="form-control" type="password" placeholder="Password" name="password" required>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    ¿Don't have account? <a href="signup.php">Sign up</a>
                </small>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-2">Confirm identity</button>

        </form>

    </div>

</div>
<?php include '../../views/footer.php'       ?>