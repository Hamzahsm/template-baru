<?php

// koneksi 
// $con = mysqli_connect("localhost","root","","ssve");
$con = mysqli_connect("localhost", "u705028021_templatepilot", "templatepilot123NEW", "u705028021_templatepilot");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

//function query 
function query($datas)
{
    global $con;
    $result = mysqli_query($con, $datas);
    $datakosong = [];

    while ($isidata = mysqli_fetch_assoc($result)) {
        $datakosong[] = $isidata;
    }

    return $datakosong;
};

// function cari 
function cari($keyword)
{
    $query = "SELECT * FROM pilot_posts WHERE title LIKE '%$keyword%' OR category LIKE '%$keyword%'";

    return query($query);
};
