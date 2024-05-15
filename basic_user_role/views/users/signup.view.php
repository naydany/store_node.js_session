
<?php if (isset($_SESSION['error'])): ?>
<div class="alert alert-danger alert-dismissible fade show" id="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?= $_SESSION['error'] ?>
  </div>
<?php 
session_destroy();
endif;
?>

<div class="card">
  <div class="card-body">
    <form action="controllers/users/create_user.controller.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
      <hr>
    <a href="/signin">Already have account</a>
    </form>
  </div>
</div>