<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>My portfolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<!-- Page styles -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <style type="text/css">
	
	.intro{
			text-align:left;
			min-height:90px;
			width:100%;}
			
	.shade{
			width:100%;
			background-color: lightgray;
			padding-bottom:3px;
			padding-top:3px;
			margin-bottom:10px;
		}
	.block{
		width:100%;
		margin-bottom:30px;
		}
			
	#highlight{
			font-size:13px;
			font-weight:bold;
			width:100%;}
			
	table {
		border-collapse: collapse;
		width:100%;
	}
	table, th, td {
		border: 1px solid black;
	}
	th{
		height:40px;
		background-color: lightgray;
	}
	#subpoint{
		margin:0px;
	}
	.resumetext{
	color:black;
	}
    </style>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">GOUTAM KUMAR</span>
                </span>
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link" href="index.php">Portfolio</a>
                    <a class="mdl-navigation__link" href="blog.php">Blog</a>
                    <a class="mdl-navigation__link is-active" href="about.php">Resume</a>
                    <a class="mdl-navigation__link" href="contact.php">Contact</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.php">Portfolio</a>
                <a class="mdl-navigation__link" href="blog.php">Blog</a>
                <a class="mdl-navigation__link" href="about.php">Resume</a>
                <a class="mdl-navigation__link" href="contact.php">Contact</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
			
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"></h2>
                    </div>
                    <div class="mdl-card__media">
                        <!--<img class="article-image" src=" images/about-header.jpg" border="0" alt="">-->
                    </div>

                    <div class=" mdl-card__supporting-text resumetext">
					<div class="intro">
					<span style="font-size:25px;font-weight:bold;">
					GOUTAM KUMAR <br /></span>
					<span style="font-size:15px;text-align:left;">
					Contact: 9693190466<br />
					E-mail: gautamsingh722@gmail.com<br /><br />
					</span>
					</div>
					
					<div class="block">
					<div class="shade">OBJECTIVE</div> 
					Willing to work in a challenging position
					with a growing Organization where I can utilize my technical
					and interpersonal skills to serve the organization
					and enhanced the same.
					</div>
					
					<div class="block">
					<div class="shade">ACADEMIC QUALIFICATION</div>
					<table>
						<tr>
							<th>EXAM/DEGREE</th>
							<th>YEAR</th>
							<th>NAME OF INSTITUTE</th>
							<th>UNIVERSITY/BOARD</th>
							<th>PERCENTAGE</th>
						</tr>
						<tr>
							<td>Bachelor of Technology</td>
							<td>2019</td>
							<td>National Institute of Technology, Jamshedpur</td>
							<td>National Institute of Technology, Jamshedpur</td>
							<td>9.15 cgpa</td>
						</tr>
						<tr>
							<td>12th Board</td>
							<td>2014</td>
							<td>Chinmaya Vidyalaya, Bokaro</td>
							<td>CBSE</td>
							<td>90.4</td>
						</tr>
						<tr>
							<td>10th Board</td>
							<td>2012</td>
							<td>GGPS, Bokaro</td>
							<td>CBSE</td>
							<td>10 cgpa</td>
						</tr>
					</table>
					</div>
					
					<div class="block">
					<div class="shade">TECHNICAL SKILL</div>
					<div id="highlight">Programming Languages:</div>
					<p id="subpoint">C,C++,JAVA</p>
					
					<div id="highlight">Web Technologies:</div>
					<p id="subpoint">HTML,CSS,Java Script,PHP</p>
					
					<div id="highlight">Databases:</div>
					<p id="subpoint">SQL Server 2000/2005/2008</p>
					</div>
					
					
					<div class="block">
					<div class="shade">PROJECTS AND INTERNSHIPS</div>
					<div id="highlight">Name:</div>
					<p id="subpoint">Summer Internship on Institute Website Development</p>
					
					<div id="highlight">Duration:</div>
					<p id="subpoint">May 23 to July 22, 2016</p>
					
					<div id="highlight">Team size:</div>
					<p id="subpoint">15</p>
					
					<div id="highlight">Description:</div>
					 <p id="subpoint">Developed the frontend and backend part of the website using Html,CSS,Javascript,SQL,PHP.</p>
					</div>
					
					<div class="block">
					<div class="shade">PERSONAL QUALITIES </div>
					<ul>
					<li>Proficient in developing Website using HTML, CSS, JAVASCRIPT, PHP, SQL</li>
					<li>Possess good analytical skills</li>
					<li>A quick learner</li>
					</ul>
					</div>
					
					
					<div class="block">
					<div class="shade">ACHIEVEMENT </div>					
					<ul>
					<li>Won Inter branch volleyball tournament in January 2017.</li>
					<li>Participated in All India Inter NIT Sports Meet held at NIT Suratkal during march 2017.</li>
					<li>Secured third position in Biped Robotics held at BIT SINDRI.</li>
					</ul>
					</div>	
					
					
					<div class="block">
					<div class="shade">EXTRA CURRICULAR ACTIVITIES</div>
					<ul>
						<li>Active Public Relations member of technical fest, OJASS NIT Jamshedpur.</li>
						<li>Volleyball and badminton player of Institute team.</li>
						<li>Model at Team Invincibles(Fashion team of NIT Jamshedpur).</li>
						
					</ul>
					</div>
					
					<div class="block">
					<div class="shade">POSITIONS OF RESPONSIBILITY</div>
					<ul>
						<li>Junior Head Boy of my school during class 10th.</li>
						<li>Platoon Commander of my school at Republic day parade.</li>
						<li>Sports and Discipline Incharge of student council in my senior secondary.</li>
						<li>Sports Secretary in Hostel Executive Council of Hostel C, NIT Jamshedpur.</li>
						<li>Coordinator at Sports meet'17 NIT Jamshedpur.</li>
					</ul>
					</div>
					
					<div class="block">
					<div class="shade">PERSONAL PROFILE </div>
					<div id="highlight">Nationality:</div>
					<p id="subpoint">Indian</p>
					
					<div id="highlight">Gender:</div>
					<p id="subpoint">Male</p>
					
					<div id="highlight">DOB:</div>
					<p id="subpoint">26th July 1996</p>
					
					<div id="highlight">Languages Known:</div>
					<p id="subpoint">English, Hindi & Bengali</p>
					
					<div id="highlight">Hobbies:</div>
					<p id="subpoint">Playing volleyball, Listening music, Internet surfing</p>
					</div>
					
				
					
					
				
					
					
                       
                    </div>
                </div>


            </div>
			
           <!-- <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Simple portfolio website</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                    </ul>
                </div>
            </footer>-->
			 <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer__left-section">
               <div class="mdl-logo">
                  Copyright @ me
               </div>
               <!--<ul class="mdl-mini-footer__link-list">
                  <li>Help</li>
                  <li><a href="#">Privacy and Terms</a></li>
                  <li><a href="#">User Agreement</a></li>
               </ul>-->
            </div>
            <div class="mdl-mini-footer__right-section">
               <a href="http://www.facebook.com/gautam.ngs" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
									<i class="mdi mdi-facebook"></i>
				</button></a>
               <a href="mailto:gautamsingh722@gmail.com" target="_top"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
								<i class="mdi mdi-gmail"></i>
				</button></a>
               <a href="https://www.linkedin.com/in/gautam-kumar-10100a116/" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
								<i class="mdi mdi-linkedin"></i>
				</button></a>
            </div>
         </footer>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script src="js/material.min.js"></script>
</body>

</html>
