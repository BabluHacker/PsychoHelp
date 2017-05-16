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

    $dbname = "dummy";

    for($idx = 1 ; $idx <= 36 ; $idx++)
    {
        $ques;
        $q = "Question".$idx;
        $ques= $_GET[$q];
       /* $option1 = "Option1".$idx;
        $option2 = "Option2".$idx;
        $option3 = "Option3".$idx;

        $wop1 = "wop1".$idx;
        $wop2 = "wop2".$idx;
        $wop3 = "wop3".$idx;


        $answer = "Answer0".$idx;
        //echo $answer;
        $n="";

        $op1= @$_GET[$option1];
        $op2= @$_GET[$option2];
        $op3= @$_GET[$option3];

        $w1= @$_GET[$wop1];
        $w2= @$_GET[$wop2];
        $w3= @$_GET[$wop3];

        $answer= intval($_GET[$answer]);
       // $topic= @$_GET['topic'];

     // echo $ques ." ".$op1." ".$op2." ".$op3;
    //echo $id."<br> ".$topic." <br>".$ques."<br> ".$op1."<br>".$op2."<br>".$op3."<br> ".$mid." ".$date." ".$answer." ".$dl;
*/
        if(!$ques)
            break;

        $date = date("y-m-d");

        $query = "INSERT INTO $dbname (quiz,date) VALUES (?,?)";


        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "ss", $ques,$date);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);



        if( $affected_rows) {
            echo "Succesfully inserted\n";
        }
        else {
            //mysqli_error($dbc);
            echo mysqli_error($dbc);
        }



    }

 	echo "<form action = 'quiz.php' method='GET'>";
	echo "<input type='submit' name='submit' value = 'Upload Another Set of Quiz' >";

}

?>

