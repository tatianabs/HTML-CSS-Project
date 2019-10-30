<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="astro.css"/>
    </head>
    <body>
        <div id="header">
            <?php
            include ('header.php');
            
            ?>

              <?php
include_once('connexion.php');
$query= "select * from products";
$result= $conn->query($query);

if(!$result)die('Database access failed');    ?>


            <?php 
            if ($result->num_rows > 0) 
    {
    echo '<table id="products1" ><th>idproduct</th><th>Description</th><th>Price</th>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["idproduct"]. "</td><td>" . $row["description"]. "</td><td> " . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

            ?>  

           <?php include('footer.php');?> 
         
      </div>
    </body>
</html>



   
