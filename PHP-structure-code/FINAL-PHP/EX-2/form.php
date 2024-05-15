<!-- WRIRE CODE PHP Submit FORM WITH VALIDATION -->


<?php

$values = [
    'username' => "",
    'password' => "",
];

$error = [
    'username' => "",
    'password' => "",
];

$is_form = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vdt_name = "/^[a-zAZ\d\s]+$/";
    $vdt_pass = "/^[a-zA-Z\d\.!#$@%]{5,20}+$/";
    $is_form = true;


    if (!preg_match($vdt_name, $_POST['username']) || empty($_POST['username'])) {
        $error['username'] = "Please enter the username";
        $is_form = false;
    } else {
        if (isset($_POST['username'])) {
            $values['username'] = $_POST['username'];
        }
    }
    if (!preg_match($vdt_pass, $_POST['password']) || empty($_POST['password'])) {
        $error['password'] = "Please enter the password";
        $is_form = false;
    } else {

        if (isset($_POST['password'])) {
            $values['password'] = $_POST['password'];
        }
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1>Form</h1>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" value="" id="username" name="username" value="">
                            <small class="form-text text-danger">
                                <?php echo $error['username']; ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" value="" id="password" name="password" value="">
                            <small class="form-text text-danger">
                                <?php echo $error['password'];  ?>
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<br>
<?php
if ($is_form) :
?>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <p>
                            username:
                            <?= $values['username'] ?>
                        </p>
                        <p>
                            password:
                            <?= $values['password'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
<?php
endif;
?>