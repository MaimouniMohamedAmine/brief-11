<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="config.php" method="post">
        <label for="">Ancienne facture</label>
        <input type="text" name="ancientIndex">
        <label for="">Nouvelle facture</label>
        <input type="text"name="nouveauIndex">
        <button name="btn">Estimer</button>
    </form>
    <table>
        <th></th>
        <th></th>

    </table>
</body>
</html>

<?php
if(isset($_POST["btn"])){
    $val = $_POST["ancientIndex"];
    $val2 =$_POST["nouveauIndex"];
   
    class Total{
        public $number1; 
        public $number2;
        function __construct($number1,$number2){
            $this -> number1 = $number1;
            $this -> number2 = $number2;  
        }
        function message(){
            return ($this -> number2 - $this -> number1) * 0.883;
        }
    }
    $calcule = new Total($val,$val2);
    print $calcule -> message();
}
?>