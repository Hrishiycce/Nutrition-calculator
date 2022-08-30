<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
    <link rel="stylesheet" href="indexcopy.css">
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "fruits");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $fruit =  $_REQUEST['fruit'];
        $grams = $_REQUEST['grams'];
      
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO nutcal  VALUES ('$fruit',
            '$grams')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                ;
 
            echo nl2br("\n$fruit\n $grams\n "
               );
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>

<div class="container"><button  class="btn btn-info" type="submit"  onclick="location.href='http://localhost/demoo/stable.php'">Show my previous Nutritive Value Table</button></div>
<div class="container"><button class="btn btn-info" onclick="history.back()">TO SEE THE NUTRITIONAL INTAKE</button></div>

    </center>
</body>
 
</html>