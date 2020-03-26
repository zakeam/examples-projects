<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 
        <form>
            <input type='text' name='number1' placeholder='Number1' value="<?php if(isset ($_GET['submit'])) echo $_GET['number1'];?>">
            <input type='text' name='number2' placeholder='Number2' value="<?php if (isset($_GET['submit'])) echo $_GET['number2'];?>">
            <select name="operator">
                <option><b>None</b></option>
                <option><b>+</b></option>
                <option><b>-</b></option>
                <option><b>*</b></option>
                <option><b>/</b></option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>
        <p>The answer is:</p>
                <?php
if (isset($_GET['submit'])) 
{
     $number1=$_GET['number1'];
     $number2=$_GET['number2'];
     $operator=$_GET['operator'];
     switch($operator){
         case 'None': echo 'You need to select an operator';break;
         case '+': echo $number1+$number2;break;
         case '-': echo $number1-$number2;break;
         case '*': echo $number1*$number2;break;
         case '/': if($number2==0) echo "You can;t divide with 0";else echo $number1/$number2;break;
         
     }
}
?>

           </body>
</html>
