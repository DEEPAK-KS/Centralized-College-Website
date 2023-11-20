<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" href="head.jpg">
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>
<?php
?>
<?php
    session_start ();
?>
<style>
    ::-webkit-scrollbar{
        width: 0px;
    }
    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    }
    .admission{
        background-color: white;
        display: flex;
        justify-content: center;
        height: 50px;
        width: 100%;
    }
    .Hitems{
        padding-top: 20px;
        padding-left: 50px;
        padding-right: 50px;
        font-size: larger;
    }
    .dept-content, .campus-content, .event-content, .aboutt-content {
        display: none;
        position: absolute;
        background-color: rgba(255, 255, 255, .8);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
        z-index: 1;
    }
    .dept-content a{
        padding: 8px 16px;
        text-decoration: none;
        display: block;
        color: black;
        font-weight: 550;
    }
    .campus-content a,.event-content a,.aboutt-content a{
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-weight: 550;
        color: black;
    }
    .dept:hover .dept-content {display: flex;}
    .campus:hover .campus-content {display: flex;}
    .aboutt:hover .aboutt-content {display: flex;}
    .event:hover .event-content {display: flex;}
    .head{
        height: 40px;
        width: 200px;
        font-size: medium;
        border: none;
        background-color:white;
    }
    .heading{
        padding: 12px 16px;
        font-size: larger;
        font-weight: 550;
        text-decoration: underline;
    }
    .dpt::after,.camp::after,.evnt::after,.aboutt::after{
        content: '';
        width: 0;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        transition: 0.5s;
    }
    .dept:hover .dpt::after{width: 100%;}
    .aboutt:hover .aboutt::after{width: 100%;}
    .event:hover .evnt::after  {width: 100%;}
    .campus:hover .camp::after {width: 100%;}
    .bar{
        display: flex;
        justify-content:space-between;
        padding-bottom: 10px;
    }
    .logo{
        height: 200px;
        width: 400px;
    }
    .dept,.campus,.event{
        padding-top: 40px;
        background-color: white;
        justify-content: center;
    }
    .aboutt{
        justify-content: center;
        padding-top: 23px;
    }
    .admission a{
        text-decoration: none;
        padding-top: 18px;
    }
    .snap{
        width: 100%;
    }
    .container{
       width: 100%;
       padding: 0;
    }
    .name{
        color: gold;
        padding-left: 20px;
        padding-top: 20px;
        font-size: xx-large;
        
    }
    .life{
        font-size: x-large;
        padding-left: 20px;
        display: flex;
    }
    .life img{
        width: 100%;
        border-radius: 10px;
    }
    .life h2{
        padding: 20px;
        margin-left: 15px;
        border-radius: 25px;
        background: #fff3f3;
        box-sizing: border-box;
        transition: 0.5s;
    }
    .empty{
        padding-top: 100px;
    }
    .life h2:hover {box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);}
    .about{

        font-size:larger;
        display: flex;
    }
    .about p{
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 20px;
        transition: 0.5s;
        padding-bottom: 20px;
        box-sizing: border-box;
        text-align:justify;
        border-radius: 25px;
        height: 100%;
    }
    .about video{
        width: 60%;
        border-radius: 25px;
        margin-right: 10px;
    }
    .loc{
        display: flex;
        height: 70vh;
        width: 200vh;
        padding-left: 20px;
    }
    .carousel-caption{
        position: absolute;
        top: 30%;
        left: 20%;
        right: 18%;
    }
    .carousel-caption p{
       font-size: xxx-large;
    }
    .campus-loc{
        width: 80%;
        margin: auto;
        text-align: center;
        padding-top: 50px;
    }
    .abt .para, .abt h1{
        text-align: center;
    }   
    .campus-col{
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }
    .campus-col img{
        width: 100%;
        display: block;
    }
    .layer{
        background: transparent;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        transition: 0.5s;
        left: 0;
    }
    .layer:hover { background: rgba(226,0,0,0.7);}
    .row{
        display:flex;
        justify-content:space-evenly;
    }
    .layer h3{
        width: 100%;
        font-weight: 500;
        color: #fff;
        font-size: 26px;
        bottom: 0;
        left: 50%;
        transform: translate(-50%);
        position: absolute;
        opacity: 0;
        transition: 0.5s;
    }
    .layer:hover h3{
        bottom: 49%;
        opacity: 1;
    }
    .facilities{
        width: 80%;
        margin: auto;
        text-align: center;
        padding-top: 70px;
    }
    .facilities-col{
        flex-basis: 31%;
        border-radius: 10px;
        margin-bottom: 5%;
        text-align: left;
    }
    .facilities-col img{
        width: 100%;
        border-radius: 10px;
    }
    .facilities-col p{
        padding: 0;
    }
    .facilities-col h3{
        margin-top: 16px;
        margin-bottom: 15px;
    }
    .testimonial{
        width: 100%;
        margin: auto;
        padding: 70px;
        text-align: center;
    }
    .testimonial-col{
        flex-basis: 44%;
        border-radius: 10px;
        margin-bottom: 5%;
        margin-left: 10px;
        text-align: left;
        background: #fff3f3;
        padding: 25px;
        cursor: pointer;
        display: flex;
    }
    .testimonial-col img{
        height: 50px;
        width: 55px;
        margin-left: 5px;
        margin-right: 30px;
        border-radius: 50%;
    }
    .rows{
        display: flex;
        justify-content: space-between;
    }
    .cta{
        margin: 100px auto;
        width: 80%;
        background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("banner2.jpg");
        background-position: center ;
        background-size: cover;
        border-radius: 10px;
        text-align: center;
        padding: 100px 0;
    }
    .cta h1{
        color: #fff;
        margin-bottom: 40px;
        padding: 0;
    }
    .counter-up{
        background: #f44336;
        min-height: 50vh;
        border-radius: 10px;
        margin-left: 50px;
        display:flex ;
        justify-content: center;
        padding: 0 50px;
    }
    .counter-up .counter{
        display: flex;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: space-between;
    }
    .counter .box{
        width: calc(20%-30%);
        border: 1px dashed white;
        border-radius: 30px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin-left: 20px;
        color: #fff;
        flex-direction: column;
    }
    .counter .box .icon{
        width: 200px;
        color: #fff;
    }
    .counter .box .count{
        font-size: 50px;
        color: #f2f2f2;
        font-weight: 500;
    }
    .counter .box .text{
        color: #ccc;
        font-weight: 400;
    }
    .reveal{
        transform: translateY(150px);
        opacity: 0;
        transition: all 2s ease;
    }
    .active{
        transform: translateY(0px);
        opacity: 1;
    }
    .link{
        padding: 0;
        display: none;
        margin: 0;
    }
    .draw-border {
        box-shadow: inset 0 0 0 4px #ffffff;
        color: #fff;
        transition: color 0.25s 0.0833333333s;
        position: relative;
    }
    .draw-border::before, .draw-border::after {
        border: 0 solid transparent;
        box-sizing: border-box;
        content: "";
        pointer-events: none;
        position: absolute;
        width: 0;
        height: 0;
        bottom: 0;
        right: 0;
    }
    .draw-border::before {
        border-bottom-width: 4px;
        border-left-width: 4px;
    }
    .draw-border::after {
        border-top-width: 4px;
        border-right-width: 4px;
    }
    .draw-border:hover a {
        color: #f44336  ;
    }
    .draw-border:hover::before, .draw-border:hover::after {
        border-color: #f44336;
        transition: border-color 0s, width 0.25s, height 0.25s;
        width: 100%;
        height: 100%;
    }
    .draw-border:hover::before {
        transition-delay: 0s, 0s, 0.25s;
    }
    .draw-border:hover::after {
        transition-delay: 0s, 0.25s, 0s;
    }
    .btn {
        background: none;
        border: none;
        cursor: pointer;
        line-height: 1.5;
        font: 400 1.2rem "Roboto Slab", sans-serif;
        padding: 10px 20px;
        margin-top: 20px;
        text-decoration: none;
        margin-right: 15px;
        letter-spacing: 0.05rem;
    }
    .btn a{
        text-decoration: none;
        font-size: 18px;
        color: #fff;
    }
    .btn:focus {
        outline: 2px dotted #55d7dc;
    }

    .draw-border {
        box-shadow: inset 0 0 0 4px #ffffff;
        color: #fff;
        transition: color 0.25s 0.0833333333s;
        position: relative;
    }
    .draw-border::before, .draw-border::after {
        border: 0 solid transparent;
        box-sizing: border-box;
        content: "";
        pointer-events: none;
        position: absolute;
        width: 0;
        height: 0;
        bottom: 0;
        right: 0;
    }
    .draw-border::before {
        border-bottom-width: 4px;
        border-left-width: 4px;
    }
    .draw-border::after {
        border-top-width: 4px;
        border-right-width: 4px;
    }
    .draw-border:hover a {
        color: #f44336  ;
    }
    .draw-border:hover::before, .draw-border:hover::after {
        border-color: #f44336;
        transition: border-color 0s, width 0.25s, height 0.25s;
        width: 100%;
        height: 100%;
    }
    .draw-border:hover::before {
        transition-delay: 0s, 0s, 0.25s;
    }
    .draw-border:hover::after {
        transition-delay: 0s, 0.25s, 0s;
    }
    .btn {
        background: none;
        border: none;
        cursor: pointer;
        line-height: 1.5;
        font: 400 1.2rem "Roboto Slab", sans-serif;
        padding: 10px 20px;
        margin-top: 20px;
        text-decoration: none;
        margin-right: 15px;
        letter-spacing: 0.05rem;
    }
    .btn a{
        text-decoration: none;
        color: #fff;
    }
    .btn:focus {
        outline: 2px dotted #55d7dc;
    }
    .admin{
        width: 100%;
        display: flex;
        justify-content: end;
    }
    .admin a{
        border: 1px solid;
        border-radius: 10px;
        color: black;
        text-decoration: none;
        cursor: pointer;
        padding: 10px;
        margin: 10px;
        transition: .2s;
    }
    .admin a:hover{
        color: #fff;
        background:#f44336 ;
        border: 1px solid;
    }
    .carousel div{
        object-fit: contain;
    }
</style>
<body>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="item active">
                    <img src="snap07.jpg" alt="Los Angeles" class="snap">
                    <div class="carousel-caption">
                        <img src="LOGO2.png" class="logo">
                        <p>SAINT TERESA</p>
                    </div>
                </div>
    
                <!-- Second Slide -->
                <div class="item">
                    <img src="slide5.jpg" alt="Chicago" class="snap">
                    <div class="carousel-caption">
                        <img src="LOGO2.png" class="logo">
                        <p>SAINT TERESA</p>
                    </div>
                </div>
    
                <!-- Third Slide -->
                <div class="item">
                    <img src="slide6.jpg" alt="New York" class="snap">
                    <div class="carousel-caption">
                        <img src="LOGO2.png" class="logo">
                        <p>SAINT TERESA</p>
                    </div>
                </div>

                <!-- Fourth Slide -->
                <div class="item">
                    <img src="slide7.jpg" alt="New York" class="snap">
                    <div class="carousel-caption">
                        <img src="LOGO2.png" class="logo">
                        <p>SAINT TERESA</p>
                    </div>
                </div>
            </div>
    
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="bar">
        <div class="dept">
                <button class="head dpt">DEPARTMENT</button>
                    <div class="dept-content">
                    <div>
                        <p class="heading">BACHLOR OF TECHNOLOGY</p>
                        <a href="btech.html">CHEMICAL</a>
                        <a href="btech.html">CIVIL</a>
                        <a href="btech.html">COMPUTER</a>
                        <a href="btech.html">FOOD TECHNOLOGY</a>
                        <a href="btech.html">ELECTRONIC & COMMUNICATION ENGINEERING</a>
                        <a href="btech.html">ELECTRICAL & ELECTRONICS ENGINEERING</a>
                        <a href="btech.html">INFORMATION TECHNOLOGY</a>
                        <a href="btech.html">MACHANICAL ENGINEERING (AUTOMOBILE)</a>
                        <a href="btech.html">METALLURGICAL & MATERIALS ENGINEERING</a>
                    </div>
                    <div>
                        <p class="heading">MASTERS OF COMPUTER APPLICATION</p>
                        <a href="mca.html">INTEGRATED MCA (5 YEARS)</a>
                        <a href="mca.html">REGULAR MCA (2 YEARS)</a>
                        <p class="heading">BASIC SCIENCE</p>
                        <p class="heading">HUMANITIES</p>
                    </div>
                    </div>   
            </div>
            <div class="campus">
                <button class="head camp">CAMPUS</button>
                    <div class="campus-content">
                        <div>
                            <a href="#">STARTUPS</a>
                            <a href="#">LABS AND WORKSHOP</a>
                            <a href="#facilities">LIBRARY</a>
                            <a href="#facilities">HOSTEL & MESS</a>
                            <a href="#">STUDENT AFFAIRS</a>
                            <a href="#facilities">OTHER AMENITIES</a>
                        </div>
                    </div>
            </div>
            <div class="event">
                <button class="head evnt">EVENTS</button>
                    <div class="event-content">
                        <div>
                            <a href="#">SPORTS</a>
                            <a href="#">CULTURALS</a>
                            <a href="#">TECH FEST</a>
                            <a href="#">HACKATHON</a>
                        </div>
                    </div>
            </div>
            <div class="aboutt">
                <button class="head aboutt">ABOUT</button>
                    <div class="aboutt-content">
                        <div>
                            <a href="#about">COLLEGE</a>
                            <a href="#review">REVIEW</a>
                            <a href="staff.php">STAFF</a>
                            <a href="placement.html">PLACEMENT</a>
                            <a href="#">CONTACT US</a>
                        </div>
                    </div>
            </div>
    </div>
    </div>
    <div class="life">
        <h2>Welcome <br> Out of the cave,<br>  My friend. Its a bit <br> Colder out here,<br> 
            But the stars are just Beautiful<br>-Plato</h2>
        <div class="counter-up">
            <div class="counter">
                <div class="box">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-luggage-fill" viewBox="0 0 16 16">
                        <path d="M2 1.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V5h.5A1.5 1.5 0 0 1 8 6.5V7H7v-.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H4v1H2.5v.25a.75.75 0 0 1-1.5 0v-.335A1.5 1.5 0 0 1 0 13.5v-7A1.5 1.5 0 0 1 1.5 5H2V1.5ZM3 5h2V2H3v3Z"/>
                        <path d="M2.5 7a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm10 1v-.5A1.5 1.5 0 0 0 11 6h-1a1.5 1.5 0 0 0-1.5 1.5V8H8v8h5V8h-.5ZM10 7h1a.5.5 0 0 1 .5.5V8h-2v-.5A.5.5 0 0 1 10 7ZM5 9.5A1.5 1.5 0 0 1 6.5 8H7v8h-.5A1.5 1.5 0 0 1 5 14.5v-5Zm9 6.5V8h.5A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5H14Z"/>
                      </svg></div>
                    <div class="count">17924</div>
                    <div class="text">Placement</div>
                </div>
                <div class="box">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
                      </svg></div>
                    <div class="count">18762</div>
                    <div class="text">No Of Students</div>
                </div>
                <div class="box">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                      </svg></div>
                    <div class="count">70</div>
                    <div class="text">Awards</div>
                </div>
            </div>
        </div>
    </div>
    <div class="empty"></div>
    <section class="abt" id="about">
        <div class="in">
        <h1>Our Global Campus</h1>
        <p class="para">Saint Teresa's Global Campus: Uniting minds worldwide, 
            fostering diversity, and shaping future leaders. Explore 
            endless possibilities!</p>
        </div>
    <div class="about reveal">
        <video width="400" loop autoplay muted poster>
            <source src="college.mp4" type="video/mp4">
            <source src="college.mp4" type="video/mp4">
            Your browser does not support HTML video.
        </video> 
        <p>
            The "Saint Teresa Engineering College," established in 1906 as the Imperial
             Engineering Research Institute, is a pivotal institution in engineering research. 
             Its historical journey reflects the evolution of scientific engineering in India and
            the subcontinent. Alongside research initiatives, the institute plays a crucial role 
            in training engineers and technologists. Post-independence, it was renamed Saint Teresa 
            Engineering College. In 1988, it came under the All India Council for Technical Education 
            (AICTE), emphasizing a commitment to advancing technical education and research in the country.
            After India gained independence, the institution was appropriately renamed as Saint Teresa Engineering
            College and Colleges. In 1988, Saint Teresa Engineering College and its affiliated research centers
            were brought under the administrative umbrella of the All India Council for Technical Education
            (AICTE) within the Ministry of Education, Government of India. This transition underscored a 
            continued commitment to advancing technical education and research in the country
        </p>
        </div>
    </section>
    <section class="campus-loc">
        <h1>Our Global Campus</h1>
        <p>Saint Teresa's Global Campus: Uniting minds worldwide, 
            fostering diversity, and shaping future leaders. Explore 
            endless possibilities!</p>
    <div class="row reveal">
        <div class="campus-col">
            <img src="london.png">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="newyork.png">
            <div class="layer">
                <h3>NEW-YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="washington.png">
            <div class="layer">
                <h3>WASHINGTON</h3>
            </div>
        </div>
    </div>
    </section>
    <section class="facilities" id="facilities">
        <h1>Our Facilities</h1>
        <div class="row reveal">
            <div class="facilities-col">
                <img src="library.png">
                <h3>World Class Library</h3>
                <p>Unleash intellectual curiosity in 
                our world-class college library—an 
                inspiring space for limitless learning and discovery.</p>
            </div>
            <div class="facilities-col">
                <img src="basketball.png">
                <h3>Largest Indoor Stadium</h3>
                <p>Step into awe-inspiring greatness at the largest indoor
                    stadium—a colossal arena hosting thrilling events and 
                    unforgettable experiences.</p>
            </div>
            <div class="facilities-col">
                <img src="cafeteria.png">
                <h3 id="review">Wide Variety Of Cusine</h3>
                <p>Savor a culinary journey in our cafeteria, 
                    boasting a diverse array of cuisines—indulge
                     in flavorsome delights daily.</p>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <h1>What Our Student Says</h1>
        <p>Dive into the student hub—where
            diverse voices converge, sharing 
            perspectives that shape our vibrant community</p>
        <div class="rows">
            <div class="testimonial-col">
                <img src="p1.jpg">
                <div>
                <p>"Proudly thriving in a hub of camaraderie, academic excellence, and personal growth—grateful for this transformative journey!"</p>
                <h3>-Sarath</h3>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="p2.jpg">
                <div>
                <p>"Empowering atmosphere, diverse community, inspiring mentors, 
                    and endless opportunities for growth. Grateful for my journey!"</p>
                <h3>-Shradha P</h3>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="p3.jpg">
                <div>
                <p>"Sculpting my future at Saint Teresa—grateful for nurturing, supportive, 
                    transformative experiences. Enriching journey, forever thankful!"</p>
                <h3>-Shewtha</h3>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="cta" style="color: #fff;">
        <h2>Ranked 7th best university in India by NIRF 2023,<br> St Teresa is a NAAC A++ grade university <br> spread across 8 campuses in 5 states.        </h2>
        <button class="btn draw-border"><a href="register.html">Apply Now</a></button>
    </section>
    <section class="admin">
        <a href="admin.php" class="adminbtn">Login</a>
    </section>
    <script>
         $(document).ready(function(){
    $('.count').counterUp({
      delay: 5,
      time: 1200
    });
  });

  window.addEventListener('scroll', reveal);
  function reveal(){
    var reveals=document.querySelectorAll('.reveal');
    for(var i=0;i<reveals.length;i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;
        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
  }
    </script>
</body>
</html>
<?php
if(isset($_SESSION['user'])){
    if($_SESSION['user']==1){
        $_SESSION['user']=0;
        echo'.
        <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Registration Successful",
            showConfirmButton: false,
            timer: 1900
          });
        </script>
        ' ;
    }
}
?>