<?php

    function runSql($sql){
        $conn = mysqli_connect('localhost', 'root', '');
        mysqli_set_charset($conn, 'utf8');

        mysqli_query($conn, $sql);

        mysqli_close($conn);
    }