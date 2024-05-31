<!-- Database Connection -->
<?php

include('./database/config.php');
include('./Function/display_function.php');

?>
<!-- Database Connection -->

<!-- Programme and Course are Organize -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
   $(document).ready(function(){
    $("#programme_details_id").change(function(){
        var course_id=$(this).val();
        $.ajax({
            url:"get_course_details.php",
            method:"POST",
            data:{course_ID:course_id},
            success:function(data){
                $("#course_details_id").html(data);
            }
        }); 
    });
});
    </script>

<!-- Programme and Course are Organize -->

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
                                                
                                                <div class="col-lg-4">
                                                <select id="programme_details_id" class="form-control m-bot15" name="programme_id" style="text-align: center;">
                                                    <?php
                                            
                                                        Display_Programme();
                                            
                                                    ?>
                                                </select>
                                                </div>
                                                <div class="col-lg-4">
                                                <select id="course_details_id" class="form-control m-bot15" name="course_id" style="text-align: center;">
                                                    
                                                </select>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Subject" name="subject_name">
                                                </div>
                                                
                                                
                                                <div class="col-lg-5"></div>
                                                <div class="col-lg-6 form-group">
                                                    <br>
                                                    <input type="submit" placeholder=".col-md-3" class="form-button" value="Submit" name="subject_submit">
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
 <!-- footer -->
<?php

include('./Borders/footer.php');

?>
 <!-- / footer -->


<?php

if (isset($_POST["subject_submit"])) 
{
    $programme_id = $_POST['programme_id'];
    $course_id = $_POST['course_id'];
    $subject_name = $_POST['subject_name'];
    $subject_status = "active";


    $subject_insert_query = "insert into subject_tbl (programme_id,course_id,subject_name,subject_status) values ('$programme_id','$course_id','$subject_name','$subject_status')";
    $subject_insert_main_query = mysqli_query($connection,$subject_insert_query);
    if ($subject_insert_main_query) 
    {
        echo "<script>alert('Programme Inserted Successfully')</script>";
        echo "<script>window.open('add_subject.php','_self')</script>";
    }
    else
    {
        die(mysqli_error($connection));
    }

}

?>