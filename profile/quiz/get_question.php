<?php
    $idx = 0;
    $dbname = "quiz";
    $question;$op1;$op2;$op3;$answer;$sent="";$w1;$w2;$w3;
    require_once('../mysqli_connect.php');

    $query = "SELECT * from $dbname ";
    $response = @mysqli_query($dbc, $query);

    if ($response) {
        while ($row = mysqli_fetch_array($response)) {

            $question[$idx] = $row['quiz'];

            $op1[$idx] = $row['option1'];
            $op2[$idx] = $row['option2'];
            $op3[$idx] = $row['option3'];
            $answer[$idx] = $row['weight'];
            $w1[$idx] = $row['wop1'];
            $w2[$idx] = $row['wop2'];
            $w3[$idx] = $row['wop3'];
            //$sent=$sent.$question[$idx].";".$op1[$idx].";".$op2[$idx].";".$op3[$idx].";".$answer[$idx]."#"
            $idx++;

        }
         $arr=array('q' =>$question,'w1'=>$w1,'w2'=>$w2,'w3'=>$w3,'op1'=>$op1,'op2'=>$op2,'op3'=>$op3,'ans'=>$answer,'count'=>$idx);
        $json = json_encode($arr);
        echo $json;


    }


?>
