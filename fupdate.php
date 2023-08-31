<?php
  include("config.php");
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $s_bus_num= $_POST['busnum'];
    $s_from = $_POST['from'];
    $s_to = $_POST['to'];
    $s_artime = $_POST['artime'];
    $s_depttime = $_POST['depttime'];
    $s_date = $_POST['date'];
    $s_status = $_POST['status'];
    $s_current_loc = $_POST['current_loc'];


     $qry= mysqli_query( $con,"UPDATE bus_update.info SET i_from='$s_from', i_to ='$s_to', i_ar_time='$s_artime', i_dept_time='$s_depttime', i_date='$s_date', i_status='$s_status' , i_current_loc='$s_current_loc' WHERE info.i_bus_num ='$s_bus_num' ");

    if($qry == true)
    {
        echo "updated";
        header("location:update.php");
     
    }
    else
    {
        echo "not".mysqli_error();
    }
  }
  else
  {
      echo "not post";
  }

?>