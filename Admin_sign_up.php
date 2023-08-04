
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Fixed table header</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<section>
    <!--for demo wrap-->
    <h1>PARKING SPACE ALLOCATION</h1>
    <div class="tbl-header">
        <table >
            <tr>
                <th>NAME</th>
                <th>REGISTRATION</th>
                <th>MAKE</th>
                <th>TIME IN</th>
                <th>CONTACT</th>
                <th>SLOT</th>
            </tr>
            <?php
            //connect to the database
            $connection = mysqli_connect("localhost","root","","assignment");
            //select query
            $select_query = "SELECT * FROM `slots` WHERE 1";
            //Write the query to execute the fetching
            $data = mysqli_query($connection,$select_query);
            //Loop through the data as you display them one by one
            while ($row = mysqli_fetch_assoc($data)){
                extract($row);
                // Start printing data which is now available on $names same as the column names in the database table
                
                echo "
                       <td>$name</td>
                       <td>$registration</td>
                       <td>$make</td>
                       <td>$time_in</td>
                       <td>$contact</td>
                       <td>$slot</td>
                        </tr>
                    ";
            }
            ?>
        </table>
    </div>
</section>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>

