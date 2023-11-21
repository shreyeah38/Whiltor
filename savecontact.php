<?php
require('./layouts/toplayout.php')
?>
<link href="./assets/css/contact.css" rel="stylesheet" />
<title>Whiltor | Contact</title>
<meta content="" name="description" />
<meta content="consultancy, services, target, consult, advice, development, designing, growth, success, marketing, solution, strategize, process, implement, achieve, roadmap, project, satisfaction, trust, loyalty, quality, goals, connect, grow, branding, graphic, seo, confused, collaborate, collaboration, mentoring, technical, hr, management, business, leadership, best, market, improve, presence, doorstep, excellence, strategic, powerful, fast, reliable, trustworthy, 24/7, available, quick, social media,platforms, helpline, availability, customer, choose, succeed, advancement, confusion, strategy, helpinghand, help, partners, partnership, mentor, optimise, discuss, work, team, teamwork, guidance, advising, counselling, direction, assistance, system, about, about us, about whiltor" name="keywords" />

</head>

<body onload="checkWidth()">

<?php

$status = 0;

if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $contact= $_POST["contact"];
    $query= $_POST["query"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="whiltorbasic";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact(name, email, contact, query) VALUES ('".$name."' , '".$email."' , '".$contact."' , '".$query."')";
    
    if ($conn->query($sql) === TRUE) {
      $status=1;
    } else {
      $status=0;
    }  
}

?>

    <div>
        <?php
        require('./partials/navbar.php')
        ?>
    </div>
    <?php
    if($status == 1){
    ?>
    <div class="container-fluid contact-bg">
        <div class="d-flex align">
            <div class="d-flex mt-3 d-none d-md-block">
                <img src="./assets/img/img22/img22NoShadowNoBg.png" width="350px">
            </div>
            <div class="d-flex justify-content-center aligin-items-center my-5 ">
                <div class="form-container py-4 ">
                    <div style="display: flex; align-items: center;height: 100%;">
                        <div>
                            <div style="display: flex; justify-content: center;width: 100%;">
                                <img src="./assets/gif/success.gif" width="60%" alt="success"/>
                            </div>
                            <h3 class="text-center mt-3 ">Contact Request Raised Successfully!!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
    if($status == 0){
    ?>
    <div class="container-fluid contact-bg">
        <div class="d-flex align">
            <div class="d-flex mt-3 d-none d-md-block">
                <img src="./assets/img/img22/img22NoShadowNoBg.png" width="350px">
            </div>
            <div class="d-flex justify-content-center aligin-items-center my-5 ">
                <div class="form-container py-4 ">
                    <div style="display: flex; align-items: center;height: 100%;">
                        <div>
                            <div style="display: flex; justify-content: center;width: 100%;">
                                <img src="./assets/gif/error.gif" width="40%" alt="success"/>
                            </div>
                            <h3 class="text-center mt-3 ">Something Went Wrong!!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
<?php
require('./layouts/bottomlayout.php')
?>