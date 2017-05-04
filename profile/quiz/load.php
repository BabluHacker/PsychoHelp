<?php


/*/include("groupwindow.php");
$gname = $_SESSION["dbname"];
$dbname =trim($_SESSION["dbname"]);
$dbname = "quiz".$dbname;
 $mid =  $_GET["setter"];*/
if(isset($_GET['submit']))
{

     require_once('../mysqli_connect.php');
       /* $tempq = "SELECT id FROM $dbname";
        $resp = @mysqli_query($dbc, $tempq);
        $id=0;
        if($resp)
        {
            $prv_id=0;
            while($rw=mysqli_fetch_array($resp))
            {
                $id=$rw['id'];
            }
        }
        $id++;*/

    $dbname = "quiz";

    for($idx = 1 ; $idx <= 20 ; $idx++)
    {

        $q = "Question".$idx;
        $option1 = "Option1".$idx;
        $option2 = "Option2".$idx;
        $option3 = "Option3".$idx;

        $wop1 = "wop1".$idx;
        $wop2 = "wop2".$idx;
        $wop3 = "wop3".$idx;


        $answer = "Answer0".$idx;
        //echo $answer;
        $n="";
        if(!($ques= @$_GET[$q]))
            break;
        $op1= @$_GET[$option1];
        $op2= @$_GET[$option2];
        $op3= @$_GET[$option3];

        $w1= @$_GET[$wop1];
        $w2= @$_GET[$wop2];
        $w3= @$_GET[$wop3];

        $answer= intval($_GET[$answer]);
       // $topic= @$_GET['topic'];
        $date = date("y-m-d");
     // echo $ques ." ".$op1." ".$op2." ".$op3;
    //echo $id."<br> ".$topic." <br>".$ques."<br> ".$op1."<br>".$op2."<br>".$op3."<br> ".$mid." ".$date." ".$answer." ".$dl;


        $query = "INSERT INTO $dbname (quiz,option1,option2,option3,weight,wop1,wop2,wop3,date) VALUES (?,?,?,?,?,?,?,?,?)";


        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "sssssssss", $ques,$op1,$op2,$op3,$answer,$w1,$w2,$w3,$date);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);



        if( $affected_rows)
            echo "Succesfully inserted\n";
        else
            mysqli_error($dbc);



    }

 	echo "<form action = 'quiz.php' method='GET'>";
	echo "<input type='submit' name='submit' value = 'Upload Another Set of Quiz' >";

}

?>

