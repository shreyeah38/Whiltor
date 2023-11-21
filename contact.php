<?php
require('./layouts/toplayout.php')
?>
<link href="./assets/css/contact.css" rel="stylesheet" />
<title>Whiltor | Contact</title>
<meta content="Whiltor is helping thousands of businesses to grow and establish a brand image that helps them achieve their company goals faster. If you have questions or doubts related to Whiltor or our services please contact us on our helpline no. or email Whiltor using the contact form given below." name="description" />
<meta content="consultancy, services, target, consult, advice, development, designing, growth, success, marketing, solution, strategize, process, implement, achieve, roadmap, project, satisfaction, trust, loyalty, quality, goals, connect, grow, branding, graphic, seo, confused, collaborate, collaboration, mentoring, technical, hr, management, business, leadership, best, market, improve, presence, doorstep, excellence, strategic, powerful, fast, reliable, trustworthy, 24/7, available, quick, social media,platforms, helpline, availability, customer, choose, succeed, advancement, confusion, strategy, helpinghand, help, partners, partnership, mentor, optimise, discuss, work, team, teamwork, guidance, advising, counselling, direction, assistance, system, about, about us, about whiltor" name="keywords" />

<?php

if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $contact= $_POST["contact"];
    $query= $_POST["query"];
}

?>

</head>

<body onload="checkWidth()">

    <div>
        <?php
        require('./partials/navbar.php')
        ?>
    </div>
    <div class="container-fluid contact-bg">
        <div class="d-flex align">
            <div class="d-flex mt-3 d-none d-md-block">
                <img src="./assets/img/img22/img22NoShadowNoBg.png" width="350px">
            </div>
            <div class="d-flex justify-content-center aligin-items-center my-5 ">
                <div class="form-container py-4 ">
                    <h3 class="text-center mt-3 ">Contact us</h3>
                    <form action="savecontact.php" method="post" class="form-input ">
                        <div class="row mt-4 ">
                            <div class="col-1 "></div>
                            <div class="col-2 d-flex justify-content-center align-items-center ">
                                <div class="icon "><i class="fas fa-signature "></i></div>
                            </div>
                            <div class="col-8 ">
                                <input placeholder='Full Name' name="name" type='text' required>
                            </div>
                            <div class="col-1 "></div>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-1 "></div>
                            <div class="col-2 d-flex justify-content-center align-items-center ">
                                <div class="icon "><i class="far fa-envelope-open "></i></div>
                            </div>
                            <div class="col-8 ">
                                <input placeholder='E-mail' name="email" type='Email' required>
                            </div>
                            <div class="col-1 "></div>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-1 "></div>
                            <div class="col-2 d-flex justify-content-center align-items-center ">
                                <div class="icon "><i class="fas fa-phone-alt "></i></div>
                            </div>
                            <div class="col-8 ">
                                <input type="number" name="contact" placeholder="Contact Number" required>
                            </div>
                            <div class="col-1 "></div>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-1 "></div>
                            <div class="col-2 d-flex justify-content-center align-items-center ">
                                <div class="icon "><i class="fas fa-paper-plane "></i></div>
                            </div>
                            <div class="col-8 ">
                                <textarea name="query" style="min-width: 100%; min-height: 150px; max-height: 500px;" placeholder='Query'></textarea>
                            </div>
                            <div class="col-1 "></div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center align-items-center ">
                            <button class="submit" type="submit">
                                Submit
                            </button>
                            <input type="hidden" name="submit" value="submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?php
require('./layouts/bottomlayout.php')
?>