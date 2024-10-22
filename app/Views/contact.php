<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- CSS Linking here -->
<link rel="stylesheet" href="<?= base_url("assets/css/contact.css") ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Contact Page Design -->
<div class="container contact-page my-5">
    <div class="row justify-content-center align-items-center">
        <!-- Contact Form -->
        <div class="col-lg-5 col-md-6 mb-5">
            <div class="card shadow-sm p-4">
                <h2 class="mb-4">Get in Touch</h2>
                <p>We would love to hear from you. Please fill out this form and we’ll get in touch shortly.</p>

                <form action="<?= base_url('contact/submit') ?>" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Google Map and Contact Info -->
        <div class="col-lg-5 col-md-6 mb-5">
            <div class="card shadow-sm p-4">
                <h3 class="mb-4">Our Location</h3>
                <div class="map-container mb-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.5561839520723!2d-122.39997268467843!3d37.79228097975629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808bfa0bc817%3A0x9b4c5e1f3e0c7114!2sYour%20Location%20Name!5e0!3m2!1sen!2sus!4v1617178578817!5m2!1sen!2sus" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"></iframe>
                </div>
                <h4 class="mb-4">Contact Information</h4>
                <ul class="list-unstyled contact-info">
                    <li class="mb-2">
                        <i class="fas fa-envelope fa-fw text-primary"></i> 
                        <strong>Email:</strong> info@example.com
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone fa-fw text-primary"></i> 
                        <strong>Phone:</strong> +123 456 7890
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt fa-fw text-primary"></i> 
                        <strong>Address:</strong> 123 Your Street, City, Country
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
