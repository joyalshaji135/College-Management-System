<!-- Database Connection -->
<?php

include("./database/config.php");

?>
<!-- Database Connection -->
<!--header start-->
<?php

include("./Borders/header.php");

?>
<!--header end-->
<!--sidebar start-->
<?php

include("./Borders/side_bar.php");

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
                                            <u><b>Add Staff Details</b></u>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <form action="" method="post">
                                            <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff First Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff Middle Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff Last Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Father Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Mother Name:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff ID Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff Email:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Other Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Guardian Phone Number:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Guardian Email:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Position :*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;">
                                                        <option selected disabled>- Select Course -</option>
                                                        <option>Student</option>
                                                        <option>Teacher</option>
                                                        <option>Staff</option>
                                                        <option>Principal</option>
                                                        <option>Librarian</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Profile Photo:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Staff Status:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;">
                                                        <option selected disabled>- Applicant Status -</option>
                                                        <option>Admitted</option>
                                                        <option>Not Admitted</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Application Status:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;">
                                                        <option selected disabled>- Application Status -</option>
                                                        <option>Approved</option>
                                                        <option>Not Approved</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Aadhaar Card No:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Date of Birth:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Gender:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;">
                                                        <option selected disabled>- Select Gender -</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Permanent Address:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Current Address:*</label>
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Class Teacher ID:*</label>
                                                    <select class="form-control m-bot15" style="text-align: center;">
                                                        <option selected disabled>- Teachers ID -</option>
                                                        <option>Teacher-1</option>
                                                        <option>Teacher-2</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">10<sup>th</sup> Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">11<sup>th</sup> & 12<sup>th</sup> Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Present Degree Course / Started:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Present Course / Ended:*</label>
                                                    <input type="date" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="exampleInputEmail1">Present Course / Certificate:*</label>
                                                    <input type="file" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <br>
                                                    <input type="button" placeholder=".col-md-3" class="form-button" value="Submit">
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

<!-- footer -->
<?php

include("./Borders/footer.php");

?>
<!-- / footer -->
