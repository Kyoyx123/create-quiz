<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test-quiz.css">
</head>
<?php



?>
<body>
    
    
    <div class="all">
    <div class="allquestion">
    <?php 
    
    // ดึงหัวข้อออกมาแสดง
    include("connectdb.php");
    $sql = "SELECT * FROM quiz";
    $result = $conn->query($sql);
    $row=mysqli_fetch_array($result);
    $conn->close();
    echo "<div class='quizname'><h1>".$row['Quizname']."</h1></div>";


    include('connectdb.php');
    $sql = "SELECT * FROM quiz";
    $result = mysqli_query($conn,$sql);

    // loop ข้อมูล
    while($row=mysqli_fetch_assoc($result))
    {?>
    <div class="question">
        <h2><?php echo $row['questionname'] ?></h2>
        <div class="question2">
            <div class="c-1">
                <input type="radio" value="" name="<?php echo $row['questionname'] ?>" class="radio1">
                <input type="text" value="<?php echo $row['choice1'] ?>" disabled class="text1">
            </div>
            <div class="c-2">
                <input type="radio" value="" name="<?php echo $row['questionname'] ?>" class="radio2">
                <input type="text" value="<?php echo $row['choice2'] ?>" disabled class="text2">
            </div>
            <div class="c-3">
                <input type="radio" value="" name="<?php echo $row['questionname'] ?>" class="radio3">
                <input type="text" value="<?php echo $row['choice3'] ?>" disabled class="text3">
            </div>
            <div class="c-4">
                <input type="radio" value="" name="<?php echo $row['questionname'] ?>" class="radio4">
                <input type="text" value="<?php echo $row['choice4'] ?>" disabled class="text4">
            </div>
        </div>
        
        <h2>คำตอบ <?php echo $row['answer'] ?></h2>
    </div>
    <?php } ?>

    
    </div>


    <div class="sidebar">
        <div class="divright">
            <a href="edit-quiz.php">แก้ไขข้อมูล</a>
        </div>
        <div class="divright">
            <a>แก้ไขข้อมูล</a>
        </div>
        <div class="divright">
            <a>แก้ไขข้อมูล</a>
        </div>
        <div class="divright">
            <a>แก้ไขข้อมูล</a>
        </div>
        <div class="divright">
            <a>แก้ไขข้อมูล</a>
        </div>
        <div class="divright">
            <a href="create-quiz-wang.php">กลับ</a>
        </div>
    </div>
    </div>
    

</body>
</html>