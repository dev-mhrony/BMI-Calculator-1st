
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CODE4EXAMPLE </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
 
	<body>


    <?php
 
if($_POST!=null)
{
    $h=empty($_POST["height"]) ? 0 : $_POST["height"];
    $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $index =0;
    if($h !=0 && $w !=0)
        $index = round($w/($h*$h)* 703,2);
 
    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="underweight - BMI : " . $index;
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25) {
        $bmi="normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
        $bmi="overweight - BMI : " . $index;  
        $bmiStyle="alert alert-warning";
    } else {
        $bmi="obese - BMI : " .$index;  
        $bmiStyle="alert alert-danger";
    }
}
 
?>



        <div class="container">
            <h1>PHP BODY MASS INDEX Calculator (BMI)</h1>
            <form method="post">
                <div class="form-group">
                  <label for="height">Please Enter your Height in Inches :</label>
                  <input type="text" class="form-control" name="height" placeholder="Type Your Hight">
                </div>
                <div class="form-group">
                  <label for="weight">Please Enter your weight in Pounds :</label>
                  <input type="text" class="form-control"  name="weight" placeholder="Type Your Weight">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Calculate</button>
                </div>
              </form>
              <div class="<?=$bmiStyle?>" role="alert" id="bmi">
                <?php 
                echo $bmi;
                ?>
            </div>
          </div>  
    
   
</body>
</html>