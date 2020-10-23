<?php

// ===== Function to generate and display username and password =====

function getUsernameAndPassword(){

    // ===== Array of usernames =====
    $usernames = ["Bubu", "Yemi", "Jibril", "Sanwo", "Adanmu"];

    // === Array of password headers =====
    $passwordHeaders = ["abc", "def", "ghi", "jkl", "mno"];

    // ===== A function to generate 3 random numbers =====
    function randomNumbers(){
        for ($i=0; $i < 3; $i++) { 
            $random = rand(100, 999);
            return $random;
        }    
    }

    // ===== Generate the default username and create new array =====
    foreach($usernames as $index => $name){
        $numberToAdd = randomNumbers(); // generate 3 random numbers
        if(strlen($name) < 6){
            $defaultUsername[$index]  = $name.$numberToAdd;
        } // if lenght of username < 6 add 3 random numbers to username 
        elseif(strlen($name) >= 6 && strlen($name) < 8){
            $defaultUsername[$index] = $name;
        } // if length of username is greater than 6 and < 8 keep username as it is
        else{
            echo "Username cannot be less than 6 or more than 8 characters";
            return;
        } // if username is > 8 echo error
    }
    
    // ===== Generate password for each header in password headers and create new array =====
    foreach($passwordHeaders as $index => $header){
        $numberToAdd = randomNumbers();
        $password = $header.$numberToAdd.$header;
        $passwords[$index] = $password;
    }
    
    // ===== Display generated username and password to screen =====
    for ($i=0; $i < count($defaultUsername); $i++) { 
        echo "<h3>username : {$defaultUsername[$i]} <br/> password : {$passwords[$i]}</h3>";
    }
    return;
}

// ==== Call the function ====
getUsernameAndPassword();


?>
