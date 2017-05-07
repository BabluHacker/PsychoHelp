<?php

require_once('../mysqli_connect.php');
$query = "SELECT fname,email FROM user_info";
$response = @mysqli_query($dbc, $query);
$flag = 0;

if($response) {
    echo '<table align="left"
    cellspacing="5" cellpadding="8">
 
    <tr><td align="left"><b>Name</b></td>
    <td align="left"><b>Email</b></td>
    <td align="left"><b> Evaluation</b></td>
    <td align="left"><b> Feedback</b></td>
    <td align="left"><b> Scale before</b></td>
    <td align="left"><b> Scale after</b></td></tr>';

    while ($row = mysqli_fetch_array($response)) {
        $_email = $row["email"];
        // echo $_email;

        $query1 = "SELECT * FROM user_result Where email = '$_email'";
        $response1 = @mysqli_query($dbc, $query1);
        if ($response1) {

            while ($row1 = mysqli_fetch_array($response1))
            {
                echo '<tr><td align="left">' .
                    $row['fname'] . '</td><td align="left">' .
                    $row['email'] . '</td><td align="left">' .

                    /*  echo '<tr><td align="left">' .
                          $row['fname'] . '</td><td align="left">' .
                          $row['email'] . '</td><td align="left">' .*/

                    $row1['result'] . '</td><td align="left">' .
                    $row1['feedback'] . '</td><td align="left">' .
                    $row1['ret1'] . '</td><td align="left">' .
                    $row1['ret2'] . '</td><td align="left">' .
                    '</tr>';

            }

        } else echo mysqli_error($dbc);
    }

}
?>