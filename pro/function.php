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
            echo "<li><a value='nav-link'  href='#'> $title </a></li>";

        }
    }

    function getBrands()
    {
        global $con;
        $getBrandsQuery = "select * from Brands";
        $getBrandsResult = mysqli_query($con, $getBrandsQuery);

        while($row = mysqli_fetch_assoc($getBrandsResult))
        {
           $title =  $row['brand_title'];    
            echo "<li><a value='nav-link'  href='#'> $title </a></li>";

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
           $title =  $row['brand_title'];    
            echo "<option name='$pro_cat'> $title </option>";
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
            echo "<option name='$pro_brand'> $title </option>";
        }
    }

    function getData()
    {
        global $con;
        $getproQuery = "select * from products";
        $getproResult = mysqli_query($con, $getproQuery);
    
        while($row = mysqli_fetch_assoc($getproResult))
        {
           $title =  $row['pro_title'];    
            echo "<br> $title </br>";

            $title =  $row['pro_cat'];   
            echo "<br> $title </br>";

            $title =  $row['pro_brand'];   
            echo "<br> $title </br>";

            $title =  $row['pro_price'];  
            echo "<br> $title </br>";

            $title =  $row['pro_desc']; 
            echo "<br> $title </br>";

            $title =  $row['pro_keywords']; 
            echo "<br> $title </br>";     
        }
    }

?>