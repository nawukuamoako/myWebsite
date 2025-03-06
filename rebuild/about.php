<?php $word = "About | Nathan Awuku Amoako";?>
<?php $style = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";?>
<?php $css = "css/nathan_sub.css";?>
<?php $projects = "nathan.php#myprojects";?>
<?php $contact = "nathan.php#contactarea";?>

<?php include('head.php');?>
<body>
    <?php include('header.php'); ?>
    
    <main onclick="closeMenu()">
        <h1>About</h1>
        <h2>Biography</h2>
        <hr>
        <p>
            I graduated from Kwame Nkrumah University of Science and Technology, Kumasi - Ghana, with an Actuarial Science degree in 2020. <br>
            In May 2021, I was contracted by i2 Communications Ghana to work on a participant facial data collection project, which aimed at improving face-unlock feature on android devices. In 2022, I was contracted by the same company to work on a on a participant video data collection project, which aimed at
            improving the live photos and FaceTime features on iOS devices.
            <br> 
            After working on these projects, I decided to pursue my master’s in Computer	Science. So I applied to Indiana State University. I was admitted, and I got an IT Graduate Assistantship position in the Bay College of Education. As part of my duties; I manage the college’s website and Sycamore root (intranet), I provided IT support in classrooms and conference rooms and provide live-streaming services during events.  
            <br> 
            I have interests in software development, artificial intelligence and machine learning.
        </p>
        <h2>Education</h2>
        <hr>
        <p>
            <div>
                <p>
                    M.S. in Computer Science <br>
                    <em>Indiana State University</em><br>
                    Indiana, USA<br>
                    2023 - Anticipated 2025<br>
                    
                </p>
            </div>
            <div>
                <p>
                    B.S. in Actuarial Science <br>
                    <em> Kwame Nkrumah University of Science and Technology</em><br>
                    Kumasi, Ghana<br>
                    2016 - 2020<br>
                    
                </p>
            </div>
        </p>
        <h2>Work Experience</h2>
        <hr>
        <p>
            <div>
                <p>
                    Graduate Assistant <br>
                    <em>Bayh College of Education</em><br>
                    Indiana, USA<br>
                    August 2023 - Present<br>
                    
                </p>
            </div>
            <div>
                <p>
                    Data Verification Officer<br>
                    <em> I2 Communications Ghana</em><br>
                    Accra, Ghana<br>
                    May 2021 - January 2023<br>
                    
                </p>
            </div>
        </p>
        
        
        
    </main>
    <aside class="sidebar" onclick="closeMenu()">
        <h2>References</h2>
        <div class="card">
            <img class="user" src="images/user-3296.png" alt="No Image">   
            <h3>Name</h3>
            <p>Institution</p>
            <p><em>Position</em></p>
            <br>
            <p><em>"What my reference has to say about me."</em></p>
        </div>
        <br>
        <div class="card">
            <img class="user" src="images/user-3296.png" alt="No Image">   
            <h3>Name</h3>
            <p>Institution</p>
            <p><em>Position</em></p>
            <br>
            <p><em>"What my reference has to say about me."</em></p>
        </div>
        <br>
        
    </aside>
    <!-- <?php include('footer.php'); ?> -->
    <script src="js/nathan.js"></script>
</body>
</html>
