<?php require_once '../templates/header.php' ?>
    <div class="container p-4">
        <form action="../controllers/create_controller.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name='name'>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Age" name='age'>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Province" name='province'>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
<?php require_once '../templates/footer.php' ?>