<!DOCTYPE html>
<html>

<?php include "head.php"; ?>

<body id="body">
    <span id="up"></span>

    <!-- Header navbar -->
    <header id="gradient" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./index.php">
                <img src="./image/5.png" width="50" height="50" class="imgtop d-inline-block align-top"
                    alt="Amanda Sacco's logo">
            </a>
            <a class="nav-item nav-link disabled" tabindex="-1" aria-disabled="true">Amanda Sacco</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="./index.php">Home</a>
                    <a class="nav-item nav-link" href="./portfolio.php">Portfolio</a>
                    <a class="nav-item nav-link" href="./contact.php">Contact</a>
                    <a class="nav-item nav-link" href="./resume.pdf" download>Resume</a>
                    <a class="nav-item nav-link"
                        href="https://www.linkedin.com/in/amanda-da-silva-sacco/en?trk=public_profile_locale_name"
                        target="_blank">
                        <img src="./image/in.png" class="right" width="22px">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Profile Image -->

    <figure class="wrapper">
        <img class="img-fluid img-circle" src="./image/Amanda1.jpg" alt="Portrait picture from Amanda Sacco smiling">
    </figure>


    <!-- Menu Table -->
    <h3>
        <table class="container-fluid " align="center">
            <tr>
                <th>MENU</th>
            </tr>
            <tr>
                <td><a href="#profile">Profile</a></td>
            </tr>
            <tr>
                <td><a href="#skills">Skills</a></td>
            </tr>
            <tr>
                <td><a href="#languages">Languages</a></td>
            </tr>
            <tr>
                <td><a href="#software">Software</a></td>
            </tr>
            <tr>
                <td><a href="#education">Education</a></td>
            </tr>
            <tr>
                <td><a href="#experience">Experience</a></td>
            </tr>
        </table>
    </h3>

    <!-- Resume Content -->
    <div class="container-fluid div">
        <h2 id="profile">
            <u><b>Profile</b></u>
        </h2>
        <h3>
            I am pro-active, meticulous, friendly and a great team player. I believe in continual professional
            development
            through research and teamwork.
        </h3>
        
    </div>
    <div class="container-fluid div">
        <h2 id="skills">
            <u><b>Skills</b></u>
        </h2>
        <h3>
            <ul>
                <li>Creative Thinking</li>
                <li>Active Listening</li>
                <li>Multilingual</li>
                <li>Motivated worker</li>
                <li>Great team player</li>
                <li>Interpersonal communication</li>
            </ul>
        </h3>

    </div>
    <div class="container-fluid div">
        <h2 id="languages">
            <u><b>Languages</b></u>
        </h2>
        <h3>
            <ul>
                <li>English: Advanced</li>
                <li>Portuguese: Native</li>
                <li>Spanish: Basic</li>
            </ul>
        </h3>
    </div>
    <div class="container-fluid div">
        <h2 id="software">
            <u><b>Software</b></u>
        </h2>
        <h3>
            <ul>
                <li>Microsoft Word: Intermediate</li>
                <li>Power Point: Intermediate</li>
                <li>Microsoft Excel: Basic</li>
                <li>Photoshop: Basic</li>
            </ul>
        </h3>
    </div>
    <div class="container-fluid div">
        <h2 id="education">
            <u><b>Education</b></u>
        </h2>
        <h3>
            Salt Lake Community College<br>
        </h3>
        <p>
            03/2019 - 09/2019<br>
            Web Design and Development Certificate<br>
        </p>
        <p> HTML, CSS, JavaScript, PHP/MySQL, Photoshop, WordPress </p>
        <h3>
            University of Sorocaba<br>
        </h3>
        <p>
            2014-2017<br>
            Bachelor's Degree in Nutrition
        </p>
        <h3>
            Gastronomic Institute of America<br>
        </h3>
        <p>
            03/2014 - 11/2015 <br>
            Gastronomy and Haute Cuisine Certificate
        </p>
    </div>
    <div class="container-fluid div">
        <h2 id="experience">
            <u><b>Experience</b></u>
        </h2>
        <h3>
            Web Designer Intern at SLCC for Disconnect to Reconnect<br>
        </h3>
        <p>
            Aug 2019 - Sep 2019<br>
            Created a Website, together with two other classmates,<br>
             for an autonomous Health Coach according to her needs;
        </p>
        <h3>
            Health Nutrition Intern at Evangelical Hospital<br>
        </h3>
        <p>
            Sep 2017 - Nov 2017<br>
            Responsible for reading and interpreting medical records
            and communicating with all patients;
        </p>
        <h3>
            Clinical Nutrition Intern at UNISO Health Center<br>
        </h3>
        <p>
            Aug 2017 - Sep 2017<br>
            Responsible for providing scheduled patients personalized diets and professional
            health advices in order to
            prevent or treat specific health conditions/ symptoms.
        </p>
        <h3>
            Preschool Nutrition Intern at Nutrifam<br>
        </h3>
        <p>
            May 2017 - Jun 2017<br>
            Responsible for checking on food preparation and storage ensuring food safety,
            kitchen organization and variety of different healthy meals everyday;
            and responsible for food education classes with the kids.
        </p>
        <h3>
            Food and Nutrition Intern at Sodexo<br>
        </h3>
        <p>
            Feb 2017 - May 2017<br>
            Responsible for nutrition paperwork, food safety and kitchen staff training.
        </p>
    </div>


    <table class="container-fluid">
        <tr id="backup">
            <td><a href="#up">GO BACK UP</a></td>
        </tr>
    </table>

    <?php include "footer.php"; ?>

</body>