<?php

/* =====================================
             Variables
   =====================================*/ 

$name = "";
$nameErr = "";
$email = "";
$emailErr = "";
$message ="";
$messageErr ="";

/* =====================================
     Functions to filter user inputs
   =====================================*/ 

function filterName($field){
    
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}  

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

function filterMessage($field){
    
    // Sanitize message

    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}

/* =================================================
      Processing form data when form is submitted
   =================================================*/ 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }
        
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";     
    } else{
        $email = filterEmail($_POST["email"]);

        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }

    // Validate message
    if(empty($_POST["message"])){
        $messageErr = "Please enter your message.";     
    } else{
        $message = filterString($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid message.";
        }
    }

    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        window.location.replace("http://localhost/phpkickoff/php-intermediate/17-form-handling/17.2-process-form.php");
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

                    <!-- Full name -->
                    <div class="field">
                        <label>Full name*</label>
                        <input name="name" type="text" value="<?php echo $name; ?>">

                        <!-- Name error message -->
                        <?php if ($nameErr) { ?>
                        <div class="ui negative message">
                            <div class="header">
                                Error!
                            </div>
                            <p><?php echo $nameErr; ?></p>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- Email -->
                    <div class="field">
                        <label>Email address*</label>
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
                         <!-- Email -->
                        <label>Message*</label>
                        <textarea name="message" type="text" value="<?php echo $message; ?>"></textarea>

                        <!-- Message error message -->
                        <?php if ($messageErr) { ?>
                        <div class="ui negative message">
                            <div class="header">
                                Error!
                            </div>
                            <p><?php echo $messageErr; ?></p>
                        </div>
                        <?php } ?>
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