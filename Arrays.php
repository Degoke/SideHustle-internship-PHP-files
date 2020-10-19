<?php
// ------ Arrays ------
echo "<h1>PHP ARRAYS</h1>";

echo "PHP arrays and examples";


// ------ Numeric Arrays ------
echo "<h2>NUMERIC ARRAYS</h2>";

$user = array("Goke", "Deji", "Molo", "Bolaji");

// ------ Display array contents ------
echo "$user[0] <br>";
echo "$user[1] <br>";
echo "$user[2] <br>";
echo "$user[3] <br>";


// ------ Associative Arrays ------
echo "<h2>ASSOCIATIVE ARRAYS</h2>";

$userInfo = array(
                "username" => "Goke",
                "password" => "Goke's Password",
                "email" => "goke@goke.com"
);

// ------ Display the user Info ----
echo "$user[0]'s info is; <br> username: ".$userInfo["username"]." 
      <br>password: ".$userInfo["password"]." 
      <br>email: ".$userInfo["email"];


      // ----- Multi-dimenssional arrays ------
echo "<h2>MULTI_DIMENSIONAL ARRAYS</h2>";

$users = array(
            "Goke" => array(
                "username" => "Goke",
                "password" => "Goke's Password",
                "email" => "goke@goke.com"
            ),
            "Deji" => array(
                "username" => "Deji",
                "password" => "Deji's Password",
                "email" => "deji@deji.com"
            )
);

// ------ Display a user ------
echo $user[1].'s details are; <br>
     username: '.$users["Deji"]["username"].'<br>
     password: '.$users["Deji"]["password"].'<br>
     email: '.$users["Deji"]["email"]
     ;




?>

