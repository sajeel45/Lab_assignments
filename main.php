<?php
$email = $_POST['email'];
$password = $_POST['pwd'];
$radio = $_POST['radio'];
echo "Question 1";
echo "<br>";

if($email!="" || $password!="")
{
    echo "Email: "; 
    echo $_POST["email"];
    echo "<br>";
    echo "Password: "; 
    echo $_POST["pwd"];
    echo "<br>";
}
else
{
    echo "Error";
}
echo "Question 2";
echo "<br>";
echo "You have Selected: ". $_POST['radio'];
echo "<br>";
echo "Question 3";
echo "<br>";
if(isset($_POST['checkbox']) && $_POST['checkbox']!=""){
    echo "True"; 
    
}
else
    {
        echo "False";
    }
    echo "<br>";
echo "Question 4";
echo "<br>";
$arr = array('2','3','4');
function sorting($arr , $str){
    if($str == "ASC")
    {
        asort($arr);
        echo "Ascending Sort:<br> ";
        foreach($arr as $ascendarray)
        {
            echo $ascendarray;
            echo "<br>"; 
        }
        
    }
    else if($str == "DESC")
    {
        rsort($arr);
        echo "Descending Sort:<br> ";
        echo "<br>";
        foreach($arr as $descendarray)
        {
            echo $descendarray;
            echo "<br>"; 
        }
        
    }
    
}
sorting($arr , "DESC");
echo "<br>";
echo "Question 5,6";
echo "<br>";

if($radio == "Radio 1"){
    $array = range(0,100);
    shuffle($array);
    $random_keys = array_slice($array,0,100);
    sorting($random_keys,'ASC');
    }
   
    else if($radio == "Radio 2")
    {
        $array = range(0,100);
        shuffle($array);
        $random_keys = array_slice($array,0,100);
        print_r($random_keys);
        echo "<br>";
        sorting($random_keys,"DESC");
        
        
    }
    else 
    return "";


