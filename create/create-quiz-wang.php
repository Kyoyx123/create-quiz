<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="create-quiz-wang.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    /* Full-width input fields */
.addinput {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.add {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.add-cancel {
  background-color: #e74c3c;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

nav button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.custom-select {
  position: relative;
  font-family: Arial;

}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.class-left{
    width: 35%;
    height: 100%;
    /* background-color: red; */
}
.class-left-right{
    width: 100%;
    height: 100%;
    /* background-color: pink; */
    display: flex;
}
.class-right{
    display: flex;
}


</style>
<body>
    <nav>
        <div class="left">
            <h1>quiz</h1> 
        </div>

        <div class="right">
            <button onclick="document.getElementById('id01').style.display='block'" class="add-question" style="margin-right: 10px;">เพิ่มคำถาม</button>
            <button onclick="document.getElementById('id02').style.display='block'" class="quit" style="margin-right: 10px;">ลบคำถาม</button>
            <button onclick="document.getElementById('id03').style.display='block'" class="add-student" style="margin-right: 10px;">ห้องเรียน</button>
            
            
            <a href="create-quiz.php" style="margin-right: 10px;" class="quit">ออก</a>
        </div>

    </nav>
    <form action="check-quiz-wang.php" method="POST">
    <div class="header">
        <input type="text" value="" name="quizname" placeholder="ชื่อแบบทดสอบ" required>
    </div>
    <form action="" method="post">
    <div id="allquestion">
        <div class="content" id="">
            <div class="question">
                <div style="margin: 0 10px;">
                    <input type="text" name="questionname[]" id="" value="" placeholder="ชื่อคำถาม" style="width: 100%;" required>
                </div>
                <div class="c-1" >
                    <div class="radio">
                        <P>1</P>
                    </div>
                    <input type="text" value="" name="c-1[]" placeholder="คำถามที่ 1" width="90%" required>
                </div>
                <div class="c-2">
                    <div class="radio">
                    <P>2</P>
                    </div>
                    <input type="text" value="" name="c-2[]" placeholder="คำถามที่ 2" required>
                </div>
                <div class="c-3">
                    <div class="radio">
                    <P>3</P>
                    </div>
                    <input type="text" value="" name="c-3[]" placeholder="คำถามที่ 3" required>
                </div>
                <div class="c-4">
                    <div class="radio">
                    <P>4</P>
                    </div>
                    <input type="text" value="" name="c-4[]" placeholder="คำถามที่ 4" required>
                </div>
            </div>
            <div class="answer">
                <input type="text" value="" name="answer[]" placeholder="คำตอบ" required>
            </div>
        </div>
    </div>
    <button name='submit' type="submit" style="cursor: pointer; margin-right: 10px;" class="create-button" value="">สร้าง</button>
  </form>  
  </form>




    <div id="id01" class="modal">
      <div class="modal-content animate">

      
    <!-- <form class="modal-content animate"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container" >
      <label for="uname" style="font-size: 20px;"><b>เพิ่มคำถาม</b></label>
      <input type="number" placeholder="ระบุจำนวน" name="addq" required class="addinput" id="addinputq" style="font-size: 20px;">

      <button type="button" class="add" style="font-size: 20px;" onclick="addq();">เพิ่ม</button>
      <button style="font-size: 20px;" type="submit" class="add-cancel" onclick="document.getElementById('id01').style.display='none'">ยกเลิก</button>
    </div>

    <!-- </form> -->
    </div>
    </div>

    <div id="id02" class="modal">
      <div class="modal-content animate">
    <!-- <form class="modal-content animate" action="/action_page.php" method="post"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname" style="font-size: 20px;"><b>ลบคำถาม</b></label>
      <input type="number" style="font-size: 20px;" placeholder="ระบุจำนวน" name="removeq" required class="addinput" id="removeinput">

      <button type="submit" class="add" style="font-size: 20px;" onclick="remove()">ลบ</button>
      <button type="submit" style="font-size: 20px;" class="add-cancel" onclick="document.getElementById('id02').style.display='none'">ยกเลิก</button>
    </div>

    <!-- </form> -->
    </div>
    </div>

    <div id="id03" class="modal">
      <!-- <div class="modal-content animate"> -->
    <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="class-left-right">
      <div class="class-left">
      <label for="uname" style="font-size: 20px;"><b>วุฒิการศึกษา</b></label>
      <!-- <input type="number" style="font-size: 20px;" placeholder="ระบุจำนวน" name="removeq" required class="addinput" id="removeinput"> -->
      <br>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">ปวช</option>
          <option value="2">ปวส</option>
          <option value="3">ปวส ม.6</option>
        </select>
      </div>
      <br>
      <label for="uname" style="font-size: 20px;"><b>ปีไหน</b></label>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">ปี1</option>
          <option value="2">ปี2</option>
          <option value="3">ปี3</option>
        </select>
      </div>
      <br>
      <label for="uname" style="font-size: 20px;"><b>กลุ่ม</b></label>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <br>
      <label for="uname" style="font-size: 20px;"><b>วิชา</b></label>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">คณิต</option>
          <option value="2">วิท</option>
          <option value="3">ไทย</option>
        </select>
      </div>
      
      <br>
      </div>
      <div class="class-rigth">
         <label for="uname" style="font-size: 20px;"><b>นักเรียน/เลขที่</b></label>
      <div class="student-check" style="display: flex; justify-content: space-around; width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">1</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">2</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">3</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">4</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">5</p>
          </div>
      </div>
      <div class="student-check" style="display: flex; justify-content: space-around;  width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">6</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">7</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">8</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">9</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">10</p>
          </div>
      </div>
      <div class="student-check" style="display: flex; justify-content: space-around; width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">11</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">12</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">13</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">14</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">15</p>
          </div>
      </div>
      <div class="student-check" style="display: flex; justify-content: space-around;  width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">16</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">17</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">18</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">19</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">20</p>
          </div>
      </div>
      
      </div>
      </div>



      <button type="submit" class="add" style="font-size: 20px;">ตกลง</button>
      <!-- <button type="reset">reset</button> -->
      <button type="submit" style="font-size: 20px;" class="add-cancel" onclick="document.getElementById('id03').style.display='none'">ยกเลิก</button>
    </div>

    </form>
    <!-- </div> -->
    </div>

    
    
    <script src="scripts/script.js"></script>
</body>
</html>