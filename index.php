<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Both Star Pattern</title>
    <style>
        .container{
            text-align: center;
        }
        h1{
            background-color:aqua ;
            border: 2px solid black;
            border-radius: 14px;
        }
        input[type = "submit"]{
            width: 34%;
        }
        input[type = "submit"]:active{
            background-color: red ;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Both Star Pattern</h1>
    <form method="post">
        Enter a Number of Star which You want to print - <input type="number" name = "S_num" required><br><br>
        Enter a pattern which you want to Print - <input type="text" name="pattern" placeholder="eg- Trangle, Dyamand" required><br><br>

        <input type="submit" value="Print" name = "submit">
    </div>
    </form>
    
</body>
</html>

<?php

if(isset($_POST['submit'])){

$d_num = $_POST["S_num"];
$pattern = $_POST["pattern"];


function Trangle($d_num){
    
    for ($i=0; $i <$d_num; $i++) { 
        for ($j=0; $j <$i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
}

function Diamand($d_num){
    // $d_num = $_POST["d_num"];
    // $pattern = $_POST["pattern"];

    for ($i=0; $i<=$d_num ; $i++) { 
        for ($j=0; $j <=($d_num-$i) - 1; $j++) { 
            echo "&nbsp;";
        }
    
        for ($j=0; $j <=$i; $j++) { 
            echo "*";
        }
    
        echo "<br>";
    }
    
    for ($i=$d_num; $i>=0 ; $i--){ 
        for ($j=($d_num-$i)-1; $j >=0 ; $j--) { 
            echo "&nbsp;";
        }
    
        for ($j=$i; $j >=0; $j--){ 
            echo "*";
        }
    
        echo "<br>";
    }
}

// switch ($pattern) {
//     case "Trangle":
//         Trangle($d_num);
//         break;
    
//     case "Diamand":
//         Diamand($d_num);
//         break;


//     default:
//         echo "Sorry This pattern Does Not Exist";
//         break;
// }

if($pattern == "Trangle"){
    Trangle($d_num);
}
else if($pattern == "Diamand"){
    Diamand($d_num);
}
else{
    echo "Sorry This Pattern does Not Exist";
}

echo "<br>" ;
echo "<br>" ;
echo '<marquee style = "background-color:red; color:black; "behavior="scroll" direction="right">Thanks For Visited Our Website</marquee>';
}
?>


