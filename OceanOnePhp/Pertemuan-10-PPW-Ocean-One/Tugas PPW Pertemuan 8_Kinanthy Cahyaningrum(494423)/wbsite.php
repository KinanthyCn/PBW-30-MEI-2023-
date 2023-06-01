<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean One : Save our planet</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/section1.css">
    <link rel="stylesheet" href="style/section2.css">
    <link rel="stylesheet" href="style/section3.css">
    <link rel="stylesheet" href="style/section4.css">
    <link rel="stylesheet" href="style/section5.css">
    <style>
          #my_navbar {
            overflow: hidden;
            background-color: #ffffff20;
            transition: 0.4s;
            position: fixed;
            width: 100%;
            top: 0;
        }

        #my_navbar #logoOceanOne {
            height: 100px;
            transition: 0.4s;
        }
        .navbar .nav-link{
            color: #03256C
        }

        #navMenu{
            color: #03256C;
            font-size: x-large;
            transition: 0.4s;
        }

        
    </style>  
    <script src="js/script.js"></script> 
    <script>
        function Report(){
        var report = document.getElementById("Report");
        var name = document.getElementById("Name").value;
        var email = document.getElementById("Email").value;
        var message = document.getElementById("Message").value;
        report.innerHTML = '<div class= "container rounded-5 p-4" style = "background-color : #FFFFFF";><b>Thanks for the response!</b><p>The following are your respond :<br> Name : ' + name + ' <br> Email : ' + email + '<br> My Message : </p>' + message + "</div>";
        event.preventDefault();
    };
    </script> 
</head>


<body>

    <div class="section1"id="screenHeight"> 
              <!-- Navbar -->
              <div class="oceanNavbar sticky-top">
                <nav class="navbar navbar-expand" id="my_navbar">
                    <div class="nav navbar-nav">
                        <a class="navbar-brand pad3" href="#">
                            <img src="images/ocean-logo.png" alt="Ocean one" id="logoOceanOne">
                        </a>
                    </div>
                    <div class="nav navbar-nav costumMenu" id="navMenu">
                        <a class="nav-item nav-link" href="#Actions">Actions</a>
                        <a class="nav-item nav-link" href="#Resources">Resources</a>
                        <a class="nav-item nav-link" href="#Projects">Projects</a>
                        <a class="nav-item nav-link" href="#Explore">Explore</a>
                    </div>
                </nav>
            </div>
    
    
            <!-- Main Body Section One -->
            <div class="container" id="Home">
                <!-- persuasive Title -->
                <div class="headingBox">
                    <div class="title">
                        <p> OCEAN NEEDS HELP </p>
    
                    </div>
                    <br>
                    <!-- Desc -->
                    <div class="description">
                        <p>Protect Our Planet</p>
    
                    </div>
                </div>
                <br>
    
                <!-- Button -->
                <a href="#Actions" style="text-decoration-line: none;">
                    <button class="button" onclick="takeaction()">
                        <p>Take Action</p>
                    </button>
                </a>
            </div>
    
        </div>
    
        <!-- section 2-->
        <div class="section2"id="Actions">
            <h1 style="margin: 0 0 50px 0;">OFFSET YOUR <br>
                PLASTIC FOOTPRINT</h1>
                <div class="row justify-content-center align-items-start g-2">
                  <?php 
            include 'conn.php';
            $oceanone = mysqli_query($conn, "select * from section_2");
            $no = 1;
            foreach ($oceanone as $value) {
                echo"
                <div class='col-4'>
                        <div class='btncard'>
                            <div class='dekorasiku'>
                                <div class='top'>
                                    <h2>".$value['JUDUL']."</h2>
                                    <br>
                                    <br>
                                    <p>".$value['DESKRIPSI']."</p>
                                </div>
                                <div class='bottom'>
                                <a href='#Learn_More' class='btn' style='background-color: #03256C; color: #FFFFFF; border-radius: 30px; width: 9rem; height: 3rem;'>".$value ['SUBMIT']."</a> 
                                <a class='btn' style='background-color: #03256C; color: #FFFFFF; border-radius: 30px; width: 8rem; height: 3rem;' onclick=edit() >EDIT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                "; 
            }
        ?>
        <div>
        </div>
        <div>
        </div>

        <br>

    <!--section 3-->
    
    <div class="section3" id="Resources">
        
        <div class="row">
            <h1>MAKE YOUR IMPACT</h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center align-items-between g-2 text-center">
            <div class="col-4">
                <a href="#">
                    <div class="btncard pb-3">
                        <div class="dekorasiku">
                            <div class="icon pt-3">
                                <img src="images/world-ocean-day.png"; style="width: 100px;">
                            </div>
                            <br>
                            <p>
                                COMMIT TO REMOVING <br> A SPECIFIC AMOUNT
                            </p>
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="col-4">
                <a href="#">
                    <div class="btncard pb-3">
                        <div class="dekorasiku">
                            <div class="icon pt-3">
                                <img src="images/sustainable.png"; style="width: 100px;" >
                            </div>
                            <br>
                            <p>
                                TIE REMOVAL TO <br> PRODUCT SALES
                            </p>
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="col-4">
                <a href="#">
                    <div class="btncard pb-3">
                        <div class="dekorasiku">
                            <div class="icon pt-3">
                                <img src="images/world-oceans-day.png"; style="width: 100px;" >
                            </div>
                            <br>
                            <p>
                                INCENTIVIZE <br> COMMUNITY ACTION
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--section 4-->
    <div class="section4" id="Projects">
        <!-- Project 1 -->
        <div class="heading">
            <h1>PROJECT 1 : <br> <div class="bigger_h1">OCEANBOUND CLEAN UP</div>  </h1>
        </div>

        <div class="row">
            <div class="col img1"></div>
            <div class="col project l r1">
                <h2>PROBLEMS</h2>
                <p>Plastic recycling generates plastic waste effluent as a standard part 
                    of the process. This dirty discharge known as "Mud" is at risk of being 
                    discharged into the wastewater and, in the best-case, is usually taken 
                    to the nearest landfill.</p>
            </div>
        </div>
        <div class="row">
            <div class="col project r r2">
                <h2>SOLUTION</h2>
                <p>Repurposes the “Mud” into useful building materials. It's composition is 
                    perfect for producing bricks! Unfortunately, these recycled plastic 
                    compound bricks are slightly more expensive than standard building 
                    bricks, so Impac+ program incentivizes the reuse of the “Mud” in 
                    the bricks by making them competitive on the open market.</p>
            </div>
            <div class="col img2"></div>
        </div>

        <!-- Project 2 -->
        <div class="heading">
            <h1>PROJECT 2 : <br> <div class="bigger_h1">FISHING NET RECOVERY</div>  </h1>
        </div>

        <div class="row">
            <div class="col img3"></div>
            <div class="col project l r3">
                <h2>PROBLEMS</h2>
                <p>Fishing gear - nets and ropes - pose a significant risk to sea life if 
                    cut away in the ocean. Unfortunately, incentives do not exist to recover 
                    this gear so at the end of its life, most gets landfilled or simply 
                    cut away at sea. It's a huge reason for why fishing nets are the largest 
                    ocean plastic polluter.</p>
            </div>
        </div>
        <div class="row">
            <div class="col project r r4">
                <h2>SOLUTION</h2>
                <p>We provides the funds needed to incentivize collection and recycling of 
                    this gear. This program creates a pathway for the reclamation of end 
                    of life fishing gear.</p>
            </div>
            <div class="col img4"></div>
        </div>
    </div>

    <br>
    <br>
    <br>
    
    <!-- Section 5 -->
    <div class="section5" id="Explore">
        <div class="title">
            <h1>GET IN TOUCH</h1>
        </div>

        <div class="row wrap">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11524.096705278442!2d112.67837588525!3d-7.195840573403729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1684051297577!5m2!1sid!2sid" 
                width="100%" height="100%" 
                style="border:0;" 
                allowfullscreen="false" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="Name"><h2>Name</h2></label>
                        <input type="text" class="form-control" placeholder="Keenan Thysira" id="Name">
                    </div>
                    <br><br>

                    <div class="form-group">
                      <label for="Email"><h2>Email address</h2></label>
                      <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Keenan@hotmail.com">
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label for="Message"><h2>Write Your Message</h2> </label>
                        <textarea name="Message" 
                            class="form-control"
                            id="Message" 
                            cols="30" 
                            rows="10"
                            form="contactUsForm">Write your message here...
                        </textarea>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary" onclick="Report()"><p>Submit</p></button>


                  </form>
            </div>
        </div>
        <div id="Report" class="position-absolute start-50">
        </div>
    </div>
    <br><br><br><br>
    <div class="footer">
        <div class="row">
            <div class="col">
                <div class="Brand">
                    <div class="logo">
                        <img src="Images/ocean-logo.png" alt="Ocean One" style="max-height: 75px; padding: 10px;"> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="menu">
                            <a href="#">
                                <p>News Letter</p>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="menu">
                            <a href="#">
                                <p>Privacy Policy</p>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="menu">
                            <a href="#">
                                <p>FAQs</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var p = document.getElementById('your_paragraph');
     function edit(){
         p.innerHTML = '<textarea id="theText" style="width: 100%; height: 120px">'+ p.textContent +'</textarea></br><input type="button" id="btn" value="Save" onclick="test()"/>';
     }
     function test(){
         p.textContent = document.getElementById('theText').value;
        }
 </script>  

    <script src="js/bootstrap.js"></script>
    <script>
        let screeenHeight = screen.height;
        document.getElementById("screenHeight").style.height = screeenHeight + "px";

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("my_navbar").style.paddingTop = "0px";
                document.getElementById("my_navbar").style.paddingBottom = "0px";
                document.getElementById("logoOceanOne").style.height = "50px";
                document.getElementById("navMenu").style.fontSize = "large";
            } else {
                document.getElementById("my_navbar").style.paddingTop = "30px";
                document.getElementById("my_navbar").style.paddingBottom = "30px";
                document.getElementById("logoOceanOne").style.height = "100px";
                document.getElementById("navMenu").style.fontSize = "x-large";
            }
        }


    </script>

</html>