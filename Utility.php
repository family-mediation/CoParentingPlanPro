<?php
/*
* This function takes an array of inputs and escapes characters that may
* be harmful. In an attempt to prevent code execution attacks.
* the array is passed by reference and is modified by this function
* which applies htmlspecialchars() to all elements of the array.
* @ param inputs the array to be sanatized
* @ return none
*/
function sanitize(&$inputs)
{
    foreach ($inputs as &$value)
    {
     //   echo "<span> the value before is ". $value;
        $value = htmlspecialchars($value);   
      //  echo " and after is ". $value . "</span></br></br>";
    }
}
function cleanValOutput($varName,$default = "")
{
    if(isset($_SESSION[$varname]))
    {
        return "value='".htmlSpecialChars($_SESSION[$varName])."'";
    }
    else
    {
        return "value='".$default."'";
    }
}

?>