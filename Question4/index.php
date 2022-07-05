<?php

include_once("dbconnection.php");

?>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="datatables.js"></script>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Country.</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $query = "SELECT * from myTable";

       if($result = mysqli_query($conn, $query))
       {
          if(mysqli_num_rows($result) > 0)
          {
            while ($row = mysqli_fetch_array($result)){ ?>
            <tr>
        <td><?php echo strtoupper(htmlentities($row['name'])) ?></td>
        <td><?php echo htmlentities($row['phone']) ?></td>
        <td><?php echo htmlentities($row['email']) ?></td>
        <td><?php echo htmlentities($row['country']) ?></td>
        </tr>
            <?php }?>
          </tbody> 
            <?php } else { echo "No record found"; }?> 
     <?php } else {
         die("Database query failed. ". mysqli_error($connection));
     } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Country.</th>
            </tr>
        </tfoot>
    </table>

    
