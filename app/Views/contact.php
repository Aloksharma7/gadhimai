<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- all css linking here  -->
<link rel="stylesheet" href="<?= base_url("assets/css/contact.css") ?> ">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- put html inside this  -->


<div class="container mt-5">
    <h1 class="mb-4">Contact Us</h1>
    <p>If you have any questions, please feel free to reach out to us using the form below.</p>

    <!-- Contact Form -->
    <form action="<?= base_url('contact/submit') ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <!-- Google Map -->
    <h2 class="mt-5">Our Location</h2>
    <div class="mb-3">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.5561839520723!2d-122.39997268467843!3d37.79228097975629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808bfa0bc817%3A0x9b4c5e1f3e0c7114!2sYour%20Location%20Name!5e0!3m2!1sen!2sus!4v1617178578817!5m2!1sen!2sus" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"></iframe>
    </div>

    <h3 class="mt-4">Contact Information</h3>
    <p><strong>Email:</strong> info@example.com</p>
    <p><strong>Phone:</strong> +123 456 7890</p>
    <p><strong>Address:</strong> 123 Your Street, City, Country</p>
</div>




<?= $this->endSection() ?>
