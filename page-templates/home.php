<?php
/**
 * Customized Template Name: Home Page Template
 *
 * Description: 
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header();
get_sidebar( 'mobile' ); ?>

<div id="primary" class="site-content frontpage">
  <div id="content" class="entry-content" role="main">
  <!--Hero Unit-->
    <div class="hero-unit">
      <h1>Jinhai Zhou</h1>
      <h3>A passionate and creative software engineer</h3>
    </div>
<!-- Tabs================================================== -->
<div class="tabbable">
<ul class="nav nav-tabs nav-pills" id="myTab">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li><a href="#resume" data-toggle="tab">Resume</a></li>
  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" >More <b class="caret"></b></a>
    	  <ul class="dropdown-menu" role="menu">
      	  <li><a href="#skills" data-toggle="tab">My skills</a></li>
      	  <li><a href="#hobbies" data-toggle="tab">My hobbies</a></li>
      	  <li><a href="#wish" data-toggle="tab">My wish list</a></li>
      	  <li class="divider"></li>
       	  <li><a href="#blogs" data-toggle="tab">Recommended Blogs</a></li>
    	  </ul>
  	</li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="home">
<!-- Carousel================================================== -->
          <section id="carousel">
            <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://www.jinhaizhou.com/wp-content/uploads/2016/03/betting_soft.png" width ="100%">
                    <div class="carousel-caption">
                      <h4>Sports Betting System</h4>
                      <p>Designed and developed the back end of a sports betting system, integrated a database using JDBC and SQL, tested the system by JUnit , redacted software engineering documents along the development process</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://www.jinhaizhou.com/wp-content/uploads/2016/03/c2w.png"  width ="100%">
                    <div class="carousel-caption">
                      <h4>Chat While Watching</h4>
                      <p>Redacted an application-layer protocol specification, implemented the protocol with a simple but reliable chat room application using Python and Python Twisted framework</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://www.jinhaizhou.com/wp-content/uploads/2016/03/3d_recognition.png"  width ="100%">
                    <div class="carousel-caption">
                      <h4>3D object recognition</h4>
                      <p>Contributed to an existing project which used Deep Learning for 3D object classification, modified the code in Matlab to classify customized 3D images captured by a Kinect camera</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
            </div>
<!-- Carousel================================================== -->
  </div>
  <div class="tab-pane fade in" id="profile">
  <!-- Profile================================================== -->
    <p>
    My name is Jinhai and I am currently a second year student at <a title="" href="https://en.wikipedia.org/wiki/%C3%89cole_nationale_sup%C3%A9rieure_des_t%C3%A9l%C3%A9communications_de_Bretagne" data-original-title="Telecom Bretagne (formerly known as ENST Bretagne) is one of the top French grande école and a high standard research centre providing high level training in Information Technologies and telecommunications. This grande école of engineering is located near Brest in Brittany." data-toggle="tooltip"> Telecom Bretagne</a> in France, majoring in Computer Science and Networks. I am interested in being a software engineer in future because I want to achieve something unusual that can improve our daily lives. To make my dream come true, I will begin with taking <a title="" href="http://stage.ooreka.fr/comprendre/annee-cesure"data-original-title="At French grande école, a year of caesura (Année césure) is a gap year between second year and third year, for the aim of doing some practical projects within the industrial world before graduation" data-toggle="tooltip">a year of caesura</a> in technology industry and making my first contribution to the development of industrial world as well as strengthen my skills of solving problems and skills of programing.
</p>
<!-- Profile More================================================== -->
<p class="center">
  <a class="btn" data-toggle="collapse" data-target="#toggle-demo">Click here to view more</a>
</p>
<div id="toggle-demo" class="collapse">
  <div class="hero-unit">
    <h2 class="center">My life path</h2>
    <p>
    Before I came to France, I studied at <a title="" href="https://en.wikipedia.org/wiki/Xidian_University"data-original-title="" data-toggle="tooltip">Xidian University</a>, involved in <a title="Click here to see more about this project, available only in Chinese" href="https://en.wikipedia.org/wiki/Xidian_University"data-original-title="" data-toggle="tooltip">Excellent Engineer Training Program</a>, so I have learned fundamental courses both in Computer Science, Electronic Engineering and Telecommunications. Among all the courses that I have taken, C Programming, Data Structure and Algorithms and Software Engineering were the three that I liked most. 
    </p>
    <p>
    The reason why I like programming so much lies in my passion of creating something out of nothing. I can clearly remembered that when I was at primary school, I used to spend several hours a day to create my own campaigns in the war3 editor and that’s also when I had my first contact with programming langue such as C and Delphi. As time goes by, my passion of creating grows stronger, when I was in Xidian University, I had participated several Mathematical Modeling Contests, including the <a title="" href="https://en.wikipedia.org/wiki/Mathematical_Contest_in_Modeling"data-original-title="The Mathematical Contest in Modeling (MCM) is a multi-day mathematics competition held annually in USA, during the first or second weekend in February, since 1985 by COMAP" data-toggle="tooltip">MCM</a> with my teammates, finally, we had brilliant results from University level prize to National level prize. 
    </p>
    <p>
    Last year, my focus turned on Machine Learning and I studied it on Coursera. Furthermore, last semester, I had a chance to follow an experimental course of research with researchers of Telecom Bretagne. I am always keen to learning something new and thus creating something new, and that’s one reason why I open this personal site.
    </p>
  </div>
</div>
<!-- Profile More================================================== -->
<!-- Profile================================================== -->
<!-- Resume================================================== -->
  </div>
  <div class="tab-pane fade in" id="resume">
    <H3>Resume</H3>
    <p>For my resume, please go to:</p>
    <p><a href="https://fr.linkedin.com/in/jinhaizhou"><img src="https://www.linkedin.com/scds/common/u/images/logos/logo_linkedin_56x14.png" alt=""></a>
  </div>
<!-- Resume================================================== -->
<!-- More================================================== -->
 <!-- Skills================================================== -->
  <div id="skills" class="tab-pane">
    <h3 class="center">My Skills</h3>
    <h4>Programming Languages</h4>

    <div class="row-fluid">
    <div class="span6">
        <p>C</p>
        <div class="progress progress-striped"><div class="bar" style="width: 50%;"></div></div>
    </div>
    <div class="span6">
        <p>C++</p>
        <div class="progress progress-striped"><div class="bar" style="width: 40%;"></div></div>
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
        <p>Java</p>
        <div class="progress progress-striped active"><div class="bar" style="width: 85%;"></div></div>
    </div>
    <div class="span6">
        <p>Python</p>
        <div class="progress progress-striped active"><div class="bar" style="width: 70%;"></div></div>
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
        <p>Matlab</p>
        <div class="progress progress-striped active"><div class="bar" style="width: 80%;"></div></div>
    </div>
    <div class="span6">
        <p>PHP</p>
        <div class="progress progress-striped active"><div class="bar" style="width: 20%;"></div></div>
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
        <p>HTML</p>
        <div class="progress progress-striped active"><div class="bar" style="width: 20%;"></div></div>
    </div>
    <div class="span6">
        <p>Latex</p>
        <div class="progress progress-striped"><div class="bar" style="width: 50%;"></div></div>
    </div>
    </div>

    <h4>Systems &amp; Software</h4>

    <div class="row-fluid">
    <div class="span6">
        <p>Android Studio</p>
        <div class="progress progress-striped active"><div class="bar bar-success" style="width: 40%;"></div></div>
    </div>
    <div class="span6">
        <p>Linux Ubuntu</p>
        <div class="progress progress-striped active"><div class="bar bar-success" style="width: 40%;"></div></div>
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
        <p>Git/SVN</p>
        <div class="progress progress-striped"><div class="bar bar-success" style="width: 95%;"></div></div>
    </div>
    <div class="span6">
        <p>Eclipse</p>
        <div class="progress progress-striped"><div class="bar bar-success" style="width: 70%;"></div></div>
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
        <p>Photoshop</p>
        <div class="progress progress-striped"><div class="bar bar-success" style="width: 75%;"></div></div>
    </div>
    <div class="span6">
        <p>Premiere</p>
        <div class="progress progress-striped active"><div class="bar bar-success" style="width: 10%;"></div></div>
    </div>
    </div>

    <h4>Languages</h4>

    <div class="row-fluid">
    <div class="span6">
        <p>Chinese</p>
        <div class="progress progress-striped active"><div class="bar bar-warning" style="width: 95%;"></div></div>
    </div>
    <div class="span6">
        <p>English</p>
        <div class="progress progress-striped active"><div class="bar bar-warning" style="width: 80%;"></div></div>
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
        <p>French</p>
        <div class="progress progress-striped active"><div class="bar bar-warning" style="width: 75%;"></div></div>
    </div>
    <div class="span6">
        <p>Janpanese</p>
        <div class="progress progress-striped active"><div class="bar bar-warning" style="width: 20%;"></div></div>
    </div>
    </div>


  
  </div>
 <!-- Skills================================================== -->
 <!-- Hobbies================================================== -->
  <div id="hobbies" class="tab-pane">
    <h3 class="center">My Hobbies</h3>

    <div class="row-fluid">
    <div class="span6">
      <h4>Skiing</h4>
      <p>Vitesse Max Achieved 71.64 km/h; Altitude Maxi Reached 2462.0 m</p>
    </div>
    <div class="span6">
       <h4>Skating</h4>
      <p>Practice from the age of 8, still enjoying inline skating</p>   
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
      <h4>Jogging</h4>
      <p>At least 10 km a week, aim to achieve a marathon</p>
    </div>
    <div class="span6">
       <h4>Photography</h4>
      <p>Ever possessed a Canon EOS 60D, now a GoPro and being a GoProer</p>   
    </div>
    </div>


  </div>
<!-- Hobbies================================================== -->
<!-- Wish================================================== -->
  <div id="wish" class="tab-pane">
    <h3 class="center">My wish list</h3>

    <div class="row-fluid">
    <div class="span6">
      <h4>The Half-Marathon Runner <span class="badge badge-important">not achieved</span></h4>
      <p>Achieve a half-marathon</p>
    </div>
    <div class="span6">
       <h4>The Blog Writer <span class="badge badge-success">achieved</span></h4>
      <p>Open a blogger and write technical posts weekly</p>   
    </div>
    </div>

  </div>
<!-- Wish================================================== -->
<!-- Blogs================================================== -->
  <div id="blogs" class="tab-pane">
    <h3 class="center">Recommended Blogs</h3>


    <div class="row-fluid">
    <div class="span6">
      <h4><a title="" href="http://www.sunbotu.com/">Botu Sun</a></h4>
      <p>Graduated from Telecom Bretagne in 2015, now works as Customer Solutions Engineer at Google</p>
    </div>
    <div class="span6">
       <h4><a title="" href="http://www.kai-li.co.nf/">Kai Li</a></h4>
      <p>Graduated from Telecom Bretagne in 2015, now works as Junior Software Engineer at Amadeus IT Group</p>   
    </div>
    </div>

    <div class="row-fluid">
    <div class="span6">
      <h4><a title="" href="http://shidafu1992.blogspot.fr/">Dafu SHI</a></h4>
      <p>Enrolled in Telecom Bretagne in 2013, now in a year of caesura and works as Cloud Applications Software Engineer at Gemalto</p>
    </div>
    <div class="span6">
       <h4><a title="" href="http://cuijiwen.com/#/">Jiwen CUI</a></h4>
      <p>Enrolled in Telecom Bretagne in 2014, now in 2nd year of Msc</p>   
    </div>
    </div>

  </div>
<!-- Blogs================================================== -->  


  </div>
<!-- Tabs================================================== -->    

  </div>
</div>
<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>