<!-- Database Connection -->
<?php

include('./database/config.php');
include('./Function/display_function.php');

?>
<!-- Database Connection -->
<!--header start-->
<?php

include('./Borders/header.php');

?>
<!--header end-->
<!--sidebar start-->
<?php

include('./Borders/side_bar.php');

?>
<!--sidebar end-->
<!--main content start-->
        <section id="main-content">
            <section class=" wrapper">
                <div class="form-w3layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel">
                                <div data-collapsed="0" class="pane">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <u><b>Add Course</b></u>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <form action="" method="post">
                                                <div class="col-lg-3"></div>
                                                
                                                <div class="col-lg-6">
                                                <select class="form-control m-bot15" name="programme_id" style="text-align: center;">
                                                    <?php
                                                        Display_Programme();
                                                        // $programme_select_query="Select * from programme_tbl";
                                                        // $programme_select_main_query=mysqli_query($connection,$programme_select_query);
                                                        // echo "<option selected disabled>-Select Programme-</option>";
                                                        // while($programme_row=mysqli_fetch_assoc($programme_select_main_query))
                                                        // {
                                                        //     $programme_id=$programme_row['programme_id'];
                                                        //     $programme_name=$programme_row['programme_name'];
                                                        //     echo "<option value='$programme_id'>$programme_name</option>";
                                                        // }
                                                    ?>
                                                </select>
                                                </div>
                                                <div class="col-lg-3"></div>
                                                <br><br><br>
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Course" name="course_name">
                                                </div>
                                                <div class="col-lg-3"></div>
                                                
                                                <div class="col-lg-5"></div>
                                                <div class="col-lg-6 form-group">
                                                    <br>
                                                    <input type="submit" placeholder=".col-md-3" class="form-button" value="Submit" name="course_submit">
                                                </div>
                                            </form>
                                        </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>
<!--main content end-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <!-- footer -->
<?php

include('./Borders/footer.php');

?>
 <!-- / footer -->


<?php

if (isset($_POST["course_submit"])) 
{
    $course_name = $_POST["course_name"];
    $programme_id = $_POST["programme_id"];
    $course_status = "active";

    $course_insert_query = "insert into course_tbl (programme_id,course_name,course_status) values ('$programme_id','$course_name','$course_status')";
    $course_insert_main_query = mysqli_query($connection,$course_insert_query);
    if ($course_insert_main_query) 
    {
        echo "<script>alert('Programme Inserted Successfully')</script>";
        echo "<script>window.open('add_course.php','_self')</script>";
    }
    else
    {
        die(mysqli_error($connection));
    }

}

?>