<!DOCTYPE html>
<html lang="en">

<style>
/* 
@only screen and (max-width: 1200px){
    .ui.container {
        width: 1000px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
} */

.mt-90 {
    margin-top: 90px;
}

.mt-30 {
    margin-top: 30px !important;
}

.mb-15 {
    margin-bottom: 15px !important;
}

.ui.secondary.menu .item {
    margin-left: 0 !important;
    margin-top: 45px !important;
    margin-right: 25px !important;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
}

.ui.form .field>label {
    color: gray !important;
    margin-bottom: 10px !important;
    font-family: 'Poppins', sans-serif;
    font-weight: 500 !important;
    font-size: 10px;
    color: gray;
}

.bold {
    font-weight: 900 !important;
}

h1.title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 50px;
    letter-spacing: 1px;

}

p.sub-title {
    margin-top: 30px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 1px;
    color: gray;

}
</style>

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
    <title>Contact Form</title>
</head>

<body>

    <div class="ui container">
        <div class="ui secondary  menu">
            <a class="item bold">
                Company
            </a>
            <a class="item">
                Home
            </a>
            <a class="item">
                About
            </a>
            <a class="item">
                News
            </a>
            <a class="item">
                Help
            </a>
        </div>
    </div>

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
                <form class="ui form" action="17.2-process-form.php" method="post">
                    <div class="field">
                        <label>Full name</label>
                        <input name="name" type="text">
                    </div>
                    <div class="field">
                        <label>Email address</label>
                        <input  name="email" type="text">
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

</html>

<script>
    $('.ui.checkbox')
    .checkbox();
</script>