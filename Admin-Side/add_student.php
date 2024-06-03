<!-- Database Connection -->
<?php

include('./database/config.php');
include('./Function/display_function.php');

?>

        <!--header start-->
        <?php

            include('./Borders/header.php');

        ?>
        <!--header end-->
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
                                            <u><b>Add Student Details</b></u>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <form action="" method="post">
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant First Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_first_name" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Middle Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_middle_name" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Last Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_last_name" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Father Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_father_name" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Mother Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_mother_name" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Student Roll Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_roll_no" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Email:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_email" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_phone_no" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Guardian Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_other_phone_np" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Guardian Email:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_email" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree which you want?:*</label>
                                                    <select id="programme_details_id" class="form-control m-bot15" style="text-align: center;" name="programme_id" autocomplete="off" required="required">
                                                        <!-- Start Programme Category Code -->
                                                        <?php
                                                            Display_Programme();
                                                        ?>
                                                        <!-- End Programme Category Code -->
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Select Course :*</label>
                                                    <select id="course_details_id" class="form-control m-bot15" style="text-align: center;" name="course_id" autocomplete="off" required="required">
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Profile Photo:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_profile" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Admitted Status:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_admitted_status" autocomplete="off" required="required">
                                                        <option selected disabled>- Applicant Admitted Status -</option>
                                                        <option>Admitted</option>
                                                        <option>Not Admitted</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Application Approved Status:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_approved_status" autocomplete="off" required="required">
                                                        <option selected disabled>- Application Approved Status -</option>
                                                        <option>Approved</option>
                                                        <option>Not Approved</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Aadhaar Card No:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_aadhaar_no" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Date of Birth:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_dob" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Gender:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_gender" autocomplete="off" required="required">
                                                        <option selected disabled>- Select Gender -</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Permanent Address:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_permanent_address" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Current Address:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_current_address" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Password:*</label>
                                                    <input type="password" placeholder=".col-md-3" class="form-control" name="student_password" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="initial_date_ten" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="last_date_ten" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_ten_qualification" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="initial_date_plus_two" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="last_date_plus_two" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_plus_two_qualification" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="initial_date_degree" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="last_date_degree" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_degree_qualification" autocomplete="off" required="required">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <br>
                                                    <input type="submit" placeholder=".col-md-3" class="form-button" value="Submit" name="student_data_submit">
                                                </div>
                                            </form>
                                        </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- main content end -->
        <!-- footer start -->

        <?php

            include('./Borders/footer.php');

        ?>


        <!-- footer end -->

<!-- student_id 	programme_id 	course_id 	student_reg_no 	student_first_name 	student_middle_name 	student_last_name 	student_password 	student_father_name 	student_mother_name 	student_email 	student_phone_no 	student_profile_image 	student_other_phone_no 	student_gender 	student_permanent_address 	student_aadhaar_no 	student_current_address 	student_dob 	student_ten_qualification 	initial_date_ten 	last_date_ten 	student_plus_two_qualification 	initial_date_plus_two 	last_date_plus_two 	student_degree_qualification 	initial_degree_two 	last_degree_two 	student_status 	admitted_status 	approved_status -->


<!-- Student Data insertion Code -->

<?php

if (isset($_POST["student_data_submit"])) {
    
    $student_ = $_POST[''];
}

?>