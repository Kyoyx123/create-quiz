<?php
include('connectdb.php');
session_start();


    if(ISSET($_POST['submit'])){
        foreach($_POST['questionname'] as $key => $value){
                $quizname = $_POST['quizname'];
                $questionname = $value;
                $choice1 = $_POST['c-1'][$key];
                $choice2 = $_POST['c-2'][$key];
                $choice3 = $_POST['c-3'][$key];
                $choice4 = $_POST['c-4'][$key];
                $answer = $_POST['answer'][$key];
                $number = $_POST['number'][$key];
                // echo $number;

            if($quizname != "" && $questionname != "" && $choice1 != "" && $choice2 != "" && $choice3 != "" && $choice4 != "" && $answer != "")
                $sql = "UPDATE quiz SET Quizname='$quizname', questionname='$questionname', choice1 = '$choice1' , choice2 = '$choice2' , choice3 = '$choice3' , choice4 = '$choice4' , answer = '$answer' WHERE id='$number'";
			if ($conn->query($sql) === TRUE) {
			echo "New record created successfully"."<br>";
            header('location:test-quiz.php');
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
        }
    }
    if(ISSET($_POST['remove'])){
        $number1 = $_POST['numberone'];
            // echo $number1;
        $sql = "SELECT COUNT('questionname') AS questioncount FROM quiz";
        $result = $conn->query($sql);
        $row=mysqli_fetch_array($result);
        
        echo $row["questioncount"];
        if($row["questioncount"] > 1){
            $sql = "DELETE FROM quiz WHERE id = '$number1'";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully"."<br>";
                header('location:edit-quiz.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
            header('location:edit-quiz.php');
        }

    }
    $conn->close();
?>  