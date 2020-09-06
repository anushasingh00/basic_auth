<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width", initial-scale-1.0>
<!--     <link rel="stylesheet" href="./index.css"> -->
    <style>
        * {
    margin:0;
    overflow-x: hidden;
}
html {
    scroll-behavior: smooth;
    
}

nav {
    display:flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    min-height: 8vh ; 
    /* width:100vw; */
    /*background-color: rgb(87, 84, 84);*/
    background-color: rgba(31, 31, 31, 0.37);
    /* overflow: hidden; */
    /* position: fixed; */
    /* top: 0; */
    /* opacity: 0.1; */
    
}
h3{
    color:rgba(5, 5, 5, 0.911);
    font-size: 22px;
}
 .sticky {
    position: fixed; 
    top: 0;
    width: 100%;
}
.links {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 45%;
  justify-content: space-around;
  
}
.links li {
    list-style: none;
    /* transition: transform .2s;  */
}
.links a {
    text-decoration:none ;
    font-size: 24px; 
   color:rgb(0, 0, 0);
   opacity: 0.7;
   font-family: 'Alegreya Sans SC';
   transition: transform .5s; 
   font-weight: lighter;
}


.links a:hover {
    color:rgb(0, 0, 0);
    font-weight: bold;
}


.links1 {
    display: none;
}


.tech-icon {
    font-size:100px;
    color:#00979c;
 }
 .skill-logo {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin-top: 90px;
    margin-left: 13vw;
    margin-right: 13vw;
    
 }

 @media screen and (max-width:1500px) {
    .links{
        width:80%;
    }
} 

 @media screen and (max-width:600px) {
    .tech-icon {
        font-size: 40px;
    }
    body {
        overflow-x: hidden;
    }
   
   .links , .lside {
       display: none;
   }
   .links1 {
        display: flex; 
        width: 80%;
        justify-content: space-around; 
   }
   .links1 li {
        list-style: none; 
    }
    .links1 a {
        text-decoration:none ;
        font-weight: bold;
        color:rgb(8, 8, 8);
    }
     
 }

h1 {
    text-align: center;
    margin-top: 90px;
    font-size: 50px;
    /* font-family: 'Alegreya SC'; */
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    letter-spacing: 1px;
    font-weight:lighter;
    color: rgb(0, 0, 0);
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/*  */

 #s1{
    /* background-color: rgb(255, 255, 255); */
    /* background-repeat: no-repeat;
    background-size: cover;
    background-position: center center; */
    background: linear-gradient(-45deg, #00979ce1, #b99696, #72eaffe8, #9b9393);
    background-size: 400% 400%;
    animation: gradient 6s ease infinite;
    height: 100vh;
    width: 100vw;
    display: block;
    
 }
 
#s2{
    height: 100vh;
    /* background-color:rgb(255, 255, 255); */
    /* background-repeat: no-repeat;
    background-size: cover;
    background-position: center center; */
    background-color: rgba(255, 223, 231, 0.534);
    display: block;
    margin: 0;
    width: 100vw;
}

#s3{
    height: 100vh;
    /* background-color: rgb(255, 255, 255); */
    /* background-repeat: no-repeat;
    background-size: cover;
    background-position: center center; */
    background-color: rgba(205, 240, 255, 0.459);
    display: block;
    width: 100vw;
    margin: 0px;
}
#s4{
    height: 100vh;
    /* background-color: rgb(255, 255, 255); */
    /* background-repeat: no-repeat;
    background-size: cover;
    background-position: center center; */
    background-color: rgba(255, 223, 231, 0.534);
    display: block;
    width: 100vw;
    margin: 0;
}
#s5{
    height: 92vh;
    /* background-color: rgb(255, 255, 255); */
    /* background-repeat: no-repeat;
    background-size: cover;
    background-position: center center; */
    background-color:rgba(205, 240, 255, 0.459);
    display: block;
    width: 100vw;
    margin: 0;
    position: relative;
    /* border-bottom: 55px solid rgba(0, 0, 0, 0.329);; */
}
 #footer {
    position:absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    bottom: 0px;
    background:rgba(97, 97, 97, 0.39);
    width:100vw;
    height:7vh;
    font-family:'Source Sans Pro' ;
    letter-spacing: 1px;
    font-size: 13px;
    color:black;
 }
h2{
    font-size: 30px;
    /* text-align: center; */
    color:rgb(0, 0, 0);
    margin-top: 120px;
    font-family:'Source Sans Pro' ;
    font-weight: lighter;
    letter-spacing: 2px;
    /* text-decoration-line:underline; */
    padding: 15px;
    border-bottom: 2px solid rgb(0, 0, 0);
    width: 190px;
}
h4{
    text-align: center;
    /* margin-left: 12vw;
    margin-right: 12vw;
    margin-top: 65px; */
    font-size: 22px;
    font-family:'Didact Gothic';
    margin-top: 20px;
    font-weight: bold;
    

}
 
 /* .abc{
     font-size: 22px;
     align-items: right;
     justify-items: center;
     margin-left: 25vw;
     margin-top: 15px;
     font-family:'Didact Gothic';
 */

 
 .abc li{
     
     font-size: 16px;
     font-family:'Source Sans Pro' ;
     text-align: center;
     margin-top: 15px;
 }
 h5{
     font-size: 22px;
     font-family: 'Source Sans Pro' ;
     text-align: center;
     margin-top: 10px;
 }
 p{
     text-align: center;
     font-family: 'Source Sans Pro';
     margin-top: 23px;
     font-size: 19px;
     color:rgb(0, 0, 0);
 }
 .acad h4{
     font-size: 25px;
     text-align: center;
     font-weight: bold;
     font-family: 'Source Sans Pro';
     margin-top: 15px;
 }
 .acad h3{
     font-size: 18px;
     text-align: center;
     font-family: 'Source Sans Pro';
     margin-top: 5px;
     font-weight: lighter;

 }
 .acad p{
     font-size: 16px;
     font-family: 'Source Sans Pro';
     color: rgb(3, 138, 120);
     margin-top: 2px;
 }
 .contact h2{
    font-size: 30px;
    color:rgb(0, 0, 0);
    margin-top: 170px;
    font-family:'Source Sans Pro' ;

    letter-spacing: 1px;
    /* text-decoration-line:underline; */
    padding: 15px;
    border-bottom: 2px solid rgb(0, 0, 0);
     width: 190px;
    

 }
 .contact p{
     font-size: 19px;
     font-family: 'Source Sans Pro';
     margin-top: 70px;
 }
 #s4 h3{
     font-family:'Source Sans Pro';
     font-size: 18px;
     margin-top: 70px;
     text-align: center;
     font-weight: lighter;
     letter-spacing: 1px;
 }
 
 .icon {
    margin-right:20px;
 }


 /* .respo {
    display: none;
} */

/* .respo div {
    width:25px;
    height:2px;
    margin:5px;
    background-color:rgb(0, 0, 0);
} */   
    
/* body {
    background: linear-gradient(-45deg, #979696, #616161, #72eaffe8, #4d4d4d);
    background-size: 400% 400%;
    animation: gradient 8s ease infinite;
} */
    </style>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">
    <!-- <script src="j.js"></script> -->

    <title>Portfolio</title>
</head>
<body>
    
   <nav class="sticky">
        <!-- <div class="lside">
            <h3><a href="#s5"><i style="font-size:24px; color:black;" class="fa">&#xf0e0;</i></a></h3>
        </div>  -->
        <ul class="links">
            <li><a href="#s1">About</a></li>
            <li><a href="#s2">Academics</a></li>
            <li><a href="#s3">Projects</a></li>
            <li><a href="#s4">Skills</a></li>
            <li><a href="#s5">Contact</a></li>
			<li> <a href="index.php?logout='1'" style="color: red;">logout</a> </li>
        </ul>
        <ul class="links1">
            <li><a href="#s1"><i style='font-size:24px' class='fas'>&#xf406;</i></a></li>
            <li><a href="#s2"><i style="font-size:24px" class="fa">&#xf19c;</i></a></li>
            <li><a href="#s3"><i style='font-size:24px' class='fas'>&#xf5fc;</i></a></li>
            <li><a href="#s4"><i style='font-size:24px' class='fas'>&#xf121;</i></a></li>
            <li><a href="#s5"><i style="font-size:24px; color:black;" class="fa">&#xf0e0;</i></a></li>
        </ul>
        <div class="respo">
            <!-- <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div> -->
        </div>  
   </nav> 
   <div id="s1">
       <h2>ABOUT</h2>
        <h1>  SHIVANGI CHOUDHARY</h1>
        <h5>HI, IT'S ME!</h5>
        <p>I like building awesome software. I've built websites. <br>If you are interested, you can view some of my favorite projects in my portfolio down below.</p>
   </div>
   
   <div id="s2">
       <h2>ACADEMICS</h2>
       <div class="acad">
           <div class="college">
               <h4><i class="fas icon" style='font-size:24px; color:#00979ce1;'>&#xf501;</i>     AJAY  KUMAR  GARG  ENGINEERING  COLLEGE</h4>
               <h3>BACHELOR OF COMPUTER SCIENCE</h3>
               <p>Graduating in: Early 2023</p>
           </div><br/>
           <div class="school1">
               <h4><i class="fas icon" style='font-size:24px;color:#00979ce1;'>&#xf549;</i>     SILVER LINE PRESTIGE SCHOOL</h4>
               <h3>12TH STANDARD</h3>
               <p>Passed in:2018</p>
           </div><br/>
           <div class="school1">
                <h4><i class="fas icon" style='font-size:24px;color:#00979ce1;'>&#xf549;</i>     ST. MARY'S CONVENT SCHOOL</h4>
                <h3>10TH STANDARD</h3>
                <p>Passed in:2016</p>
        </div>
        </div>
    </div>
    <div id="s3">
       <h2>PROJECTS</h2>
       <h4>IMAGE COMPRESSOR:-</h4>
        <div class="abc">
            <ul>
                <li> Website to compress images. Built using React.js as the
                frontend framework.</li>
                <li>Used Javascript module ‘browser-image-compression’ for
                compressing images.</li>
                <li><a href="https://www.github.com/shivangi-ch/image_compresser"><i class="fa fa-github" style="font-size:36px; color: #8a009ce1;"></i></a><span style="color: rgba(228, 247, 255, 0.459);">  |||||   </span>
                <a href="https://shivangi-ch.github.io/image_compresser"><i class="fa fa-desktop" style="font-size:32px; color: #8a009ce1;"></i></a></li>
            </ul>
        </div>


        <h4>WEATHER APP  :-</h4>
        <div class="abc">
            <ul>
                <li>Website to see weather conditions anywhere round the globe.</li>
                <li>Built using React.js as the frontend framework.</li>
                <li>This app uses the OpenWeatherMap API</li>
                <li><a href="https://www.github.com/shivangi-ch/weather-react"><i class="fa fa-github" style="font-size:36px; color: #8a009ce1;"></i></a><span style="color: rgba(228, 247, 255, 0.459);">  |||||   </span>
                <a href="https://shivangi-ch.github.io/weather-react"><i class="fa fa-desktop" style="font-size:32px; color: #8a009ce1;"></i></a></li>
            </ul> 
        </div>
    </div>
       
    <div id="s4">
        <h2> TECHNICAL SKILLS</h2>
        <div class="skill-logo">
            <div><i class="devicon-cplusplus-plain tech-icon"></i></div>
            <div><i class="devicon-javascript-plain tech-icon" ></i></div>
            <div><i class="devicon-react-plain tech-icon"></i></div>
            <div><i class="devicon-html5-plain tech-icon"></i></div>
            <div><i class="devicon-css3-plain tech-icon"></i></div>
        </div>
        <h3> For web applications I use Javascript.<br> Whenever I do competetive programming I obviously go with C++ </h3>
    </div>
    <div id="s5">
        <div class="contact">
            <h2>LET'S GET IN TOUCH</h2>
            <p>Need anything built, want to work together or simply want to have a chat?<br>Drop me an e-mail at <em><span style="color:#00979ce1">shivangi.ch.936@gmail.com</span></em><br><i style="font-size:24px" class="fa">&#xf0e0;</i></p>
        </div>
        <div id="footer">
            Built and designed by Shivangi Choudhary
        </div>
    </div>
    <!-- <footer>
        Built and designed by Shivangi Choudhary
    </footer>
   -->
</body>
</html>
