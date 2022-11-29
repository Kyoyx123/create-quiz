<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit-quiz.css">
</head>
<?php



?>
<body>
    
    <form action="update_data.php" method="post">
    
    <div class="all">
    <div class="allquestion">
    <?php 
    
    // ดึงหัวข้อออกมาแสดง
    include("connectdb.php");
    $sql = "SELECT * FROM quiz";
    $result = $conn->query($sql);
    $row=mysqli_fetch_array($result);
    $conn->close();
    echo "<div class='quizname'><h1>"."<input type='text' value='$row[Quizname]' name='quizname' class='quizname2'></h1></div>";


    include('connectdb.php');
    $sql = "SELECT * FROM quiz";
    $result = mysqli_query($conn,$sql);

    // loop ข้อมูล
    while($row=mysqli_fetch_assoc($result))
    {?>
    <form action="update_data.php" method="post">
    <div class="question">
        <div style="display: flex;align-items: center; ">
            <h2 style="margin-right: 5px;">หัวข้อ</h2>
            <input type="text" value="<?php echo $row['questionname'] ?>"  name="questionname[]"  class="questionname">
            <input type="text" name="numberone" value="<?php echo $row['id'];?>" hidden>
            <input type="text" name="number[]" value="<?php echo $row['id'];?>" hidden>
            <button type="submit" style="margin-left: 10px;" name="remove">ลบข้อมูล</button>
        </div>
        <div class="question2">
            <div class="c-1" style="display: flex;align-items: center; ">
                <h4 style="margin-right: 5px;">ตัวเลือก1</h4>
                <input type="text" value="<?php echo $row['choice1'] ?>" name="c-1[]"  class="text1">
            </div>
            <div class="c-2" style="display: flex;align-items: center; ">
                <h4 style="margin-right: 5px;">ตัวเลือก2</h4>
                <input type="text" value="<?php echo $row['choice2'] ?>"  name="c-2[]"  class="text2">
            </div>
            <div class="c-3" style="display: flex;align-items: center; ">
                <h4 style="margin-right: 5px;">ตัวเลือก3</h4>
                <input type="text" value="<?php echo $row['choice3'] ?>"  name="c-3[]"  class="text3">
            </div>
            <div class="c-4" style="display: flex;align-items: center; ">
                <h4 style="margin-right: 5px;">ตัวเลือก4</h4>
                <input type="text" value="<?php echo $row['choice4'] ?>"  name="c-4[]"  class="text4">
            </div>
        </div>
        
        <div class="" style="display: flex;align-items: center; ">
            <h4 style="margin-right: 5px;">คำตอบ</h4>
            <input type="text" value="<?php echo $row['answer'] ?>"  name="answer[]"  class="answer">
        </div>
    </div>
    </form>
    <?php } ?>
    
    </div>

    <div class="sidebar">
        <div class="divright">
            <button name="submit" type="submit">บันทึกการแก้ไข</button>
            <a href="create-quiz-wang.php">
                เพิ่มข้อมูล
            </a>
        </div>
        <div class="divright">
            <a href="create-quiz-wang.php">กลับ</a>
        </div>
    </div>
    </div>
   
    </div>
    </form> 

</body>
</html>