<?php
require_once 'templates/header.php';


?>
<div class="container p-4">
    <div class="d-flex justify-content-end p-4">
        <a href="/views/create_view.php" class="btn btn-primary">Add Item +</a>
    </div>
    <?php
    // TODO:

    require("models/student.php");
    $stus = getStudents();

    ?>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <?php
                foreach ($stus as $stu) :
                ?>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $stu['name'] ?>
                                <span>
                                    <a href="/views/edit_view.php?id=<?= $stu['id']; ?> " class="badge badge-primary mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="?id=<?= $stu['id']; ?>" class="badge badge-danger "><i class="fa fa-trash"></i></a>
                                </span>
                            </li>
                            <li class="list-group-item"><?php echo $stu['age'] ?></li>
                            <li class="list-group-item"><?php echo $stu['province'] ?></li>
                        </ul>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>

</div>
<?php require_once 'templates/footer.php'; ?>