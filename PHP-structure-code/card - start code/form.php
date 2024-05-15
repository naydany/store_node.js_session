<?php
function secureData($data)
{
    $data = trim($data); //remove space
    $data = htmlspecialchars($data); //not allow to run script
    return $data;
}
$values = [
    'username' => '',
    'code' => '',
];
$errors = [
    'username' => '',
    'code' => '',
];
$is_form = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['username'] = isset($_POST['username']) ? $_POST['username'] : '';
    $values['code'] = isset($_POST['code']) ? $_POST['code'] : '';
    
    // show the error message below the username if the username is beside rules below:
    //     - characters(Lower and upper) 
    $is_form = true;
   
    if(isset($_POST['submit'])){
        $ussr = "/^[a-zA-Z\s\d]+$/";
      
        if(empty($_POST['username'])){
            $errors['username'] = 'You need to complete text*';
            $is_form = false;
        }else{
            if(preg_match($ussr,secureData($_POST['username']))){
                $values['username'] = secureData($_POST['username']);
                // $is_form = false;
            }else{
                $errors['username'] = 'this title is not invalid *';
                $is_form = false;
            }

        }
        $code = "/^[!#$&a-zA-Z\d]{10,15}+$/";
        if (empty($_POST['code'])){
            $errors['code'] = 'No title*';
            $is_form = false;
        }else{
            if(preg_match($code,secureData($_POST['code'])) ){
                $values['code'] = secureData($_POST['code']);
                // $is_form = false;
            }else{
                $errors['code'] = 'this code is not invalid *';
                $is_form = false;
            }
        }
        
        
    }


    // show the error message below code if the code is beside rules below:
    //     - characters(Lower and upper)
    //     - digits
    //     - special characters (!@#$)
    //     - more or equal 8 chars
    //     * the correct code must be:
    //         - has at least one uppercase character 
    //         - has at least one special character
    // both username and code should be checked secureData() function
    // $code = "/^[a-zA-Z\s\d_]+&$#!/";
    // if ()

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
                            <input type="text" class="form-control" value="" id="username" name="username" value="" required>
                            <small class="form-text text-danger">
                                <?= $errors['username'] ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" class="form-control" value="" id="code" name="code" value="" required>
                            <small class="form-text text-danger">
                                <?= $errors['code'] ?>
                            </small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php if ($is_form): ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <p>Result</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">Your username is:
                                <?= $values['username'] ?>
                            </div>
                            <div class="col">Your code is:
                                <?= $values['code'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php
endif;
?>