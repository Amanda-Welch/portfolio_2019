<!DOCTYPE html>
<html>

<?php include "head.php"; ?>

<body>

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
                    <a class="nav-item nav-link" href="./index.php">Home</a>
                    <a class="nav-item nav-link" href="./portfolio.php">Portfolio</a>
                    <a class="nav-item nav-link active" href="./contact.php">Contact</a>
                    <a class="nav-item nav-link" href="./resume.pdf" download>Resume</a>
                    <a class="nav-item nav-link" href="https://www.linkedin.com/in/amanda-da-silva-sacco/en?trk=public_profile_locale_name" target="_blank">
                        <img src="./image/in.png" class="right" width="22px">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contact Form -->
    <form id="contactForm" name="contactForm" method="POST" class="div align-middle">
        <h3>For questions or suggestions</h3>
        <h2><u>Contact me</u></h2><br>
        <label for="name">Name:</label><br>
        <input class="alert" type="text" name="name" id="name" placeholder="Enter Name" tabindex="1" required><br>
        <label for="email">Email:</label><br>
        <input class="alert" type="email" name="email" id="email" placeholder="Enter Email" tabindex="2" required><br>
        <label for="subject">Subject:</label><br>
        <select name="subject" tabindex="3">
            <option value="0"></option>
            <option value="Suggestion">Suggestion</option>
            <option value="Opportunity">Opportunity</option>
            <option value="Other">Other</option>
        </select><br>
        <label for="message">Message:</label><br>
        <textarea class="alert" rows="5" wrap="hard" name="message" id="message" placeholder="Tell me something.." tabindex="4"></textarea><br><br>
        <input type="submit" name="submit" value="Submit" tabindex="5" onclick="validateForm();"><br>

        
    </form>

    <?php include "footer.php"; ?>

</body>

</html>

<?php
include "database.php";

if(isset($_POST['submit'])) { 
$to =  "amandass1@hotmail.com";
$subject = "Form Test";
$name_field = $_POST['name'];                
$email_field = $_POST['email'];           
$subject = $_POST['subject'];                  
$message = $_POST['message'];
$body = "From: $name_field\n E-Mail: $email_field\n Subject: $subject\n Message:\n $message"; 
$success = mail($to, $subject, $body);
 
}

insert_to_contact_table($name, $email, $subject, $message);
?>



<!-- teacher example not working ?php 
    $firstName = $lastName = $email = "";
      
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstName = cleanse_data($_POST["firstName"]);
        $lastName = cleanse_data($_POST["lastName"]);
        $email = cleanse_data($_POST["email"]);

        $file = fopen("output.txt", "a");
        fwrite($file, "\n".$firstName."\n".$lastName."\n".$email.);
        fclose($file);

        send_email("amandass1@hotmail.com", "Amanda Sacco", "\n".$firstName."\n".$lastName."\n".$email.);

        print_r($_POST);
    }

    function cleanse_data($data){
        return htmlspecialchars(stripslashes(trim($data)));
    }

    function send_email($to, $subject, $txt){
        $headers = "From: amandasacco95@gmail.com";

        mail($to,$subject,$txt,$headers);
    }

? -->