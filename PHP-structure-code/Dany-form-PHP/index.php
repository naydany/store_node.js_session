<?php
require_once('tamplates/header.php');
?>

<body>
    <div class="container">
        <form action="action.php" method="post">
            <div class="cards">
                <img src="image/user.png" alt="" class="image">
                <h3>Dany Form PHP</h3>
                <div class="form">
                    <div class=" row g-3 mt-3">
                        <label for="staticName" class="col-auto">Full name:</label>
                        <div class="col-auto">
                            <div class=" col-sm-12">
                                <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="firstname">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="col-sm-12">
                                <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="lastname">
                            </div>
                        </div>
                    </div>
                    <div class=" row g-3 mt-3">
                        <label for="staticName" class="col-auto">Age :</label>
                        <div class="col-auto">
                            <div class="col-sm-12">
                                <input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="age" style="width:455px
                                ; margin-left: 36px;">
                            </div>
                        </div>
                    </div>


                    <div class=" row g-3 mt-3">
                        <label for="staticEmail" class="col-auto">Email :</label>
                        <div class="mb-3 row col-auto">
                            <div class="col-sm-12">
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="your email" style="width:455px
                                ; margin-left: 22px;">
                            </div>
                        </div>
                    </div>


                    <div class=" row g-3 mt-3">
                        <label for="inputPassword" class="col-auto">Password </label>
                        <div class="mb-3 row col-auto">
                            <div class="col-sm-8 ">
                                <input type="password" name="password" class="form-control" id="inputPassword" style="width:455px
                            ;">
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3 ">
                        <label for="inputPassword" class="col-auto">Are you a student? :</label>
                        <div class="form-check form-check-inline col-sm-1" style="margin-left: 8px;">
                            <input class="form-check-input" type="radio" name="RadioOptions" id="Radio1" value="yes">
                            <label class="form-check-label" for="Radio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline col col-sm-1">
                            <input class="form-check-input" type="radio" name="RadioOptions" id="Radio2" value="No">
                            <label class="form-check-label" for="Radio2">No</label>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <label for="inputPassword" class="mb-2">What subjects you learn? </label>
                        <div>
                            <div class="form-check form-check-inline col-sm-2 mb-2 " style="margin-left: 1px;">
                                <input class="form-check-input" type="checkbox" id="subject1" value="HTML/CSS" name='subjects[]'>
                                <label class="form-check-label" for="subject1">
                                    HTML/CSS
                                </label>
                            </div>
                            <div class="form-check form-check-inline col-sm-2">
                                <input class="form-check-input" type="checkbox" id="subject2" value="Javascript" name='subjects[]'>
                                <label class="form-check-label" for="subject2">
                                    Javascript
                                </label>
                            </div>

                            <div class="form-check form-check-inline col-sm-2">
                                <input class="form-check-input" type="checkbox" id="subject3" value="PHP" name='subjects[]'>
                                <label class="form-check-label" for="subject3">
                                    PHP
                                </label>
                            </div>

                            <div class="form-check form-check-inline col-sm-2">
                                <input class="form-check-input" type="checkbox" id="subject4" value="Algorithm" name='subjects[]'>
                                <label class="form-check-label" for="subject4">
                                    Algorithm
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <label for="provinces" class="col-auto">Where are you from ? </label>
                        <select class="form-select" name="provinces" id="provinces" aria-label="Default select example" style="width:540px;">
                            <option selected>Your province</option>
                            <option value="Takeo">TAKEO</option>
                            <option value="Phnom Penh">PP</option>
                            <option value="BTB">BTB</option>
                            <option value="KBS">KBS</option>
                        </select>

                    </div>



                    <input class="btn btn-primary mt-5" type="submit" value="Submit">
                </div>
            </div>
    </div>
    </div>
</body>

<?php
require_once('tamplates/footer.php');
?>