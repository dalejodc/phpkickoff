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