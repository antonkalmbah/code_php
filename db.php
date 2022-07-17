<?php

    // dont work
    $con = mysqli_connect("localhost", "root", "", "beeline");
    $p = 'SELECT * FROM `db`';

    $p_con = mysqli_query($con, $p);

    // echo $p;

?>