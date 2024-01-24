<?php
echo "Good day, Here are the available orders! </br>";


$con= mysqli_connect('localhost','root','','kensports');
$sqlout= "SELECT * FROM  Orders;";
$execout= mysqli_query($con, $sqlout);
$n= mysqli_num_rows($execout);
for($i = 1; $i <= $n; $i++ ){
    $row= mysqli_fetch_array($execout);
    echo "
    <table border=1>
    <tr height='15px'>
    <td width= '30px'>$row[0]</td>
    <td width= '30px'>$row[1]</td>
    <td width= '30px'>$row[2]</td>
    <td width= '30px'>$row[3]</td>
    </tr>
    </table> </br>";
}

?>