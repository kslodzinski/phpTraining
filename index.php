<html>

<head>
    <title>PHP Calc</title>
    <link href="style.css" rel="stylesheet">

</head>

<body>

<div class="container">
   
   <form>

        <input type="text" name="num1" placeholder="Number1">
        <input type="text" name="num2" placeholder="Number2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>

        <p style="color: lime">The answerasdas is: </p>
   </form>

    

    </div>

   <?php

        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                echo "You need to select a method!";
                break;

                case "Add":
                echo $result1 + $result2;
                break;

                case "Subtract":
                echo $result1 - $result2;
                break;

                case "Multiply":
                echo $result1 * $result2;
                break;

                case "Divide":
                echo $result1 / $result2;
                break;
            }
        }
        
    
   ?>
  
</body>

</html>