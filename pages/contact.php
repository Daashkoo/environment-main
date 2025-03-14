<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../assets/favicon.ico">
</head>
<body>

    <header>
        <img src="../images/logo.png" alt="Global Warming Awareness Logo" id="logo">
        <h1>Contact Us</h1>
    </header>

    <nav>
        <a href="../index.html">Home</a>
        <a href="about.html">About</a>
        <a href="effects.html">Effects</a>
        <a href="solutions.html">Solutions</a>
        <a href="contact.html">Contact</a>
        <a href="new_rules.html">New Rules</a>
    </nav>

    <main>
            <h2>Get in Touch</h2>
            <p>If you have any questions or would like more information, feel free to contact us using the form below:</p>
            <p>Thank you for visiting the Global Warming Awareness website! We believe that awareness is the first step toward meaningful change. If you have any questions, suggestions, or comments about our mission, projects, or how you can help in the fight against global warming, we would love to hear from you.

                Our team is dedicated to providing resources, guidance, and information to individuals, communities, and organizations interested in making a positive environmental impact. Whether you're looking for tips on reducing your carbon footprint, seeking information on renewable energy, or simply want to learn more about the consequences of climate change, we're here to assist.
                
                Feel free to contact us using the form below, or reach out via email or phone. We are also open to collaborations with other environmental organizations, educational institutions, and individuals passionate about promoting sustainability. Together, we can make a real difference in the fight against global warming.
                
                We look forward to hearing from you!</p>
            <form action="submit_form.php" method="POST">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br>

                <input type="submit" value="Submit">
            </form>
    </main>
 
    <footer>
        <p>© 2025 Global Warming Awareness. All rights reserved.</p>
    </footer>

</body>
</html>
