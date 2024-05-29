<?php

function Display_Course()
{
    global $connection;
                $course_select_query="Select * from category_tbl";
                $course_result_query=mysqli_query($connection,$course_select_query);
                while($category_row=mysqli_fetch_assoc($course_result_query))
                {
                    $category_name=$category_row['category_name'];
                    $category_id=$category_row['category_id'];
                   echo "<option value='$category_id'>$category_name</option>";
                }

}
?>