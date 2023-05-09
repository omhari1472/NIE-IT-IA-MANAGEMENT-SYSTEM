<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>student login</title>
    <style>
        .top {
            display: flex;
            justify-content: space-between;
            margin: 1em;
        }

        
#dashnav{
  position: relative;
}

.iadash{
  display: none;
  /* position: absolute; */
  background-color: #f9f9f9;
  overflow: auto;
  margin: auto;
  width: 97%;

}
.show1 {display:block;}

    </style>
</head>

<body>

         <!-- header -->
         <header style="background-color: #222831;">
            <div class="box" style="justify-content: space-between; display: flex; padding: 2rem 2rem 0 2rem;">
                <div style="display:inline-block;" class="logo">
                    <img src="img/1.jpg" style="height: 100px; margin-top: 10px; margin-left: 30px;" alt="NIE">
                </div>
                <div style="display:inline-block;">
                    <h2 style="color:white; margin-top: 10px;">
                        NIE INSTITUTE OF TECHNOLOGY,MYSURU
                        </h1>
                        <h5 style="color:white;">
                            No.50 (Part),Koorgalli village,Hootagalli Industrial Area,Mysuru-570018.
                            </h3>
                </div>
                <a href="login.html" style="font-size:1.2rem ;padding: 2rem; color: white; padding-right:10px;">
                  Log in 
                </a>
            </div>
        </header>

        <!-- header end -->
    <!-- nabar  -->
    <nav style="background-color: #222831  ;">
        <div style="text-align: center; font-size: 1.2rem; font-weight: bold; color: rgb(255, 255, 255);">
            IA Marks Application
        </div>
    </nav>
    <!-- navbar end -->
    <!-- nabar  -->
    <nav class="nav" style="background-color:#222831; padding-left: 30px;">
        <a href="#" style="font-size:1.2rem ; color: white; padding-right:10px;">Home |</a>
        <a href="#" style="font-size:1.2rem ;color: white; padding-left: 10px;"> IA Marks |</a>
    </nav>

    <!-- navbar end -->

      <!-- dashboard start. -->
      <div>
        <div class="dashboard"
            style="width: 80%; margin: auto; margin-top: 20px; border:1px solid red; padding-bottom: 20px;">
            <div style=" display:flex;  background-color: #337ab7;
        justify-content:space-between;">
                <p class="top">Hello</p>
                <p class="top">NIE INSTITUTE OF TECHNOLOGY, MYSURU</p>
                <P class="top">Log out</P>
            </div>
            <div id="dashnav" style="margin: 1rem;">
                <nav>
                    <a href="">Dashboard</a>
                    <button id="iabutton">Ia Marks Entry</button>
                    
                    <a href="" id="">Attendance</a>
                    <button id="iabutton1">Additional/Improvement IA Entry</button>
                    <button id="iabutton2">Add Student</button>
                    </nav>
  
                        <!-- ia dashbord start -->
            <div class="iadash" id="iadashb">
              <div style=" border: .5px solid grey; background-color: #4286f4;justify-content: center; margin-top: 10px; ">
                  <p style="display:flex; justify-content: center; ">INTERNAL MARKS ENTRY</p>
              </div>
              <div class="formia" style="background-color: #f5f5f5; ">
                  <div class="" style=" display:flex;
              justify-content:space-between;">
                      <p style="margin-left:4em;">Semester</p>
                      <p>Subject Code</p>
                      <p style="margin-right:4em;">Choose Faculty</p>
                  </div>
                  <div class="">
                    <form action="#" method="POST" style="display: flex; justify-content: space-between; padding: 0 3rem;">
                    <?php
                                include('connection.php');
                                include('session.php');
                                
                                $class_result=mysqli_query($conn,"SELECT `name` FROM `semester`");
                                    echo '<select sem="sem">';
                                    echo '<option selected disabled>Select Sem</option>';
                                while($row = mysqli_fetch_array($class_result)){
                                    $display=$row['name'];
                                    echo '<option value="'.$display.'">'.$display.'</option>';
                                }
                                echo'</select>'
                            ?> <?php
                            include('connection.php');
                            include('session.php');
                            
                            $class_result=mysqli_query($conn,"SELECT `name` FROM `subjectcode`");
                                echo '<select sem="sem">';
                                echo '<option selected disabled>Select Subject</option>';
                            while($row = mysqli_fetch_array($class_result)){
                                $display=$row['name'];
                                echo '<option value="'.$display.'">'.$display.'</option>';
                            }
                            echo'</select>'
                        ?>
                            <?php
                                include('connection.php');
                                include('session.php');
                                
                                $class_result=mysqli_query($conn,"SELECT `name` FROM `facultycode`");
                                    echo '<select sem="sem">';
                                    echo '<option selected disabled>Select Faculty</option>';
                                while($row = mysqli_fetch_array($class_result)){
                                    $display=$row['name'];
                                    echo '<option value="'.$display.'">'.$display.'</option>';
                                }
                                echo'</select>'
                            ?>
                    </form>
                  </div>
                  <div style="justify-content: center; display: flex;">
                      <button style="width:25%; margin: auto; margin-top:1em; background-color: green;">Go
                          Ahead</button>
                  </div>
  
              </div>
  
          </div>
      </div>
        
  <!-- ia dashbord end -->
  
    <!-- Additional/Improvement IA Entry dashbord start -->
      
    <div class="iadash" id="iadashb1">
      <div style=" border: .5px solid grey; background-color: #4286f4;justify-content: center; margin-top: 10px; ">
          <p style="display:flex; justify-content: center; ">Additional/ Improvement IA/ CIE Entry</p>
      </div>
      
          <div class="">
              <div class="formia" style="background-color: #f5f5f5; ">
                  <div class="" style=" display:flex;
                      justify-content:space-between;">
                      <p style="margin-left:4em;">Semester</p>
                      <p>Subject Code</p>
                      <p style="margin-right:4em;">Choose Faculty</p>
                  </div>
              <form action="#" method="POST" style="display: flex; justify-content: space-between;">
                  <input name="semester" style=" border-radius: 5px; margin-left:2em; border: 1px solid #86807d;"
                      required="" placeholder="student" type="text">
                  <input name="subjectcode" style=" border-radius: 5px; border: 1px solid #86807d;" required=""
                      placeholder="subjectcode" type="text">
                  <input name="choosefaculty"
                      style=" border-radius: 5px; margin-right:2em; border: 1px solid #86807d;" required=""
                      placeholder="choose faculty" type="text">
              </form>
              <div class="formia" style="background-color: #f5f5f5; ">
                  <div class="" style=" display:flex;
                      justify-content:space-between;">
                      <p style="margin-left:4em;">Semester</p>
                      <p>Subject Code</p>
                      <p style="margin-right:4em;">Choose Faculty</p>
                  </div>
              <form action="#" method="POST" style="display: flex; justify-content: space-between;">
                  <input name="semester" style=" border-radius: 5px; margin-left:2em; border: 1px solid #86807d;"
                      required="" placeholder="student" type="text">
                  <input name="subjectcode" style=" border-radius: 5px; border: 1px solid #86807d;" required=""
                      placeholder="subjectcode" type="text">
                  <input name="choosefaculty"
                      style=" border-radius: 5px; margin-right:2em; border: 1px solid #86807d;" required=""
                      placeholder="choose faculty" type="text">
              </form>
              <div class="formia" style="background-color: #f5f5f5; ">
                  <div class="" style=" display:flex;
                      justify-content:space-between;">
                      <p style="margin-left:4em;">Semester</p>
                      <p>Subject Code</p>
                      <p style="margin-right:4em;">Choose Faculty</p>
                  </div>
              <form action="#" method="POST" style="display: flex; justify-content: space-between;">
                  <input name="semester" style=" border-radius: 5px; margin-left:2em; border: 1px solid #86807d;"
                      required="" placeholder="student" type="text">
                  <input name="subjectcode" style=" border-radius: 5px; border: 1px solid #86807d;" required=""
                      placeholder="subjectcode" type="text">
                  <input name="choosefaculty"
                      style=" border-radius: 5px; margin-right:2em; border: 1px solid #86807d;" required=""
                      placeholder="choose faculty" type="text">
              </form>
          </div>
          <div style="justify-content: center; display: flex;">
              <button style="width:25%; margin: auto; margin-top:1em; background-color: green;">Go Ahead</button>
          </div>
  
      </div>
  
  </div>
  </div> 
  
  </div>
  <!-- Additional/Improvement IA Entry dashbord end -->



     <!-- std dashbord start -->
     <div class="iadash" id="iadashb2">
        <div style=" border: .5px solid grey; margin-top: 10px;  background-color: #4286f4;justify-content: center; ">
            <p style="display:flex; justify-content: center; ">Add Student</p>
        </div>
        <div class="formia" style="background-color: #f5f5f5; ">
            <div class="" style=" display:flex;
        justify-content:space-between;">
                <p style="margin-left:4em;">Student Name</p>
                <p>USN</p>
                <p style="margin-right:4em;">Select sem</p>
            </div>
            <div class="">

                <form action="#" method="POST" style="display: flex; justify-content: space-between;">
                    <input name="name"
                        style=" border-radius: 2px; margin-left:2em; border: 1px solid #86807d;" required=""
                        placeholder="student" type="text">
                    <input name="usn" style=" border-radius: 2px; border: 1px solid #86807d;"
                        required="" placeholder="subjectcode" type="text">
                        <?php
                            include('connection.php');
                            include('session.php');
                            
                            $class_result=mysqli_query($conn,"SELECT `name` FROM `semester`");
                                echo '<select sem="sem">';
                                echo '<option selected disabled>Select Sem</option>';
                            while($row = mysqli_fetch_array($class_result)){
                                $display=$row['name'];
                                echo '<option value="'.$display.'">'.$display.'</option>';
                            }
                            echo'</select>'
                        ?>
                </form>
            </div>
            <div style="justify-content: center; display: flex;">
                <button style="width:25%; margin: auto; margin-top:1em; background-color: green;">Submit</button>
            </div>

        </div>

    </div>
</div>
</div>
<!-- std dashbord end -->
  
            </div>
  
        
  
    <!-- dashboard end. -->
  
  
  
  <script>
    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("iabutton").onclick = function() {myFunction1()};
    
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction1() {
      document.getElementById("iadashb").classList.toggle("show1");
      document.getElementById("iadashb1").classList.remove("show1");
      document.getElementById("iadashb2").classList.remove("show1");
  
    }
    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("iabutton1").onclick = function() {myFunction2()};
    
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction2() {
      document.getElementById("iadashb1").classList.toggle("show1");
      document.getElementById("iadashb2").classList.remove("show1");
      document.getElementById("iadashb").classList.remove("show1");
    }

      // Get the button, and when the user clicks on it, execute myFunction
      document.getElementById("iabutton2").onclick = function() {myFunction3()};
    
    /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
    function myFunction3() {
      document.getElementById("iadashb2").classList.toggle("show1");
      document.getElementById("iadashb").classList.remove("show1");
      document.getElementById("iadashb1").classList.remove("show1");
    }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>