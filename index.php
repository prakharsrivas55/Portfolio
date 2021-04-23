<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="site-main-wrapper">
        <button class="hamberger">
            <img src="/images/hamberger.svg" alt="">
        </button>
    
    <div class="mobile-nav">
        <button class="times"><img src="./images/times.svg"> </button>
        <ul>
           <li><a href="#home">Home</a></li> 
           <li><a href="#about">About</a></li> 
           <li><a href="#skills">Skills</a></li> 
           <li><a href="#awards">Awards</a></li> 
           <li><a href="#contact"> <button  class= "btn btn-primary">Contact</button></a></li>
        </ul>
    </div>
        <header>
            <div class="container">
            <nav id="main-nav" class="flex items-center justify-between">
                <div class="left flex items-center ">
                    <div class="branding">
                        <img src="./images/logo.svg" alt="">
                    </div>
                    <div>
                        
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#skills">Skills</a>
                        <a href="#awards">Awards</a>
                        
                    </div>
                </div>
    
                <div class="right ">
                
                    <a href="#contact"> <button  class= "btn btn-primary">Contact</button></a>
                
                </div>
            </nav>
            <div class= "hero flex items-center justify-between">
                <div class="left flex 1 flex justify-center">
                    <img src="./images/p.png" alt="";>
                </div>
                <div class="right flex-1 ">
                    
                    
                <h6>Prakhar Srivastava</h6>
                <p>I am a <span> Web Developer</span> from Lucknow, India. I am passionate about building excellent websites and I enjoyed turning complex problems into simple, beautiful and innovative.</p>
                <div>
                    <a href="/images/My Resume.pdf">
                <button class="btn btn-secondary"> DOWNLOAD CV</button>
            </a>
            </div>
     
            </div>
        </div>
        </div>
        </header>
    
        <section id="about"class="about">
            <div class="container flex items-center about-inner-wrap">
                <div class="flex-1" >
                    <img class="about-me-img" src="./images/about.jpg" alt="">
                </div>
            <div class="flex-1 right" >
            <h1>About <span>Me</span></h1>
            <h2>Hello I'm Prakhar Srivastava.</h2>
            <p>People find me to be an upbeat, self-motivated team player with excellent communication skills. I am pursuing my Bachelor's degree in the field of ECE. From the past I have been working on Web development, Internet of things, Robotics and many other stuffs. I enjoy meeting new people and finding ways to help them.</p>
            <div class="social">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=918317076225&text=Hi%20there!"><img src="./images/whatsapp.svg" alt=""></a>
                <a target="_blank" href="https://www.linkedin.com/in/prakharsrivas/"><img src="./images/linkedin.svg" alt=""></a>
                <a target="_blank" href="https://www.instagram.com/dark_liders_pros/"><img src="./images/instagram.svg" alt=""></a>
                <a href="#"><img src="./images/twitter.png" alt=""></a>
                
            </div>
        </div>
        </section>
        <section id="skills"class="services">
            <div class="container">
                <h1 class="section-heading"><span>My</span> Skills</h1>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="./images/web-development.png" alt="">
                        <h2>Web Developer </h2>
                        <p>HTML</p><p>CSS</p><p>Javascript</p>
                        
                    </div>
                    <div class="card">
                        <img src="./images/IOT.png" alt="">
                        <h2>Internet Of Things</h2>
                        <p>Arduino</p><p>RasPi</p><p>NodeMCU</p>
    
                    </div>
                    <div class="card">
                        <img src="./images/Language.png" alt="">
                        <h2>Languages</h2>
                        <p>Java</p><p>C++</p><p>Python</p>
    
                    </div>
                    <div class="card">
                        <img src="./images/Graphic design.png" alt="">
                        <h2>Graphic Design</h2>
                        <p>Adobe Photoshop</p><p>Adobe Illustrator</p>
    
                    </div>
                    <div class="card">
                        <img src="./images/vhdl.png" alt="">
                        <h2>VHDL</h2>
                        <p>Design</p><p>Simulation</p>
                    </div>
                    <div class="card">
                        <img src="./images/cyber-security.png" alt="">
                        <h2>Cisco Cyber Security</h2>
                        <p>CyberSecurity Ethics</p><p>CyberSecurity Essentials</p><p>Packet Tracer</p>
    
                    </div>
                </div>
            </div>
        </section>
        
        <section class="Freelancer">
            <h1>I am Available for Freelance.</h1>
            <p>We provide high standard clean website for business solution</p>
            <a href="/images/My Resume.pdf">
            <button class=" btn btn-primary">DOWNLOAD CV</button>
        </a>
        </section>
        <section id="awards"class="Awards">
            <div class="container">
                <h1 class="section-heading-award"><span>Awards</span> and<span> Certifications</span></h1>
                <div class="slider">
                    <div class="slide">
                        <img  src="./images/ict.png" alt="">
                        <h2><span>1st</span> Rank in IOT conducted by EICT Academy at <span>IIT KANPUR</span></h2>
                    
                    </div>
    
                    <div class="slide">
                        <img  src="./images/solar cell.png" alt="">
                        <h2>Solar Cell Training, <span>Bennett University</span></h2>
                    
                    </div>
    
                    
                </div>
                <div class="slider-dots"></div>
            </div>
        </section>
        <section id="contact"class="contact">
            <div class="container">
                <h1 class="section-heading">Contact <span>Us</span><span</h1>
            <div class="card-wrapper">
                <div class="card">
                <img src="./images/smartphone.png" alt="">
                <h1>Call Me on</h1>
                <h6>8317076225</h6>
            </div>
    
            <div class="card">
                <img src="./images/mail.png" alt="">
                <h1>Email Me </h1>
                <h6>prakharsrivas55gmail.com</h6>
            </div>
    
            <div class="card">
                <img src="./images/address.png" alt="">
                <h1>Address</h1>
                <h6>Lucknow, India</h6>
            </div>
    
            
        </section>
        <footer>
            <p>Created by Prakhar Srivastava. © 2021</p>
        </footer>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>