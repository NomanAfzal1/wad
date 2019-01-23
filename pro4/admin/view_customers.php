<div class="row">
    <div class="col-sm-12">
        <h1>customers</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">image</th>
                <th scope="col">Email</th>
                <th scope="col">PhoneNo</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_cust = "select * from customers";
            $run_cust = mysqli_query($con,$get_cust);
            $count_cust = mysqli_num_rows($run_cust);
            if($count_cust==0){
                echo "<h2> No customer found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_cust = mysqli_fetch_array($run_cust)) {
                    $cust_name = $row_cust['cust_name'];
                    $cust_image = $row_cust['cust_image'];
                    $cust_email = $row_cust['cust_email'];
                    $cust_contact = $row_cust['cust_contact'];
                    $cust_address = $row_cust['cust_address'];
                    $cust_city = $row_cust['cust_city'];
                    $cust_country = $row_cust['cust_country'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <th scope="row"><?php echo $cust_name; ?></th>
                        <td><img class="img-thumbnail" src='customer_images/<?php echo $cust_image;?>' width='80' height='80'></td>
                        <th scope="row"><?php echo $cust_email; ?></th>
                        <th scope="row"><?php echo $cust_contact; ?></th>
                        <th scope="row"><?php echo $cust_address; ?></th>
                        <th scope="row"><?php echo $cust_city; ?></th>
                        <th scope="row"><?php echo $cust_country; ?></th>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>