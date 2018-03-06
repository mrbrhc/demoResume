<?php

    if(!session_start()){
        header("Location: error.php");
        exit;
    }
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE HTML>
<!-- Name: Mason Breece
     Student ID: 14050914
     Date: 09/14/2017

     5 mandatory HTML tags:
     <!DOCTYPE HTML>
     <html></html>
     <head></head>
     <title></title>
     <body></body>
-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Resume</title>
	
<!--	<link rel="stylesheet" href="style.css" />-->
    <style>
        table { 
            border-collapse: collapse; 
            border-spacing: 0; 
        }
        td { 
            vertical-align: top; 
        }
        table, th, td {
            border: 1px solid black;
        }

        img {
            height: 100px; 
            width: 100px; 
        }
        
        body{
            background-color: cornflowerblue;
            color: black;
            font-family:monospace;
        }
        #pictureWrapper{
            float: left;
        }
        #display{
            float: left;
            vertical-align: bottom;
            width: auto;
            background-color: gainsboro;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        
        #logOut{
            bottom: 0%;
            float: left;
            
        }
        
        #buttonOption{
            float: left;
            width: 100%;
            padding-top: 20px;
        }
        
        #nameHeader{
            float: left;
            padding-left: 25px;
            padding-top: 35px;
        }
        
        #pictureid{
            float: left;
        }
        .pictureClass{
            height: 200px; 
            width: 200px;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); 
        }
        
        .option:hover {
            background-color: #4CAF50; /* Green */
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); 
        }
        
        .option{
            background-color: gold;
            font-size: 18px;
            border-radius: 2px;
            margin-bottom: 10px;
        }
        
        iframe{
            width= 420px;
            height= 315px;
            align-content: center;
        } 
    
    </style>
    
    <script>
        
        function Objective() {
        
        document.getElementById("display").innerHTML = "Loading...";
        
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {

				var xmlDoc = xmlHttp.responseText;
                
                var output = xmlDoc;
                
                console.dir(output);
                
                //output = how to pull information off of resume
                
                var divObj = document.getElementById("display");
                
                divObj.innerHTML=output;
				
			}
		}
		
		xmlHttp.open("GET", "http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/objectiveAjax.php?content=data&format=json", true); //resume home data address
		xmlHttp.send();
        
	}                  //end of Objective() function
        
        function education() {
        
        document.getElementById("display").innerHTML = "Loading...";
        
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {

				var xmlDoc = xmlHttp.responseText;
                
                var output = xmlDoc;
                
                console.dir(output);
                
                //output = how to pull information off of resume
                
                var divObj = document.getElementById("display");
                
                divObj.innerHTML=output;
				
			}
		}
		
		xmlHttp.open("GET", "http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/educationAjax.php?content=data&format=json", true); //resume home data address
		xmlHttp.send();
        
	}                  //end of education() function
        
        function military() {
        
        document.getElementById("display").innerHTML = "Loading...";
        
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {

				var xmlDoc = xmlHttp.responseText;
                
                var output = xmlDoc;
                
                console.dir(output);
                
                //output = how to pull information off of resume
                
                var divObj = document.getElementById("display");
                
                divObj.innerHTML=output;
				
			}
		}
		
		xmlHttp.open("GET", "http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/MilitaryAjax.php?content=data&format=json", true); //resume home data address
		xmlHttp.send();
        
	}                  //end of military() function
        
        function hobbies() {
        
        document.getElementById("display").innerHTML = "Loading...";
        
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {

				var xmlDoc = xmlHttp.responseText;
                
                var output = xmlDoc;
                
                console.dir(output);
                
                //output = how to pull information off of resume
                
                var divObj = document.getElementById("display");
                
                divObj.innerHTML=output;
				
			}
		}
		
		xmlHttp.open("GET", "http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/hobbiesAjax.php?content=data&format=json", true); //resume home data address
		xmlHttp.send();
        
	}                  //end of hobbies() function
        
        function socialMedia() {
        
        document.getElementById("display").innerHTML = "Loading...";
        
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {

				var xmlDoc = xmlHttp.responseText;
                
                var output = xmlDoc;
                
                console.dir(output);
                
                //output = how to pull information off of resume
                
                var divObj = document.getElementById("display");
                
                divObj.innerHTML=output;
				
			}
		}
		
		xmlHttp.open("GET", "http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/socialMediaAjax.php?content=data&format=json", true); //resume home data address
		xmlHttp.send();
        
	}                  //end of socialMedia() function
        
        function contact() {
        
        document.getElementById("display").innerHTML = "Loading...";
        
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {

				var xmlDoc = xmlHttp.responseText;
                
                var output = xmlDoc;
                
                console.dir(output);
                
                //output = how to pull information off of resume
                
                var divObj = document.getElementById("display");
                
                divObj.innerHTML=output;
				
			}
		}
		
		xmlHttp.open("GET", "http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/contactAjax.php?content=data&format=json", true); //resume home data address
		xmlHttp.send();
        
	}              //end contact()
        
        function logOut() {
        
        window.location.replace("http://ec2-18-216-30-86.us-east-2.compute.amazonaws.com/final/logout.php");
        
	}              //end logOut()
    
    
    </script>
</head>
<body>
    <div>                           <!-- Main wrapper-->
        <div id="pictureWrapper">  <!-- picture wrapper-->
            
            <div id="pictureid">
                
            <img src="img/picture.jpg" alt="Picture" class="pictureClass" >
                
            </div> <!-- picture div-->
            
            <div id="nameHeader">  <!-- header div-->
            
            <h1>Mason R. Breece</h1>
            
            <h2>Computer Science Undergraduate at Mizzou</h2>
                
            <p><a href="resume.php">Click to view full resume</a></p>
                
            </div>
            
        <div id="buttonOption"> <!-- Button option wrapper -->
            
            <button type="button" onclick="Objective()" id = "Objective" class="option">Objective</button>
            
            <button type="button" onclick="education()" id = "Education" class="option">Education</button>
            
            <button type="button" onclick="military()" id = "Military" class="option">Military</button>
            
            <button type="button" onclick="hobbies()" id = "hobbies" class="option">Hobbies</button>
            
            <button type="button" onclick="socialMedia()" id = "socialMedia" class="option">Social Media</button>
            
            <button type="button" onclick="contact()" id = "contact" class="option">Contact me!</button>
            
        </div><!-- Button option wrapper end-->
            
        </div><!-- picture wrapper end-->
        
        <div id="display">          <!-- content display wrapper-->
        
<!--            form for refrences upon request -->
        
        </div><!-- content display wrapper-->
        
    </div><!-- Main wrapper end-->
    
        <button type="button" onclick="logOut()" id = "logOut" class="option">Logout</button>
    </body>
</html>