<?php

use Random\Engine\Secure;

function secureData($data)
{
    // function to check if message is correct (must have at least 10 caracters (after trimming))
    $data= trim($data);  //remove space
    $data= htmlspecialchars($data);  // <script> alert("hacked") </script>
    return $data;

}

function validate_username($username)
{
    return ctype_alnum($username);
}

function validate_email($email)
{
    // function to check if email is correct (must contain '@')
    for ($i=0;$i<strlen($email);$i++){
        if ($email[$i] == '@') {
            return true;
        }
    }
    return false;
}


$user_error = "";
$email_error = "";
$terms_error = "";
$message_error = "";
$username = "";
$email = "";
$message = "";

$form_valid = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'])) {
        $form_valid= true;
       
        // Here is the list of error messages that can be displayed:
        if(empty($_POST['username'])) {
            $user_error = 'Please enter a username';
            $form_valid = false;
        }else{
            if (!validate_username(secureData($_POST['username']))){
                $user_error= "User should contain only letters and numbers";
                $form_valid=false;
            }else{
                $username = secureData($_POST['username']);
            }
        }
        // "Message must be at least 10 characters long"
        // "You must accept the Terms of Service"
        // "Please enter a username"
        
        if (empty($_POST['email'])){
            $email_error = 'Please enter an email';
            $form_valid = false;
        }else{
            if( !validate_email(secureData($_POST['email']))){
                $email_error = "Email must contain '@'";
                $form_valid =false;
            }else{
                $email = secureData($_POST['email']);
            }
        }


        // "Username should contains only letters and numbers"
        // "Please enter an email"
        // "email must contain '@'"

        if (empty($_POST['terms'])){
            $form_valid = false;
            $terms_error = "You must accept the Terms of Service";
        }
        if (empty($_POST['message']) || strlen(($_POST['message'])) <10){
            $message_error = 'Message must be at least 10 characters long';
            $form_valid =false;
        }else{
            $message = secureData(($_POST['message']));
        }
    }
}

?>

<form action="#" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username">
            <small class="form-text text-danger"> <?php echo $user_error; ?></small>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter email" name="email">
            <small class="form-text text-danger"> <?php echo $email_error; ?></small>
        </div>
    </div>
    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"></textarea>
        <small class="form-text text-danger"> <?php echo $message_error; ?></small>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" name="terms" id="terms" value="terms"> <label for="terms">I accept the Terms of Service</label>
        <small class="form-text text-danger"> <?php echo $terms_error; ?></small>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form>

<hr>

<?php
if ($form_valid) :
?>
    <div class="card">
        <div class="card-header">
            <p><?php echo $username; ?></p>
            <p><?php echo $email; ?></p>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $message; ?></p>
        </div>
    </div>
<?php
endif;
?>