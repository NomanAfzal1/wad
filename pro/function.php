<?php

    require "db_connection.php";

    function getCats()
    {
        global $con;
        $getCatQuery = "select * from categories";
        $getCatResult = mysqli_query($con, $getCatQuery);

        while($row = mysqli_fetch_assoc($getCatResult))
        {
           $title =  $row['cat_title'];    
            echo "<li><a class='nav-link'  href='#'> $title </a></li>";

        }
    }

    function getBrands()
    {
        global $con;
        $getBrandsQuery = "select * from Brands";
        $getBrandsResult = mysqli_query($con, $getBrandsQuery);

        while($row = mysqli_fetch_assoc($getBrandsResult))
        {
           $title =  $row['b_title'];    
            echo "<li><a class='nav-link'  href='#'> $title </a></li>";

        }
    }

    function getBrandItem()
    {
        global $con;
        $getBrandsQuery = "select * from Brands";
        $getBrandsResult = mysqli_query($con, $getBrandsQuery);

        echo "<option> Select Category </option>";
        while($row = mysqli_fetch_assoc($getBrandsResult))
        {
           $title =  $row['b_title'];    
            echo "<option> $title </option>";
        }
    }

    function getCategoryItem()
    {
        global $con;
        $getCatQuery = "select * from categories";
        $getCatResult = mysqli_query($con, $getCatQuery);
        echo "<option> Select Category </option>";
        while($row = mysqli_fetch_assoc($getCatResult))
        {
           $title =  $row['cat_title'];    
            echo "<option> $title </option>";
        }
    }

?>