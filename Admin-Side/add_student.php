
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
                                            <u><b>Add Student Details</b></u>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <form action="" method="post">
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant First Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Middle Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_middle_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Last Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_last_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Father Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_father_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Mother Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_mother_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Student Roll Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_roll_no">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Email:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_email">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_phone_no">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Guardian Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_other_phone_np">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Guardian Email:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_email">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree which you want?:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="programme_id">
                                                        <option selected disabled>- Select Degree -</option>
                                                        <option>Post Graduation</option>
                                                        <option>Under Graduation</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Select Course :*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="course_id">
                                                        <option selected disabled>- Select Course -</option>
                                                        <option>BCA</option>
                                                        <option>Bsc - computer science</option>
                                                        <option>Bsc - cyber</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Profile Photo:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_profile">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Applicant Status:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_status">
                                                        <option selected disabled>- Applicant Status -</option>
                                                        <option>Admitted</option>
                                                        <option>Not Admitted</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Application Status:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_first_name">
                                                        <option selected disabled>- Application Status -</option>
                                                        <option>Approved</option>
                                                        <option>Not Approved</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Aadhaar Card No:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Date of Birth:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Gender:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_first_name">
                                                        <option selected disabled>- Select Gender -</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Permanent Address:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Current Address:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Class Teacher ID:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;" name="student_first_name">
                                                        <option selected disabled>- Teachers ID -</option>
                                                        <option>Teacher-1</option>
                                                        <option>Teacher-2</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Degree Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control" name="student_first_name">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <br>
                                                    <input type="submit" placeholder=".col-md-3" class="form-button" value="Submit" name="student_first_name">
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