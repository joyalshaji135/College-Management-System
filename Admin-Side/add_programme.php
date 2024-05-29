<?php

include('./database/config.php');

?>

<?php

include('./Borders/header.php');

?>




<?php

include('./Borders/side_bar.php');

?>



<!-- Content -->
<section id="main-content">
            <section class=" wrapper">
                <div class="form-w3layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <div data-collapsed="0" class="pane">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <u><b>Add Programme</b></u>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control round-input" name="programme_name">
                                                    </div>
                                                <div class="col-sm-3"></div>
                                                </div>
                                                <input type="submit" value="Submit" class="btn btn-info" name="programme_submit">
                                            </form>
                                            <br>
                                            <br>
                                        </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>         
<!-- end of the Content -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php

include('./Borders/footer.php');

?>

<?php

if (isset($_POST['programme_submit'])) 
{
    $programme_name = $_POST['programme_name'];
    $programme_status = "active";

    $programme_insert_query = "insert into programme_tbl (programme_name,programme_status) values ('$programme_name','$programme_status')";
    $programme_insert_main_query = mysqli_query($connection,$programme_insert_query);

    if ($programme_insert_main_query) 
    {
        echo "<script>alert('Programme Inserted Successfully')</script>";
        echo "<script>window.open('add_programme.php','_self')</script>";
    }
    else
    {
        die(mysqli_error($connection));
    }
}

?>

<!-- insert into `table_name` (tbl_value1,tbl_value2,tbl_value3,tbl_value4,.....,tbl_value n) values('$emp_name','$emp_age','$emp_address','$emp_salary','true') -->

