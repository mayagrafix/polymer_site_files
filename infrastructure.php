<!-- Include Header -->
<?php require_once('includes/header.php'); ?>

<div class="title-box mt-3 mt-lg-0">
    <h3 class="title-text display-6">
        Infrastructure
    </h3>
</div>

<!-- Facilities -->
<div class="text-center mt-5 py-5 px-3 px-md-3 faculty-box bg-light-orange scroll-margin" id="facility">
    <h4 class="sub-headline">
        Facilities
    </h4>
    <!-- Instruments Gallery -->
    <div class="text-center faculty-box bg-light-orange">
        <?php echo writeInstrumentsGallery(); ?>
    </div>
    <!-- End Instruments Gallery -->
    <p class="text-start mt-3">
        The Department has well-equipped laboratory for pursuing research in frontier areas.
    </p>
    <!-- Facilities Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Equipment Name</th>
            <th scope="col">Make (Manufacturer)</th>
            <th scope="col">Model</th>
            <th scope="col">Funding Agency Type</th>
            </thead>
            <?php echo writeTableFiveColumns('table-facilities') ?>
        </table>
    </div>
    <!-- End Facilities Table -->

</div>
<!-- End Facilities -->

<!-- Consultancy -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-blue scroll-margin" id="consultancy">
    <h4 class="sub-headline">
        Consultancy
    </h4>

    <p class="text-start">
        An active consultancy wing of the Department caters to the needs of the polymer industries in the state. Some of the clients who utilised the services of the Department are: Baba Atomic Research Centre (BARC), National Physical and Oceanographic Laboratory (NPOL), Kochi, Eindhoven Technical University, the Netherlands, etc. Apart from taking up full-fledged consultancy works, the Department also caters to the testing and characterisation requirement of the industry.
        <br> <br>

        The samples for testing can be submitted to the Department in person or by post/ courier. The results will be sent to the client by e-mail / post. A nominal charge will be levied which can be paid online.
        <br> <br>
        <strong>Bank Transfer Details: </strong> <br>
        A/C Name : The Head, Dept of PS & RT <br>
        A/C No.: 57014638990 <br>
        Bank: State Bank of India <br>
        Branch: Cochin University Campus <br>
        IFSC Code: SBIN0070235 <br><br>
        For more details please call:
        <a class="text-link" href="tel:+914842575723">+91-484-2575723</a> <br>or fax: <a class="text-link" href="tel:+914842577747">+91-484-2577747</a>
        <br>or contact <a class="text-link" href="mailto:hodpsrt@cusat.ac.in">hodpsrt@cusat.ac.in</a>.
    </p>

    <p class="text-start mt-4">
        <strong>Testing Charges (With effect from 1 Jan 2022)</strong>
    </p>

    <!-- Testing Charges Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Instrument/ Test</th>
            <th scope="col">Tariff (Rs.)</th>
            </thead>
            <?php echo writeTableConsultancyCharges('table-testing-charges') ?>
        </table>
    </div>
    <!-- End Testing Charges Table -->
    <p class="text-start mt-0">
        A concession of 40% will be allowed for research scholars who do not get scholarship,  as certified by the HOD
    </p>
</div>
<!-- End Consultancy -->

<!-- Library -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-orange scroll-margin" id="library">
    <h4 class="sub-headline">
        Library
    </h4>
    <div class="col-12">
        <img class="img-fluid img-thumbnail rounded single-image" src="images/library.jpg" alt="Library Image">
    </div>
    <p class="text-start mt-4">
        The Departmental library  has a good collection of books of old issues of journals.  The total number of titles available is above 4000.  This includes about 1740 text books and old issues of the journals, B. Tech, M. Tech. And Ph.D theses and training reports.  Additionally,  the university library  houses pretty large collection of the books and journals in the polymer field.  Many online journals are also subscribed.
    </p>

    <!-- Library Books Table -->
    <div class="d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="table-responsive">
                <table class="table table-striped table-bordered border-black bg-white table-sm">
                    <thead>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Number of Books</th>
                    </thead>
                    <?php echo writeTableLibraryBook() ?>
                </table>
            </div>
        </div>
    </div>
    <!-- End Library Books Table -->

    <!-- Online Search Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4 mt-3">
        <a class="btn content-button" href="http://172.16.76.22/" role="button" target="_blank">Online Seach of Books</a>
    </div>
    <!-- End Online Search Button -->

    <p class="">
        A bigger collection of reference materials are available in the central library.
    </p>
    <!-- Central Library Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4">
        <a class="btn content-button" href="http://library.cusat.ac.in/" role="button" target="_blank">Central Library</a>
    </div>
    <!-- End Central Library Button -->

    <p class="">
        For old question papers please visit:
    </p>
    <!-- Digital Library Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4">
        <a class="btn content-button" href="http://dspace.cusat.ac.in/" role="button" target="_blank">Digital Library</a>
    </div>
    <!-- End Digital Library Button -->
</div>
<!-- End Library -->

<!-- Include Footer -->
<?php require_once('includes/footer.php'); ?>