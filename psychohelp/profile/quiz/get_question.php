<?php
    $idx = 0;
    $var = $_GET["flag"];
    $dbname;
    if($var==1) {
        $dbname = "quiz";
    }

if($var==2) {
    $dbname = "quiz_depression";
}
    $question;$sent="";
    require_once('../mysqli_connect.php');


    $query = "SELECT * from $dbname ";
    $response = @mysqli_query($dbc, $query);

    if ($response) {
        while ($row = mysqli_fetch_array($response)) {

            $question[$idx] = $row['quiz'];


            $idx++;

        }
         $arr=array('q' =>$question,'count'=>$idx);
        $json = json_encode($arr);
        echo $json;


    }


?>
