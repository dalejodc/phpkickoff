<?php

function filterEmail($field){

    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}

$emailErr = "";
$email = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";     
    } else{
        $email = filterEmail($_POST["email"]);

        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
}

?>

<?php include("header.php")?>

<body>

    <?php include("menu.php")?>

    <div class="ui container mt-90">
        <div class="ui grid">
            <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                <h1 class="title">
                    Let's talk about everything!
                </h1>
                <p class="sub-title">Don't like forms? send us an email.</p>

                <img src="https://cdn.dribbble.com/users/79571/screenshots/4407347/swingvy_all_illustrations.png"
                    width="85%">
            </div>
            <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                <form class="ui form" action="17.1-contact-form.php" method="post">
                    <div class="field">
                        <label>Full name</label>
                        <input name="name" type="text">
                    </div>

                    <!-- Email -->
                    <div class="field">
                        <label>Email address</label>
                        <input name="email" type="text" value="<?php echo $email; ?>">

                        <!-- Email error message -->
                        <?php if ($emailErr) { ?>
                        <div class="ui negative message">
                            <div class="header">
                                Error!
                            </div>
                            <p><?php echo $emailErr; ?></p>
                        </div>
                        <?php } ?>

                    </div>

                    <div class="field">
                        <label>Message</label>
                        <textarea></textarea>
                    </div>

                    <div class="field mt-30">
                        <div class="ui checkbox">
                            <input tabindex="0" class="hidden" type="checkbox">
                            <label>Accept <a href=""> Terms and Conditions</a></label>
                        </div>
                    </div>

                    <button class="ui primary button mt-30" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- Dribble inspiration: https://dribbble.com/shots/5699033-Contact-Help-Pages/attachments/1230972 -->

</html>

<script>
$('.ui.checkbox')
    .checkbox();
</script>