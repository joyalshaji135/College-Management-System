<!-- Database Connection -->
<?php

include('./database/config.php');
include('./Function/display_function.php')

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
                                                        // Display_Programme();
                                                        $programme_select_query="Select * from programme_tbl";
                                                        $programme_select_main_query=mysqli_query($connection,$programme_select_query);
                                                        echo "<option selected disabled>-Select Programme-</option>";
                                                        while($programme_row=mysqli_fetch_assoc($programme_select_main_query))
                                                        {
                                                            $programme_id=$programme_row['programme_id'];
                                                            $programme_name=$programme_row['programme_name'];
                                                            echo "<option value='$programme_id'>$programme_name</option>";
                                                        }
                                                    ?>
                                                </select>
                                                </div>
                                                <div class="col-lg-3"></div>
                                                <br><br><br>
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6">
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter Course" name="course_name">
                                                </div>
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-3"></div>
                                                <div class="col-md-6 form-group">
                                                    <br>
                                                    <input type="button" placeholder=".col-md-3" class="form-button" value="Submit">
                                                </div>
                                                <div class="col-lg-3"></div>
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

include('./Borders/footer.php');

?>
 <!-- / footer -->
