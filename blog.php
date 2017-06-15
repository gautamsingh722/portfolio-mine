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
<link rel="stylesheet" href="css/materialdesignicons.min.css">
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
                    <a class="mdl-navigation__link  is-active" href="blog.php">Blog</a>
                    <a class="mdl-navigation__link" href="about.php">Resume</a>
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
                <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
                    <!--<div class="mdl-card__media mdl-cell mdl-cell--12-col-tablet">
                        <img class="article-image" src=" images/example-blog01.jpg" border="0" alt="">
                    </div>-->
					<div class="mdl-cell mdl-cell--12-col">
						<div class="mdl-cell mdl-cell--12-col">
						<img class="" src=" images/code_blog2.jpg" border="0" alt="" height="250px" width="100%">
						</div>
					</div>
                    <div class="mdl-cell mdl-cell--12-col">
                        <h2 class="mdl-card__title-text">For fellas stepping into coding world</h2>
                        <div class="mdl-card__supporting-text padding-top">
                            <span>Posted on March 22nd,2017</span>
                            <div id="tt1" class=" icon material-icons portfolio-share-btn">share</div>
                            <div class="mdl-tooltip" for="tt1">
                                Share via social media
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text no-left-padding">
                            <p>
							This blog is to help people who have just started competitive programming or in a plan to do so.<br><br>
							<b>Prerequisite:</b> Fundamentals of programming language either C/C++/JAVA.<br>
							Here we would focus on C++, because Java is bit slow, but can be usefull to handle big integers, also PYTHON becomes handy in such cases.<br>
							<br><strong>PARTICIPATION IS REQUIRED</strong><br>
							<ul>
							<li>Hackerearth<ul>
									<li>Here you would get all the problems topic wise</li>
									<li>Start reading the topics one by one and also solving the questions(firstly the easy ones).</li>
									<li>Once you complete this you are ready to solve more questions domain wise(see the next point).</li>
								</ul>
							</li>
							<li>SPOJ<ul>
									<li>Start with problems having maximum submissions. Firstly solve few problems (may be 15-20). Build some confidence. Then start following some good coders (check their initial submissions). Then start solving problems topic wise.</li>
									<li>Don't get stuck for too long initially. Google out your doubts and try to sort them out or you can discuss with someone (ONLY IN THE BEGINNING).</li>
									<li>Now you ready to face some online contests.</li>
								</ul>
							</li>
							<li>CODECHEF<ul>
									<li>Solve all the three monthly contests regularly </li>
									<li>Even if you are unable to code for a particular problem, read out the editorial and then solve and submit.</li>
									<li>This way you will build some confidence.(Proceed to next point).</li>
								</ul>
							</li>
							<li>Codeforces and Topcoder<ul>
									<li>Regularly give the short contests.</li>
									<li>If you are unable to solve similar type questions and its the time to go back to the basics (practice the topic well).</li>
								</ul>
							</li>
							</ul>
							
							<strong><u>Online Programming Contests</u>:</strong><br>

You write codes and submit them online, and then they are checked for various input cases.
<br><br>
<strong>Each Problem has constraints:</strong><br>
<ul>Constraints are properly analyzed before proceeding to code.

<li>Time Limit (The code should run within the given time limit, and for this we analyze the order and then proper algorithm is used)</li>
<li>Input constraints</li>
<li>Memory Limit (should be taken care of if we use huge amount of memory).</li>
</ul>

<strong>Sometimes we get other results than correct and wrong answer, here we study about it</strong>
<ul>
<li>Run Time Error </li>
<li>Segmentation fault ( accessing memory address that is not legal):
Declaring array of smaller size than required or trying to access -ve indices .
Declaring array of HUGE HUGE(more than 10^8 ints) size.
Dividing by Zero / Taking modulo with zero .</li>
<li>Compilation Error:
For rectifying this one must know the proper syntax of language that is being used to code.</li>
<li>Time Limit Exceed (TLE):
The program wasn't able to generate all outputs within the given time limit.
Proper order analysis must be done.
Always think of worst cases before writing code .
Sometimes a little optimizations are required and sometimes you really need a totally new and efficient algorithm.
"So whenever you are in doubt that your code will pass or not .Most of the time it won’t pass"(*correctly quoted by my brother) .



If we stuck anyway than check of what order the codes are that has already been accepted.</li>


<p>4 MB ~ array of size 10^6 . Or 2-d array of size 10^3*10^3<br>
Standard Memory limits are of Order of 256MB</p>
							
							<br>
						<strong>	INT OVERFLOW :</strong>
							Sum three numbers.<br>
							Constraints :<br>
							0 < a,b,c < 10^9<br>
						int main()<br>
						{<br>
							int a , b,c;<br>
							scanf(“%d %d %d”,&a,&b,&c);<br>
							int ans = a + b + c;<br>
							printf(“%d”,ans);<br>
							return 0;<br>
						}<br>


							This program won't give correct output for all cases as 3*10^9 cannot be stored in INTS you need long long int or unsigned int (4*10^9).<br>

							<br>
						<strong>Comparing Doubles :</strong>
int main()<br>
{<br>
float a ;<br>
scanf(“%f”,&a);<br>
if(a == 10 ) printf(“YES”);<br>
return 0;<br>
}<br>
float / double don’t have infinite precision . BEWARE ( 6/15 digit precision for them respectively)<br>
Try the following problem. 
<a href="http://www.spoj.com/problems/GAMES/">http://www.spoj.com/problems/GAMES/</a><br>
							
							
							
							</p>
                         
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Linux Basic Commands</h2>
                    </div>
                    <div class="mdl-card__media">
                        <a href="#"> <img class="article-image" src=" images/example-blog02.jpg" border="0" alt=""></a>
                    </div>
                    <div class="mdl-card__supporting-text no-bottom-padding">
                        <span>Posted 2 days ago</span>
                        <div id="tt2" class=" icon material-icons portfolio-share-btn">share</div>
                        <div class="mdl-tooltip" for="tt2">
                            Share via social media
                        </div>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>to be updated soon..</p>
                    </div>
                </div>
                
                
          
            </div>
           <!-- <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <ul type="none"><i class="mdi mdi-home"></i> <strong>Address</strong>
					<li>Quarter no- 3267</li>
					<li>Sector- 6/A</li>
					<li>Bokaro Steel City</li>
					</ul>
                </div>
                <div class="mdl-mini-footer__middle-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">
							 <div class="mdl-cell--1-col" >
								<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
									<i class="mdi mdi-facebook"></i>
								</button>
							</div>
						</a></li>
                        <li><a href="#">
							<div class="mdl-cell--1-col"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
								<i class="mdi mdi-gmail"></i>
							</button></div>
						</a></li>
						<li><a href="#">
							<div class="mdl-cell--1-col"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
								<i class="mdi mdi-linkedin"></i>
							</button></div>
						</a></li>
                    </ul>
                </div>
				<div class="mdl-mini-footer__right-section">
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
</body>

</html>
