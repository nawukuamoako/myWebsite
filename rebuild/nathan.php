<?php $word = "Nathan Awuku Amoako Portfolio";?>
<?php $style = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";?>
<?php $css= "css/nathan_home.css";?>
<?php $projects = "#myprojects";?>
<?php $contact = "#contactarea";?>


<?php include('head.php');?>
<body>
    <?php include('header.php'); ?>
    <section id="top" onclick="closeMenu()">
        <p> <div class="container"><img class="img" src="images/profilephoto.jpg" alt="Nathan Awuku Amoako">
        <div class="mid">
            <div class="txt">Nice 3 piece suit, right? <br>Yeah, it was a gift from my dad. <br>I love my dad and my mum.</div>
        </div>
        
    </div></p>
    <p>
        <a class="midfont"style="text-decoration: none;"href="about.html"> <span  class="biography" alt="About">Biography</a></span><br><span class="largefont">Nathan Awuku Amoako</span>
        <br>
        <a class="midfont">Graduate Student at Indiana State University</a></p>            
        
    </section>
    <main onclick="closeMenu()">
        <h2>What I do</h2>
        <div id="shape"><p><span class="circle"><i class="fa fa-code"></i> </span><br><br><br><br><b>Web Developer</b><br><p>With strong HTML/CSS and JavaScript skills. I currently serve as the website manager for the Bayh College of Education in ISU.</p></p></div>
        <div id="shape"><p><span class="circle"><i class="fa fa-graduation-cap"></i> </span><br><br><br><br><b>Graduate Student</b><br><p>Computer Science Master's student with interests in machine learning, artificial intelligence, voice recognition and software development.</p></p></div>
        <div id="shape"><p><span class="circle"><i class="fa fa-wrench"></i> </span><br><br><br><br><b>IT Support</b><br><p>Highly skilled Information Technology and Audio Visual technology specialist with over 6 years of freelance experience.</p></p></div>
    </main>
    
    
    
    
    <article id="myprojects" onclick="closeMenu()">    
        
    <h2> Projects I've Worked On</h2>
    
    <div class="slideshow-container">
        
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <a href="documents/AuthorKnn.html" target="_blank"><iframe src="documents/AuthorKnn.html" scrolling="no" ></iframe>
            <div class="text"><h3>Author Prediction</h3>Predicting the author of a written work...<br><br>(Click to view <i class="fa fa-external-link"></i>)</div></a>
        </div>
        
        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <a href="documents/SalesAnalysis.html" target="_blank"><iframe src="documents/SalesAnalysis.html" scrolling="no"></iframe>
            <div class="text"><h3>Sales Analysis</h3>Sales analysis using 12 months of business data...<br><br>(Click to view <i class="fa fa-external-link"></i>)</div></a>
        </div>
        
        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <a href="documents/LinearRegression.html" target="_blank"><iframe src="documents/LinearRegression.html" scrolling="no"></iframe>
            <div class="text"><h3>Linear Regression</h3>Relationship between human height and weight...<br><br>(Click to view <i class="fa fa-external-link"></i>)</div></a>
        </div>
        
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <a href="https://cs.indstate.edu/~cs60900/rage/rage.html" target="_blank"><iframe src="https://cs.indstate.edu/~cs60900/rage/rage.html" scrolling="no"></iframe>
                <div class="text"><h3>Rage Game</h3>Obstacle game developed with JavaScript language...<br><br>(Click to view <i class="fa fa-external-link"></i>)</div></a>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <a href="https://cs.indstate.edu/~cs60900/plain/plainsocial.html" target="_blank"><iframe src="https://cs.indstate.edu/~cs60900/plain/plainsocial.html" scrolling="no"></iframe>
                    <div class="text"><h3>Plain Social Media</h3>Interactive social media platform...<br><br>(Click to view <i class="fa fa-external-link"></i>)</div></a>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-chevron-left"></i></a>
                <a class="next" onclick="plusSlides(1)"><i class="fa fa-chevron-right"></i></a>
                
            </div>
            <br> </article>
            <main id="contactarea" onclick="closeMenu()">
                <script>
                    <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$Nameerror = $Emailerror = $Messageerror = "";
$name = $email = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])){
        $Nameerror = "Name is required";
    } else {
        $name = clean_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $Nameerror ="Name should contain alpha characters only";
        }
    }
    if (empty($_POST["email"])){
        $Emailerror = "Email is required";
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $Emailerror = "Invalid email address";
        }
    }
    if (empty($_POST["message"])){
        $Messageerror = "Message cannot be empty";
    } else {
        $message = clean_input($_POST["message"]);
        
    }
    
    if ($Nameerror == "" && $Emailerror == "" && $Messageerror == ""){
        $to = "namoako@sycamores.indstate.edu";
        $subject = "Portfolio Website";
        
        $obj = new stdClass();
        $obj->name = $name;
        $obj->email = $email;
        $obj->message = $message;
        
        
        $JSON = json_encode($obj);
        $file1 = fopen("message.json", "w") or die ("File cannot be opened");
        fwrite($file1, $JSON);
        fclose($file1);
        $file2 = fopen("data.txt", "a") or die ("File cannot be opened");
        fwrite($file2, $JSON);
        fclose($file2);
        
        $header = "MINE-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= "From: $name <$email>" . "\r\n";
        
        
        mail($to, $subject, $message, $header);
    }
}

function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$file = fopen("message.json", "r") or die ("File cannot be opened");
$json = (fread($file, filesize("message.json")));

fclose($file);

?>
            let jsonVar = <?php echo $json; ?>;
            </script>
            <h2>Let's Get in Touch!</h2>
            <p>Feel free to shoot me an email anytime; to say hello or share ideas.</p>
            <br>
            <form action="" method="post" id="myform" autocomplete="on">
                
                <label for="email">Email: <span class="error"><?php echo $Emailerror;?></span></label><input placeholder=" Your email..." type="text" name="email" id="email" autocomplete="email" value="<?php echo $email; ?>">
                
                <label for="name">Name: <span class='error'><?php echo $Nameerror;?></span></label><input placeholder=" Your name..."  type="text" name="name" id="name" autocomplete="name" value="<?php echo $name; ?>">
                
                <label for="message">Message: <span class="error"><?php echo $Messageerror;?></span></label><br><textarea placeholder=" Say something..." name="message" id="message" autocomplete="off" type="text"><?php echo $message;?></textarea>
                <br><br>
                <input type="submit" name="submit" value="Send">
            </form>
            
            <p>Connect with me on Social Media</p>
            <p>  
                <a id="socials" href="https://www.facebook.com/nathan.awukuamoako/" target="_blank">
                    <i class="fa fa-facebook-square"></i></a>
                <a id="socials" href="https://www.instagram.com/nawukuamoako/" target="_blank">
                    <i class="fa fa-instagram"></i></a>
                <a id="socials" href="https://www.linkedin.com/in/nathan-awuku-amoako-937089133/" target="_blank">
                    <i class="fa fa-linkedin-square"></i></a>
            </p>
        </main>
        <?php include('footer.php'); ?>
        
        <script src="js/nathan.js"></script>
        <script>
            
            function createCookie(cookie, data, expire) {
                const date = new Date();
                date.setTime(date.getTime() + (expire * 24 * 60 * 60 * 1000));
                let expires = "expires=" + date.toUTCString();
                document.cookie = cookie + "=" + data + ";" + expires + ";path=/"; 
            }
            
            createCookie("Portfolio", JSON.stringify(jsonVar), 90);
            
            function getCookie(cookie) {
                let name = cookie + "=";
                let ca = document.cookie.split(':');
                
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }if ( c.indexOf(name) == 0 ) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            
            
            
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slides[slideIndex-1].style.display = "block";  
            }
            
            </script>
</body>
</html>
