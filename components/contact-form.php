<form class="contact-form" action="process-form.php" method="POST">
    <div class="form-group">
        <input type="text" name="name" required placeholder="Your Name" class="form-input">
    </div>
    <div class="form-group">
        <input type="email" name="email" required placeholder="Your Email" class="form-input">
    </div>
    <div class="form-group">
        <textarea name="message" required placeholder="Your Message" class="form-input"></textarea>
    </div>
    <button type="submit" class="submit-btn">Send Message</button>
</form>