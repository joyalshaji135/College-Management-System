<?php

function Display_Programme()
{
                global $connection;
                $programme_select_query="Select * from programme_tbl";
                $programme_select_main_query=mysqli_query($connection,$programme_select_query);
                echo "<option selected disabled>-Select Programme-</option>";
                while($programme_row=mysqli_fetch_assoc($programme_select_main_query))
                {
                    $programme_id=$programme_row['programme_id'];
                    $programme_name=$programme_row['programme_name'];
                    echo "<option value='$programme_id'>$programme_name</option>";
                }

}
?>

<option value="" style=""></option>