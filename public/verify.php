<?php require '../includes/header.php'?>


<?php


    if(isset($_POST['submit'])) {

        if(isset($_POST['code'])){


            $code = $_SESSION['code'];


            $res = $connection->query("SELECT * FROM codes WHERE verification_code='{$code}'");
            $row = $res->fetch_assoc();


            if(trim($_POST['code']) == $row['verification_code']){

                $connection->query("DELETE FROM codes WHERE verification_code='{$code}'");

                header("Location: success.php");


            } else {

                echo "<div class='row'>";

                echo "<h3 class='bg-danger text-center'> Wrong code, please try again</h3>";

                echo "</div>";


            }



        }




    }






?>














<div class="row">

    <div class="col-sm-6 col-sm-offset-3">


        <form role="form" method="post">
            <div class="form-group">

                <input name="code" type="text" class="form-control" id="code" placeholder="Enter code">
            </div>

            <input name="submit" type="submit" class="btn btn-primary btn-block" value="Verify">
        </form>


    </div>
</div>




<?php require '../includes/footer.php'?>
