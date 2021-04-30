<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<section class="jobs-page content-start">

<div class="container">

    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                           <th>Company ID</th>
                            <th><b>Company name</b> </th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Target</th>
                        </tr>
                    </thead>
<?php

//$id = $_SESSION['logged_in_user_id'];
    $select = "
    SELECT
	  company_id,
	  company_name,
      company_email,
      company_phone,
      company_city,
      company_country,
      company_target
    FROM companies";

    $result = mysqli_query($myconn, $select);
    // $data = mysqli_fetch_array($result);
    while ($data = mysqli_fetch_array($result)) {
?>
                    <tbody>
                        <tr>
                            <td><?php echo ($data['company_id']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_name']); ?></P></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_email']); ?></P></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_phone']); ?></P></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_city']); ?></P></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_country']); ?></P></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_target']); ?></P></td>
                            
                        </tr>
                    </tbody>
                   
                    <?php
        }
        
    ?>

    <tfoot>
 
                            <td><b>Total Companies</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php
               $rows = mysqli_num_rows($result);
              echo $rows ?></td>
                        </tr>
        
    
        </tfoot>   
        </table>   
              
	
</div>
</section>