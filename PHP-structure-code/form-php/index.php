<?php
require_once('template/header.php');
?>

<body>
    <div class="container">
        <form action="action.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
                            <label class="form-check-label" for="Male">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                            <label class="form-check-label" for="Female">
                                Female
                            </label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subjects[]" value="PHP" id="PHP">
                            <label class="form-check-label" for="PHP">
                                PHP
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subjects[]" value="JS" id="JS">
                            <label class="form-check-label" for="JS">
                                JS
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subjects[]" value="HTML & CSS" id="HTML & CSS">
                            <label class="form-check-label" for="HTML & CSS">
                                HTML & CSS
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <select name="province" class="form-select" aria-label="Default select example">
                    <option selected>Chose the province</option>
                    <option value="TAKOE">TAKOE</option>
                    <option value="KPT">KPT</option>
                    <option value="PHNOM PENH">PHNOM PENH</option>
                    <option value="KEB">KEB</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select" name="fruits[]" multiple aria-label="multiple select example">
                    <option selected>Choose the fruits</option>
                    <option value="Apple">Apple</option>
                    <option value="Pine Apple">Pine Apple</option>
                    <option value="Wood Apple">Wood Apple</option>
                    <option value="Orange">Orange</option>
                    <option value="Banana">Banana</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<?php
require_once('template/footer.php');
?>