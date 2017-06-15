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
                    <a class="mdl-navigation__link is-active" href="index.php">Portfolio</a>
                    <a class="mdl-navigation__link" href="blog.php">Blog</a>
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
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/alumni_nitjsr.png" border="0" alt="">
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><a href="http://www.alumni.nitjsr.ac.in">Alumni Relations Website of Nit Jamshedpur</a></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                       Developed the frontend part of the Alumni relations website of Nit Jamshedpur with our team. It is full of creativity and material design framework is used to get a modernized view.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#">Read more</a>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/culfest_nitjsr.png" border="0" alt="">
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><a href="http://www.culfest.co.in">Culfest 2017 Website</a></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Designed the UI for this site and was the creative designer also.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#">Read more</a>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src="images/jsr.png" border="0" alt="">
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><a href="http://www.nitjsr.ac.in">NIT Jamshedpur Website</a></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Developed the website of my institute during the summer internship held in may-july 2016.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#">Read more</a>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/example-blog02.jpg" border="0" alt="">
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><a href="https://github.com/gautamsingh722/store-purchase-management-system">Store and purchase management system</a></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Developed the store and purchase management system of the student activity centre of my institute.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#">Read more</a>
                    </div>
                </div>
                
            </div>
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
