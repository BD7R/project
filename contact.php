<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email content
    $to = "azhomelabs@gmail.com";  // Replace with your email address
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $feedback = "Message sent successfully!";
    } else {
        $feedback = "Failed to send message.";
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>AZ Home Labs - Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper" class="fade-in">

        <!-- Header -->
        <header id="header">
            <a href="index.html" class="logo">AZ Home Labs</a>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- Featured Post -->
            <article class="post featured">
                <header class="major">
                    <span class="date"></span>
                    <h2><a href="#">Contact Us</a></h2>
                    <p><?php echo $feedback; ?></p>
                </header>
                <ul class="actions special">
                    <li><a href="index.html" class="button">Back to Home</a></li>
                </ul>
            </article>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <section>
                <form method="post" action="contact.php">
                    <div class="fields">
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="3"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                    </ul>
                </form>
            </section>
            <section class="split contact">
                <section class="alt">
                    <h3>Address</h3>
                    <p></p>
                </section>
                <section>
                    <h3>Phone</h3>
                    <p><a href="#">(602) 320-5062</a></p>
                </section>
                <section>
                    <h3>Email</h3>
                    <p><a href="#">azhomelabs@gmail.com</a></p>
                </section>
                <section>
                    <h3>Social</h3>
                    <ul class="icons alt">
                        <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    </ul>
                </section>
            </section>
        </footer>

        <!-- Copyright -->
        <div id="copyright">
            <ul><li>&copy; AZ Home Labs</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
