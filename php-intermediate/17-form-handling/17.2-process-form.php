<?php include("header.php")?>

<body>

    <?php include("menu.php")?>

    <div class="ui container mt-90">
        <div class="ui grid">
            <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                <h1 class="title">
                    Thanks for contacting us <?php echo $_POST["name"]?>!
                </h1>
                <br>
                <p class="sub-title">We'have sent you a confirmation email to <span style="color: #424242"><?php echo $_POST["email"]?></span> 
                
                <br>
                We will comunicate with you as soon as posible.</p>

                <button class="ui primary button mt-30" type="reset" onclick="window.location = 'http://localhost/phpkickoff/php-intermediate/17-form-handling/17.1-contact-form.php'">Go back!</button>

            </div>
            <div class="eight wide computer eight wide tablet sixteen wide mobile column center aligned">
                <img src="https://cdn.dribbble.com/users/1568450/screenshots/5430738/work_2_dribbble-01_2x.png"
                    width="95%">
            </div>
        </div>
    </div>
</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>

<body>

    <?php include("menu.php")?>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Subject:</em> <?php echo $_POST["subject"]?></li>
        <li><em>Message:</em> <?php echo $_POST["message"]?></li>
    </ol>
</body>

</html> -->