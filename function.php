<?php
 
 include 'mysql.php';


 ?>




<?php

function myfunction( $num1,$num2,$num3 = 5){


    $answer = $num1 * $num2 * $num3 ;

   return $answer;
}
 echo  myfunction(3,4);





 

 $insert_data=mysqli_query($db_connect, "INSERT INTO benstable(id,name,age,hobbies)VALUES('001','bengas','77','football')");


// if ($insert_data) {
//     echo " Data connected";
// } else {
//     echo "restricted";
// }
?>