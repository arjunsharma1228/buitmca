<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quick Quiz</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>

   


  <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

    <div class="header">
      <h1>B.U.I.T </h1>
      <h2>mca department</h2>

      

    </div>


    <button1 style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9807;mca services click here to  open</button1>
    
    <div class="navbar">
      <a href="#">about BUIT</a>
      <a href="#">contact</a>
      <a href="#">FACULTY</a>
      <a href="#" class="right">STUDENT PORTAL</a>
    </div>
    
    <div class="row">
      <div class="side">
        <h2>COURSE</h2>
        
        <div class="fakeimg" style="height:200px;">Course Objective: 
          To develop logical thinking and its application to computer science (to emphasize the importance of proving statements correctly and de-emphasize the hand-waving approach towards correctness of an argument). The subject enhances one’s ability to reason and ability to present a coherent and mathematically accurate argument. 
          </div>
        <p></p>
        <h3>ABOUT COURSE</h3>
        <p>CLICK TO NOW SYLLABUS</p>

        <div class="BTN">
         <div class="link">
         <a href="sem1.html">first sem</a><br></div> 
         <div class="link">
          <a href="sem2.html">second sem</a><br></div> 
          <div class="link">
            <a href="sem3.html">third sem</a><br></div> 
            <div class="link">
              <a href="sem4.html">forth sem</a><br></div> 
          
        </div>
        
      </div>
      <div class="main">
        <h2>mca department</h2>
        <h5>Title description, 8-AUG-2021</h5>
        
        <iframe src="sem 2 fee arjun sharma.pdf" width="800px" height="700px" type="application/pdf" ></iframe>
        </div>
        
        <br>
        <h2>MOTIVE OF THIS PROGRAM</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        
      </div>
    </div>

    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
      <div class="overlay-content">

        <div class="welcome">
        <h8>WELCOME TO MCA department</h8>
        </div>

        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">FACULTY</a>
        <a href="#">PLACEMENT</a>
        <a href="#">MORE</a>
        
      </div>
    </div>

    <div class="container">
      <div id="home" class="flex-center flex-column">
        <h1>mca Quiz</h1>
        <a class="btn" href="">Play</a>
        <a class="btn" style="cursor:pointer " onclick="openNav()">MCA services CLICK TO open</a>

        
      </div>
    </div>
    
    <div class="footer">
      <h2>webpage design by arjun sharma </h2>
    </div>
    

    

    <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
    </script>
  </body>
</html>


