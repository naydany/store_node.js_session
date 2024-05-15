<?php
require_once('template/header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['subjects']) && isset($_POST['province']) && isset($_POST['fruits'])) :
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $subjects = $_POST['subjects'];
        $province = $_POST['province'];
        $fruits = $_POST['fruits'];
?>
        <div class="container">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Email:<?= $email ?></li>
                    <li class="list-group-item">Passord:<?= $password ?></li>
                    <li class="list-group-item">Gender:<?= $gender ?></li>
                    <li class="list-group-item">Subjects:
                        <?php
                        foreach ($subjects as $subject) :
                            echo $subject . ' ';
                        endforeach
                        ?>
                    </li>
                    <li class="list-group-item">Province:<?= $province ?></li>
                    <li class="list-group-item">Fruits:
                        <?php foreach ($fruits as $fruit) :
                            echo $fruit . ' ';
                        endforeach
                        ?>
                    </li>
                </ul>
            </div>
        </div>
<?php
    endif;
endif;
?>
<?php
require_once('template/footer.php');
?>