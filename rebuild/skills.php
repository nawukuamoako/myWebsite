<?php $word = "Skills | Nathan Awuku Amoako";?>
<?php $style = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";?>
<?php $css = "css/nathan_sub.css";?>
<?php $projects = "nathan.php#myprojects";?>
<?php $contact = "nathan.php#contactarea";?>

<?php include('head.php');?>
<body>
    <?php include('header.php'); ?>
 <main onclick="closeMenu()">
            <h1>Skills</h1>

            <button class="collapsed">Courses</button>
            <div class="content">
            <p>
                <li>Programming Fundamentals</li>    
                <li>Programming for Data Science</li>    
                <li>Concrete Mathematics</li>    
                <li>Algorithms</li>    
                <li>Web Programming and Applications</li>    
                <li>Machine Learning</li>    
            </p>
            </div><br>
            <button class="collapsed">Languages</button>
            <div class="content">
                <p>
                    <li>Python</li>    
                    <li>C</li>    
                    <li>C++</li>    
                    <li>HTML</li>    
                    <li>CSS</li>    
                    <li>Javascript</li>    
                    <li>Bash</li>    
                </p>
            </div><br>
            <button class="collapsed">Project Management</button>
            <div class="content">
                <p>
                    <li>Jupyter Notebook</li>    
                    <li>Presnentation Skills</li>    
                    <li>Team Leadership</li>    
                    <li>Drupal</li>    
                    <li>Github</li>    
                    <li>Time Management</li>    
                </p>
            </div><br>
            <button class="collapsed">Coding Style</button>
            <div class="content">
                <p>
                    <li>Clean Code</li>    
                    <li>Useful Comments</li>    
                    <!-- <li></li>    
                    <li></li>    
                    <li></li>    
                    <li></li>     -->
                </p>
            </div><br>
            <button class="collapsed">Development</button>
            <div class="content">
                <p>
                    <li>Linux</li>    
                    <li>PyTorch</li>    
                    <li>Pandas</li>    
                    <li>Anaconda</li>    
                    <li>Numpy</li>    
                    <li>MatPlotlib</li>    
                    <li>Tensorflow</li>    
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