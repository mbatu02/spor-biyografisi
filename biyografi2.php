<html>
<head>
    <title>İ.H SPOR HİKAYESİ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wdith, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<style type="text/css">
    * {
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}

.banner {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.75)), url(B.jpeg);
    background-size: cover;
    background-position: center-top;
}

/* Navbar */

.navbar {
    width: 90%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar h1 {
    list-style: none;
    display: inline-block;
    margin: 15px -15px;
    position: relative;
    font-family: 'Raleway', sans-serif;
    letter-spacing: .05em;
    color: #faf9f6;
    font-size: 20px;
    font-weight: 200;
}

.navbar ul li {
    list-style: none;
    display: inline-block;
    margin: 20px 20px;
    position: relative;
    font-family: 'Raleway', sans-serif;
    letter-spacing: .2em;
}

.navbar ul li a {
    text-decoration: none;
    color: #faf9f6;
}

.navbar ul li::after {
    content: '';
    height: 3px;
    width: 0%;
    background: #ffb347;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;

}

.navbar ul li:hover::after {
    width: 100%;
}

.navbar ul li a:hover {
    text-decoration: none;
    color: #ffb347;
    transition: 0.5s;
}

/* Banner Content */

.content {
    width: 100%;
    position: relative;
    top: 35%;
    transform: translateY(-50%);
    text-align: center;
    color: #faf9f6;
    

}

.content h1 {
    font-size: 8vw;
    margin-top: 80px;
    font-family: 'Raleway', sans-serif;
    font-weight: 200;
    margin-bottom: -10px;
   
}
.content p {
    font-size: 1.5vw;
    margin: 0px auto;
    font-weight: 200;
    line-height: 25px;
    font-family: 'Albert Sans', sans-serif;
    font-style: italic;
    
}

/* Orange bar */

.break {
   border-top: 8px solid #ffb347;
   border-bottom: 2px solid #fff;
   box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}


/* Body */

body {
    width: 100%;
    height: 100vh;
    background: #faf9f6;
}


.timeline-title {
    display: block;
    text-align: center;
    font-family: 'Raleway', sans-serif;
    font-weight: 200;
    padding-top: 10px;
    padding-bottom: 20px;
    font-size: 40px;
    text-shadow: -3px 3px #fff, -2px 2px #fff, -1px 1px #fff;
}

.timeline-background {
    width: 60%;
    height: 250%;
    background-color: #fff;
    border: 2px;
    border-radius: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    position: relative;
    left: 20%;
    padding: 0px 0;
}

.timeline-background .timeline {
    margin: auto;
    width: 70%;
    position: relative;
    left: 15px;
}

.timeline-background .timeline ul {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
}

.timeline-background .timeline ul:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0px;
    height: 100%;
    border: 1px dashed #FDD193;
}

.timeline-background .timeline ul li {
    margin: 50px 0px 50px 60px;
    position: relative;
}

.timeline-background .timeline ul li > span {
    content: '';
    position: absolute;
    top: 0;
    left: -60px;
    width: 0px;
    height: 100%;
    border: 1px solid #ffb347;
}

.timeline-background .timeline ul li > span:before, .timeline ul li > span:after {
    content: '';
    width: 12px;
    height: 12px;
    border: 2px solid #ffb347;
    position: absolute;
    border-radius: 50%;
    left: -8px;
    background: #fff;
}

.timeline-background .timeline ul li > span:before {
    top: -5px;
    background: #fff;
}

.timeline-background .timeline ul li > span:after {
    top: 90%;
}

.timeline-background .timeline ul li .year span {
    position: absolute;
    text-align: right;
    left: -125px;
    top: 40%;
    width: 30px;
}


.event, .date, .year {
    font-family: 'Albert Sans', sans-serif;
}

.year {
    font-weight: 500;
    font-size: 20px;
    font-style: italic;
    text-shadow: -1px 1px 1px #faf9f6, -2px 2px .5px #ffb347;
}

.event-title {
    font-size: 20px;
    font-weight: 500;
    font-family: 'Raleway', sans-serif;
    letter-spacing: .05em;
    padding-top: 10px;
}

.event {
    font-size: 18px;
    font-weight: 350;
    padding-bottom: 6px;
    padding-top: 8px;
}

.date {
    font-size: 14px;
    color: #666;
    font-style: italic;
}

/* Gallery */

#gallery h1 {
    text-align: center;
    margin-top: 60px;
    margin-bottom: 20px;
    font-size: 40px;
    font-family: 'Raleway', sans-serif;
    font-weight: 200;
    text-shadow: -3px 3px #fff, -2px 2px #fff, -1px 1px #fff;
}

.gallery {
    height: 510px;
    width: 80vw;
    display: flex;
    margin: 10px auto 0;
    box-sizing: border-box;
    
}

.image-box {
    margin 0 1%;
    flex-grow: 1;
    flex-basis: 0;
    transition: .5s;
}

.image-box img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    transition: .5s;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    border: 5px solid #fff;
}

.image-box:hover {
    flex-basis: 50%;
    flex-grow: 1;
}

.first img {
    border-radius: 15px 0 0 15px;
}

.last img {
    border-radius: 0 15px 15px 0;
}

.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 0%; /* 8:5 Aspect Ratio */
}

.responsive-iframe {
  position: relative;
  top: 0;
  left: 150;
  bottom: 0;
  right: 0;
  width: 80%;
  height: 50%;
  border: none;
}

.footer {
    bottom: 0%;
    width: 100%;
    height: 10rem;
    background: #ffb347;
    margin-top: 75px;
    border-top: 4px solid #fff;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    display: block;
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
    color: white;
    font-family: 'Raleway', sans-serif;
}

.footer p {
    margin: 4px;
    text-align: right;
  
}

.footer a {
    text-decoration-style: unset;
    color: white;
    font-size: 3rem;
    font-weight: 400;
    text-align: right;
    padding-top: 0px;
}

.footer div:last-of-type {
    text-align: right;
}

.footer a:hover {
    color: black;
    transition: .3s;
}




.timeline h1 {
    display: block;
    text-align: center;
    font-family: 'Raleway', sans-serif;
    font-size: 2vw;
    font-weight: 200;
    color: #000000;
    margin: 10px;
    padding-top: 40px; 

}

.timeline .wrapper {
    width: 50%;
    height: 700px;
    background-color: #faf9f6;
    border: 2px;
    border-radius: 15px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    margin: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    font-family: 'Raleway', sans-serif;

}

.timeline .wrapper .card {
    margin: 0px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
    
}

.timeline .wrapper .card .date {
    margin: 0px 0 0 75px;
}

.timeline .wrapper .card .event {
    margin: 0px 0 00px 150px;
}

.line {
    width: 0%;
    height: 500px;
    position: absolute;
    top: 985px;
    left: 570px;
    border: 2px solid rgb(215, 215, 215);
    border-radius: 50px;
}


</style>
</head>
<body>
    <header>
        <div class="banner" id="banner">
            <div class="navbar">
                <h1 id="title">Arm Wrestling</h1>
                <ul>
                    <li><a href="#timeline">HAYATIM</a></li>
                    <li><a href="#gallery">GALERİ</a></li>
                    <li><a href="#footer">BAŞARILARIM</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>İBRAHİM HAKTANKAÇMAZ</h1>
                <p>1997</p>
            </div>
        </div>
    </header>
    <main>
        <div class="body" id="timeline">
            <hr class="break">
            <fieldset><h1 class="timeline-title">İBRAHİM'İN HAYAT ÇİZGİSİ</h1></fieldset>
            <div class="timeline-background">
                <div class="timeline">
                    <ul>
                        <li>
                            <span></span>
                            <div class="event-title">İBRAHİM is Born</div>
                            <div class="event">Şanlıurfa'da doğdum</div>
                            <div class="date">November 23, 1997</div>
                            <div class="year">
                                <span>1997</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">How Did İt Start</div>
                            <div class="event">Akrabalarım sayesinde kilo vermek için başladım</div>
                            <div class="date">September 14, 2010</div>
                            <div class="year">
                                <span>2010</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">When And Where Did i Get My First Medal</div>
                            <div class="event">İlk Madalyam Güneydoğu Anadolu Bölgesi(GAP) 2.İlk</div>
                            <div class="date">April 15, 2012</div>
                            <div class="year">
                                <span>2012</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">When Did I First Start Arm Wrestling?</div>
                            <div class="event">2014 Ekim Ayında Bilek Güreşine Başladım</div>
                            <div class="date">October 20, 2014</div>
                            <div class="year">
                                <span>2014</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">First Arm Wrestling Title</div>
                            <div class="event">Liseler Arası Türkiye Şampiyonluğu</div>
                            <div class="date">2014 - 2015</div>
                            <div class="year">
                                <span>2015</span>
                            </div>
                        </li>
                        <li>
                            
                            <span></span>
                            <div class="event-title">Digital Underground</div>
                            <div class="event">6</div>
                            <div class="date">1990 - 1995</div>
                            <div class="year">
                                <span>1991</span>
                            </div>
                        </li>
                        <li>
                       <span></span>
                            <div class="event-title">Digital Underground</div>
                            <div class="event">6</div>
                            <div class="date">1990 - 1995</div>
                            <div class="year">
                                <span>1991</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">Digital Underground</div>
                            <div class="event">6</div>
                            <div class="date">1990 - 1995</div>
                            <div class="year">
                                <span>1991</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">Digital Underground</div>
                            <div class="event">6</div>
                            <div class="date">1990 - 1995</div>
                            <div class="year">
                                <span>1991</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="event-title">Digital Underground</div>
                            <div class="event">6</div>
                            <div class="date">1990 - 1995</div>
                            <div class="year">
                                <span>1991</span>
                            </div>
                        </li>
                        <li>
        
                           
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div id="gallery">
            <fieldset><h1>Gallery</h1></fieldset>
            <div class="gallery">
                <div class="image-box first">
                    <a href="aa.php" target="_blank"><img src="1.jpeg"></a>
                </div>
                <div class="image-box">
                    <img src="2.jpeg">
                </div>
                <div class="image-box">
                    <img src="3.jpeg">
                </div>
                <div class="image-box">
                    <img src="4.jpeg">
                </div>
                <div class="image-box last">
                    <img src="d.jpeg">
                </div> 
                <div class="image-box last">
                    <img src="6.jpeg">
                </div> 
                <div class="image-box last">
                    <img src="7.jpeg">
                </div> 
                <div class="image-box last">
                    <img src="5.jpeg">
                </div> 
                <div class="image-box last">
                    <img src="f.jpeg">
                </div> 
                <div class="image-box last">
                    <img src="c.jpeg">
                </div> 
            </div>
        </div>
        
    </main>
<br><br>
<h3>55.50</h3>
<div class="container"> 
  <iframe class="responsive-iframe" src="x.mp4"></iframe>
</div>
<hr>
<div class="container"> 
  <iframe class="responsive-iframe" source src="https://www.youtube.com/watch?v=n7_ObtKRZfA" type="www.youtube.com"></iframe>
</div>
    <footer>
        <div class="footer" id="footer">
            <div>
         
                <p><a href="#banner">Go to Top</a></p>

              FACEBOOK<a href="https://www.facebook.com/ibrahim.haktankacmaz1" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
              INSTGRAM<a href="https://instagram.com/ibrahimhaktankacmaz?igshid=YmMyMTA2M2Y=" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
              TWITTER<a href="https://tr-tr.facebook.com/" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
         
            </div>


    </footer>

</div>
</body>
</html>
