<?php
require_once('tamplate/header.php');
?>

<?php

date_default_timezone_set("Asia/Phnom_Penh");

?>

<div class="container mt-5">
    <form action="" method="post">
        <table class="table table-striped ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Date</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dany</td>
                    <td>1234</td>
                    <td><?= $fulltime; ?></td>
                    <td>
                        <a href="" class="bg-danger text-light border border1 px-2  py-1 ">delete</a>||
                        <a href="" class="bg-primary text-light border border1 px-2 py-1 ">edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>


<?php
require_once('tamplate/footer.php');
?>