<!-- Include Header -->
<?php require_once('includes/header.php'); ?>

<div class="title-box mt-3 mt-lg-0">
    <h3 class="title-text display-6">
        The Faculty
    </h3>
</div>
<p class="mt-4">The faculty consisting of dedicated and highly qualified members represents one of the best academic and research talents available in India today. The faculty is a mixture of experience and youth. It also includes technocrats and researchers with valuable experience gained from the industrial field. Each faculty member is a product of a reputed academic institution and has many years of research and teaching experience to his credit.</p>

<div class="bg-light-blue p-5 faculty-box">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5 justify-content-center">
        <?php echo writeFaculty("faculty"); ?>
    </div>

</div>

<!-- Former Professors -->
<div class="bg-light-orange p-5 mt-4 faculty-box">
    <div class="row justify-content-center">
        <h4 class="col-12 col-md-5 former-professors">
            Former Professors
        </h4>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5 justify-content-center">
        <?php echo writeFaculty("faculty-former"); ?>
    </div>

</div>
<!-- End Former Professors -->

<!-- Include Footer -->
<?php require_once('includes/footer.php'); ?>