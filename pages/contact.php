<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with us to learn more about environmental awareness, or ask questions about the website.">
    <title>Contact Us | Global Environmental Awareness</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>Contact Us</h1>
            <p>Have questions or want to learn more about how you can help protect the environment? Get in touch with us today!</p>
        </div>
    </header>

    <!-- Contact Content Section -->
    <main>
        <div class="container">
            <section>
                <h2>We'd Love to Hear From You</h2>
                <p>If you have any questions, suggestions, or would like to learn more about our work on global environmental awareness, feel free to reach out to us. We are always happy to connect with like-minded individuals and organizations who share our commitment to sustainability and environmental protection.</p>
                <p>Whether you have a specific inquiry or just want to learn more about the environmental issues discussed on our website, our team is ready to assist. You can use the form below to send us a message, and we will get back to you as soon as possible.</p>
                <h3>Contact Form</h3>
                <form action="submit_contact.php" method="POST">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
                <p>Thank you for reaching out! Your feedback is important to us as we work toward making a positive impact on the planet.</p>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Global Environmental Awareness | Designed by Your Name</p>
        </div>
    </footer>

</body>
</html>
