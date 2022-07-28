<!-- Include Header -->
<?php require_once('includes/header.php'); ?>

<div class="title-box mt-3 mt-lg-0">
    <h3 class="title-text display-6">
        Committees
    </h3>
</div>

<!-- Alumni -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-orange scroll-margin" id="alumni">
    <h4 class="sub-headline">
        Alumni
    </h4>
    <p class="text-start">
        Our Alumni are wide spread across globe holding covetable positions and responsibilities. The Department maintains a very close relationship with the Alumni. Alumni meets are normally organised along with the events such as seminars and workshops.
    </p>

    <h4 class="sub-headline mt-4">
        Alumni Association
    </h4>
    <!-- PTA Members Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            </thead>
            <?php echo writeTableThreeColumns('table-alumni') ?>
        </table>
    </div>
    <!-- End PTA Members Table -->
</div>
<!-- End Alumni -->

<!-- PTA Members -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-blue scroll-margin" id="pta">
    <h4 class="sub-headline">
        PTA Executive Committee Members for the year 2022-23*
    </h4>
    <!-- PTA Members Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            </thead>
            <?php echo writeTableThreeColumns('table-pta-members') ?>
        </table>
    </div>
    <!-- End PTA Members Table -->
    <p class="text-start">
        *Based on the different online PTA meetings conducted batchwise (B.Tech. IV Sem -19.02.2022, B.Tech I & IV Sem - 02.04.2022), two parents from each batch were elected as the Executive Committee members.
    </p>
</div>
<!-- End PTA Members -->

<!-- RTI -->
<div class="text-center faculty-box mt-5 p-5 bg-light-orange scroll-margin" id="rti">
    <h4 class="sub-headline">
        RTI
    </h4>
    <p>The PIO of the Department <br> <br>

        Mr. Anson Antony <br>
        Section Officer</p>
</div>
<!-- End RTI -->

<!-- Anti-Ragging / Grievance -->
<div class="text-center faculty-box mt-5 p-5 bg-light-blue scroll-margin" id="anti-ragging">
    <h4 class="sub-headline">
        Anti-Ragging / Grievance
    </h4>
    <!-- Buttons -->
    <div class="button-container d-flex flex-column flex-md-row gap-3 justify-content-center py-4">
        <a class="btn content-button" href="https://www.ugc.ac.in/page/Helpline.aspx" role="button" target="_blank">UGC
            Helpline</a>
        <a class="btn content-button" href="https://www.aicte-india.org/grievance" role="button" target="_blank">AICTE
            Grievance</a>
    </div>
    <!-- End Buttons -->

    <!-- Buttons -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center py-4">
        <a class="btn content-button" href="pdf-files/anti-ragging-committee-2020.pdf" role="button" target="_blank">Anti-Ragging
            Committee</a>
        <a class="btn content-button" href="pdf-files/grievance-redressal-cell.pdf" role="button" target="_blank">Grievance
            Redressal Cell</a>
        <a class="btn content-button"
           href="https://docs.google.com/forms/d/e/1FAIpQLSelGQaJi7P45giSBfJ6pQ7Pt8S0SNgiQNjDgOL68x27KXFOMw/viewform"
           role="button" target="_blank">Online Registration of Grievance</a>
    </div>
    <!-- End Buttons -->

    <div class="mt-4">
        <h4 class="sub-headline">
            Anti-Ragging Helpline
        </h4>
    </div>
    <!-- Anti-Ragging Helpline Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black table-sm bg-white">
            <?php echo writeTableThreeColumns('table-anti-ragging-helpline') ?>
        </table>
    </div>
    <!-- End Anti-Ragging Helpline Table -->

    <div><h4 class="sub-headline mt-4">
            Anti-Ragging Squad
        </h4>
    </div>
    <!-- Anti-Ragging Squad Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <?php echo writeTableThreeColumns('table-anti-ragging-squad') ?>
        </table>
    </div>
    <!-- End Anti-Ragging Squad Table -->
</div>
<!-- End Anti-Ragging / Grievance -->

<!-- Include Footer -->
<?php require_once('includes/footer.php'); ?>