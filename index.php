<!-- Build a simple calculator. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href='style.css?v=1.1' rel='stylesheet'>
</head>
<body>
<h2>Kindly click <u>action</u> to choose the preferred operator</h2>
    <form action="">
        
        <input type="number" name='num1' placeholder='Enter your first number'><br><br>
        <input type="number" name='num2' placeholder='Enter your second number'><br><br>
        <select name="operator" id="" value='Action'>
            <option >Add</option>
            <option >Subtract</option>
            <option >Divide</option>
            <option >Multiply</option>
            <option >Modulus</option>
            <option selected>Action</option>
        </select>
        
        <button name='submit' value='submit-button' type='submission'>Calculate</button>
    </form>
    <h2 class='second-h2'>The calculated result is: <i>
    <?php 
        if (isset($_GET['submit'])){
            $input1 = $_GET['num1'];
            $input2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch($operator){
                case 'Action' : echo 'Kindly select an Action to perform';
            break;
                case 'Add' : echo  $input1 + $input2 ;
            break;
                case 'Subtract' : echo $input1 - $input2;
            break;
                case 'Multiply' : echo $input1 * $input2;
            break;
                case 'Divide' : echo $input1 / $input2;
            break;
                case 'Modulus' : echo $input1 % $input2;
            break;
            }
        }
    
    ?>
    </i>
    </h2>
</body>
</html>