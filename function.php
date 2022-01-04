<?php

// koneksi 
    $con = mysqli_connect("localhost","root","","ssve");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    };

//function query
    function query($datas) {
        global $con;
        $result = mysqli_query($con, $datas); 
        $datakosong = [];
    
        while( $isidata = mysqli_fetch_assoc($result)) {
            $datakosong[] = $isidata;
        }
    
        return $datakosong; 
    };

// function cari 
    function cari($keyword){
        $query = "SELECT * FROM test_pilot WHERE title LIKE '%$keyword%' OR genre LIKE '%$keyword%'";

        return query($query);

    };

?>