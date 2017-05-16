<?php

require_once('../mysqli_connect.php');
$query = "SELECT id,result FROM user_answer";
$response = @mysqli_query($dbc, $query);
$flag = 0;

if($response)
{
    echo '<table align="left"
    cellspacing="5" cellpadding="8">
 
    <tr><td align="left"><b>ID</b></td>
    <td align="left"><b>Result</b></td></tr>';

    while($row=mysqli_fetch_array($response)) {
        echo '<tr><td align="left">' .
            $row['id'] . '</td><td align="left">' .
            $row['result'] .'</td>';
        echo '</tr>';
    }
}
?>