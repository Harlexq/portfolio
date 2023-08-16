<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serhan Bakır</title>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <button class="angle-up" id="scrollToTopBtn" type="button"><i class="fa-solid fa-angle-up"></i></button>

    <div class="inclusive">
        <?php
        include("./pages/common/header.php");
        include("./pages/common/mobileHeader.php");
        ?>
        <div class="pages">
            <section class="home" id="home">
                <div class="home-inner">
                    <div class="home-content">
                        <h2>Welcome</h2>
                        <div class="wrapper">
                            <div class="static-text">I'm</div>
                            <ul class="dynamic-text">
                                <li>
                                    <span>Serhan Bakır</span>
                                </li>
                                <li>
                                    <span>Frontend Developer</span>
                                </li>
                                <li>
                                    <span>Web Designer</span>
                                </li>
                            </ul>
                        </div>
                        <a href="#contact" class="hireme">Hire Me</a>
                    </div>
                </div>
                <a href="#about" class="icon-scroll">
                    <svg viewBox="0 0 42.5 42.5">
                        <path d="M21 3C14.4 3 9 8.4 9 15v10c0 6.6 5.4 13 12 13s12-6.4 12-13V15c0-6.6-5.4-12-12-12zm10 21.5C31 30.4 26.5 36 21 36s-10-5.6-10-11.5v-8.9C11 9.8 15.5 5 21 5s10 4.8 10 10.6v8.9z" id="Rounded_Rectangle_1_copy" class="outline"></path>
                        <circle cx="21" cy="15" r="2" id="Ellipse_1" class="st0"></circle>
                    </svg>
                </a>
            </section>
            <section class="pages-content" id="about">
                <div class="container">
                    <div class="pages-inner">
                        <div class="content-title">
                            <h2>About Me</h2>
                            <div class="content-text">
                                <p>Know Me More</p>
                                <span class="content-seperator"></span>
                            </div>
                        </div>
                        <div class="about-content">
                            <div class="about-text">
                                <h2>I'm <span>Serhan Bakır,</span> a Frontend Developer</h2>
                                <p>Hello, I'm Serhan Bakır. In order to enhance my skills in web development and make a solid start to my career, I completed an internship as a Junior Web Developer at an Advertising Agency. I possess intermediate-level knowledge of HTML, CSS, Bootstrap, and JavaScript, and I successfully apply these skills in my projects.<br><br>Furthermore, I continuously update myself on web design, user experience, and digital marketing trends.<br><br>Among my professional goals is designing creative, functional, and impactful websites. I strive to improve myself within the industry, collaborate with fellow experts, and provide a better web development experience by understanding the needs of clients.</p>
                            </div>
                            <div class="about-info">
                                <ul class="about-info-content">
                                    <li class="about-info-item">
                                        <span>Name:</span>
                                        <p>Serhan Bakır</p>
                                    </li>
                                    <li class="about-info-item">
                                        <span>E-Mail:</span>
                                        <a href="mailto:serhanbakir5@gmail.com" target="_blank">serhanbakir5@gmail.com</a>
                                    </li>
                                    <li class="about-info-item">
                                        <span>Age:</span>
                                        <p>17</p>
                                    </li>
                                    <li class="about-info-item">
                                        <span>From:</span>
                                        <p>Türkiye, Gaziantep</p>
                                    </li>
                                </ul>
                                <div class="about-cv">
                                    <a href="assets/img/cv.pdf" download="">Download CV <i class="fa-solid fa-download"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="pages-content pages-light" id="services">
                <div class="container">
                    <div class="pages-inner">
                        <div class="content-title">
                            <h2>Services</h2>
                            <div class="content-text">
                                <p>What I Do?</p>
                                <span class="content-seperator"></span>
                            </div>
                        </div>
                        <div class="services-content">
                            <article class="services-item">
                                <i class="fa-solid fa-desktop"></i>
                                <div class="sevices-item-text">
                                    <h3>Web Design</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, illo!</p>
                                </div>
                            </article>
                            <article class="services-item">
                                <i class="fa-solid fa-code"></i>
                                <div class="sevices-item-text">
                                    <h3>Frontend Developer</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, illo!</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pages-content" id="resume">
                <div class="container">
                    <div class="pages-inner">
                        <div class="content-title">
                            <h2>Summary</h2>
                            <div class="content-text">
                                <p>Resume</p>
                                <span class="content-seperator"></span>
                            </div>
                        </div>
                        <div class="resume-content">
                            <div class="resume-content-item">
                                <div class="title-item-text">
                                    <h3>My Education</h3>
                                </div>
                                <article class="resume-item">
                                    <p class="resume-history">2020</p>
                                    <h4>Kanuni Sultan Süleyman Mesleki ve Teknik Anadolu Lisesi</h4>
                                    <p class="organisation">Information Technologies</p>
                                    <p class="desc">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                                </article>
                            </div>
                            <div class="resume-content-item">
                                <div class="title-item-text">
                                    <h3>My Experience</h3>
                                </div>
                                <article class="resume-item">
                                    <p class="resume-history">2022 - 2023</p>
                                    <h4>HTML - CSS - Wordpress</h4>
                                    <p class="organisation">International University</p>
                                    <p class="desc">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                                </article>
                                <article class="resume-item">
                                    <p class="resume-history">2022 - 2023</p>
                                    <h4>JavaScript</h4>
                                    <p class="organisation">International University</p>
                                    <p class="desc">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                                </article>
                                <article class="resume-item">
                                    <p class="resume-history">2022 - 2023</p>
                                    <h4>Python</h4>
                                    <p class="organisation">International University</p>
                                    <p class="desc">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                                </article>
                            </div>
                        </div>
                        <div class="title-item-text">
                            <h3>My Skills</h3>
                        </div>
                        <section class="skills-chart">
                            <div class="skill">
                                <div class="skill-txt">
                                    <h4>HTML</h4>
                                    <p>60%</p>
                                </div>
                                <div class="skill-outer-bar">
                                    <div class="skill-inner-bar skill-inner-bar-60"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skill-txt">
                                    <h4>CSS</h4>
                                    <p>60%</p>
                                </div>
                                <div class="skill-outer-bar">
                                    <div class="skill-inner-bar skill-inner-bar-60"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skill-txt">
                                    <h4>Bootstrap</h4>
                                    <p>60%</p>
                                </div>
                                <div class="skill-outer-bar">
                                    <div class="skill-inner-bar skill-inner-bar-60"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skill-txt">
                                    <h4>Wordpress</h4>
                                    <p>60%</p>
                                </div>
                                <div class="skill-outer-bar">
                                    <div class="skill-inner-bar skill-inner-bar-60"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skill-txt">
                                    <h4>Javascript</h4>
                                    <p>30%</p>
                                </div>
                                <div class="skill-outer-bar">
                                    <div class="skill-inner-bar skill-inner-bar-30"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skill-txt">
                                    <h4>Python</h4>
                                    <p>20%</p>
                                </div>
                                <div class="skill-outer-bar">
                                    <div class="skill-inner-bar skill-inner-bar-20"></div>
                                </div>
                            </div>
                        </section>
                        <div class="resume-cv">
                            <a href="assets/img/cv.pdf" download="">Download CV <i class="fa-solid fa-download"></i></a>
                        </div>
                    </div>
            </section>
            <section class="pages-content pages-light" id="contact">
                <div class="container">
                    <div class="pages-inner">
                        <div class="content-title">
                            <h2>Contact</h2>
                            <div class="content-text">
                                <p>Get in Touch</p>
                                <span class="content-seperator"></span>
                            </div>
                        </div>
                        <div class="contact-content">
                            <div class="contact-inner">
                                <div class="title-item-text">
                                    <h3>Contact Information</h3>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-infor">
                                        <p class="contact-infor-item"><i class="fa-solid fa-location-dot"></i> Türkiye,Gaziantep</p>
                                        <a class="contact-infor-item" href="mailto:serhanbakir5@gmail.com" target="_blank"><i class="fa-regular fa-envelope"></i> serhanbakir5@gmail.com</a>
                                    </div>
                                </div>
                                <div class="title-item-text">
                                    <h3>Follow Me</h3>
                                </div>
                                <nav class="social">
                                    <a href="https://github.com/Harlexq" target="_blank" class="social-item">
                                        <span class="social-tooltip">Github</span>
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/serkan-bakir/" target="_blank" class="social-item">
                                        <span class="social-tooltip">Linkedin</span>
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://twitter.com/harlexq" target="_blank" class="social-item">
                                        <span class="social-tooltip">Instagram</span>
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://twitter.com/harlexq" target="_blank" class="social-item">
                                        <span class="social-tooltip">Twitter</span>
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </nav>
                            </div>
                            <div class="contact-inner contact-inner-form">
                                <div class="title-item-text">
                                    <h3>Send Us a Note</h3>
                                </div>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $to = "serhanbakir5@gmail.com";
                                    $subject = "Serhan Bakır Contact Form";
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $message = $_POST['message'];

                                    $message = "İsim Soyisim: $name\nE-posta Adresi: $email\nMesaj: $message\n";

                                    $headers = "From: $name <$email>\r\n";
                                    $headers .= "Reply-To: $email\r\n";
                                    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                                    $headers .= "Content-Transfer-Encoding: 8bit\r\n";

                                    if (mail($to, $subject, $message, $headers)) {
                                        $success = "Your message has been sent successfully!";
                                    } else {
                                        $error = "Your message could not be sent. Please try again later.";
                                    }
                                }
                                ?>
                                <?php if (isset($success)) { ?>
                                    <p style='color:green;'><?php echo $success; ?></p>
                                <?php } else if (isset($error)) { ?>
                                    <p style='color:red;'><?php echo $error; ?></p>
                                <?php } ?>
                                <form method="post" class="contact-form">
                                    <div class="form-name">
                                        <input class="name-input" id="name" name="name" type="text" maxlength="40" placeholder="Name" required aria-describedby="ErrName">
                                        <input class="name-input" id="email" name="email" type="mail" maxlength="100" placeholder="E-Mail" required aria-describedby="ErrEmail">
                                    </div>
                                    <div class="form-text">
                                        <textarea id="message" name="message" placeholder="Tell us more about your needs..." maxlength="40" required aria-describedby="ErrMessage"></textarea>
                                    </div>
                                    <div class="form-btn-cont">
                                        <div class="form-btn">
                                            <button id="BtnContact" class="contact-btn" type="submit" name="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="copyright">
                <p>Copyright © 2023 <a href="https://www.linkedin.com/in/serhan-bakir/" target="_blank">Serhan Bakır</a>. All Rights Reserved.</p>
            </footer>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>