<?php

include('./database/config.php');

                $course_select_query = "select * from course_tbl where programme_id='".$_POST['course_ID']."'order by course_name";
                $course_select_main_query = mysqli_query($connection,$course_select_query);
                echo "<option selected disabled>-Select Programme-</option>";
                while($course_row=mysqli_fetch_assoc($course_select_main_query))
                {
                    $course_id = $course_row['course_id'];
                    $course_name = $course_row['course_name'];
                    echo "<option value='$course_id'>$course_name</option>";
                }

?>