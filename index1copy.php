<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="indexcopy.css">
</head>
<body style="background-image: url('https://img.freepik.com/premium-photo/healthy-food-background-autumn-fresh-vegetables-dark-stone-table-with-copy-space-top-view_127032-1954.jpg?w=2000') " >
    <center><h1 class=" headings">Nutrition Calculator</h1></center>
    <form action="phps.php" method="post">
    <marquee bgcolor="Yellow" behavior="scroll" direction=""><h2 class="text">Know how much nutrition you intake from the fruits you eat!!</h2></marquee>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="fname">
                    <label for="fruitname" class="select">Select the Fruit: </label>
                    <select name="fruit" id="fruitname">
                        <option selected>--select--</option>
                    </select>
                </div>
                <div class="gram">
                    <label for="grams" class="select">How much amount of fruit has consumed <small>(in grams)</small>: </label>
                    <input type="text" name="grams" value id="grams" placeholder="eg: 50 or 100">
                </div>
                <button class="btn btn-info" type="submit" id="search"> Calculate</button>
            </div>
            
            <BUTTon><a href="http://localhost/demoo/stable.php">YOUR PREVIOUS NUTRITIONAL CONSUMPTION</a></BUTTon>
        </div>
        </form>
        <div class="nutrijs">
      <script src="indexscriptcopy.js"></script>  
    </div>
    </div> 


   
    
    
   
</body>
</html>