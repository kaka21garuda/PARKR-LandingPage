<html>
    <head></head>
    <body>

        <?php
            if (isset($_POST["submit"])) {

                $email = $_POST["email"];
                $message = "A new email address has been submitted $email";
                $success = mail("hello@tryparkr.com", "Parkr Feedback", $email);
                if ($success) {
                    ?>
                        <p>Your email has been sent</p>
                    <?php
                } else {
                    ?>
                        <p>The email failed to send?</p>
                    <?php
                }
                ?>
                    <a href="<?php $_PHP_SERVER["SELF"]; ?>">Send another email</a>
                <?php

            } else { ?>

                <form action="<?php $_PHP_SERVER["SELF"]; ?>" method="post">
                    <input type="text" placeholder="email address" name="email" />
                    <input type="submit" name="submit" value="Submit" />
                </form>

        <?php } ?>
    </body>
</html>
