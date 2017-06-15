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
<?php  
$conn = mysqli_connect("localhost","root","","portsite");
$message="";

?>  
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
                    <a class="mdl-navigation__link " href="index.php">Portfolio</a>
                    <a class="mdl-navigation__link" href="blog.php">Blog</a>
                    <a class="mdl-navigation__link" href="about.php">Resume</a>
                    <a class="mdl-navigation__link is-active" href="contact.php">Contact</a>
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
            <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Interested? Reach me through</h2>
                    </div>
                    <!--<div class="mdl-card__media">
                        <img class="article-image" src=" images/contact-image.jpg" border="0" alt="">
                    </div>-->
                    <div class="mdl-card__supporting-text">
                        <center><p>
                          
							<!--<li><a href="mailto:gautamsingh722@gmail.com" text-decoration="none">Email</a></li>
							<li><a href="http://www.facebook.com/gautam.ngs" text-decoration="none">Facebook</a></li>
							<li><a href="https://www.linkedin.com/in/gautam-kumar-10100a116/" text-decoration="none">LinkedIn</a></li>
							<li><a href="https://github.com/gautamsingh722/" text-decoration="none">Github</a></li>-->
							<a href="mailto:gautamsingh722@gmail.com" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab">
									<i class="mdi mdi-gmail"></i>
							</button></a>
							<a href="http://www.facebook.com/gautam.ngs" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab ">
									<i class="mdi mdi-facebook"></i>
							</button></a>
							<a href="https://www.linkedin.com/in/gautam-kumar-10100a116/" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab ">
									<i class="mdi mdi-linkedin"></i>
							</button></a>
							<a href="https://github.com/gautamsingh722/" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab ">
									<i class="mdi mdi-github-circle"></i>
							</button></a>
						  
                        </p></center>
					</div>
					<div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Send in your info</h2>
                    </div>
					<div class="mdl-card__supporting-text">
                        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" name="Name">
                                <label class="mdl-textfield__label" for="Name">Name...</label>
                                <span class="mdl-textfield__error">Letters and spaces only</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="Email">
                                <label class="mdl-textfield__label" for="Email">Email...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows="5" name="note"></textarea>
                                <label class="mdl-textfield__label" for="note">Enter note</label>
                            </div>
                            <p>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="login">
                                    Submit
                                </button>
                            </p>
							<p>
							<?php echo $message;?>
							</p>
                        </form>
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
               <a href="mailto:gautamsingh722@gmail.com" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
								<i class="mdi mdi-gmail"></i>
				</button></a>
               <a href="https://www.linkedin.com/in/gautam-kumar-10100a116/" target="_blank"><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
								<i class="mdi mdi-linkedin"></i>
				</button></a>
            </div>
         </footer>
        </main>
    </div>
	<?php
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $name = $_POST['Name'];
     $email = $_POST['Email'];
	 $note = $_POST['note'];
	 if($name=="" && $email=="")
		{
			$message="Please enter credentials!";
		}
		else
		{
		$sql = " INSERT INTO visitor(NAME,EMAIL,NOTE) VALUES('$name','$email','$note')";
		if($conn->query($sql) === TRUE ) $message= "Registered Successfully";
		}
}
	
	
	
?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>
