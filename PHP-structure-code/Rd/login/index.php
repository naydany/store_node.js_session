<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="pass" placeholder="Password" class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" name="major" value="WEP">
                                    <label class="form-check-label" for="radio1">WEP</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio2" name="major" value="SNA">
                                    <label class="form-check-label" for="radio2">SNA</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio3" name="major" value="Mobile">
                                    <label class="form-check-label" for="radio3">Mobile</label>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="skill[]" value="PHP">
                                <label class="form-check-label" for="check1">PHP</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2" name="skill[]" value="DB">
                                <label class="form-check-label" for="check2">DB</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check3" name="skill[]" value="JavaScript">
                                <label class="form-check-label" for="check3">JavaScript</label>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>