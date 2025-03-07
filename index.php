<?php include 'components/header.php'; ?>

<main class="content">
    <section id="hero" class="section">
        <div class="hero-content fade-in">
            <h1>John Steven</h1>
            <p class="subtitle">Full Stack Developer</p>
            <a href="#contact" class="submit-btn">Get in Touch</a>
        </div>
    </section>

    <section id="about" class="section slide-in">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <p>Passionate developer focused on creating elegant and efficient solutions. With expertise in both frontend and backend development, I bring ideas to life through clean code and modern design.</p>
            </div>
        </div>
    </section>

    <?php include 'components/services.php'; ?>

    <section id="projects" class="section">
        <?php include 'components/projects/projects.php'; ?>
    </section>

    <section id="contact" class="section fade-in">
        <div class="container">
            <h2 class="section-title">Contact</h2>
            <?php include 'components/contact-form.php'; ?>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>