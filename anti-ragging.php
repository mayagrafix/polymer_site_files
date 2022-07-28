<!-- Include Header -->
<?php require_once('includes/header.php'); ?>

<div class="title-box mt-3 mt-lg-0">
    <h3 class="title-text display-6">
        Anti-Ragging / Grievence
    </h3>
</div>

<!-- Anti-Ragging -->
<div class="text-center mt-4 py-5 px-3 px-md-5 faculty-box bg-light-orange">
    <!-- Buttons -->
    <div class="button-container d-flex flex-column flex-md-row gap-3 justify-content-center py-4">
        <a class="btn content-button" href="https://www.ugc.ac.in/page/Helpline.aspx" role="button" target="_blank">UGC
            Helpline</a>
        <a class="btn content-button" href="https://www.aicte-india.org/grievance" role="button" target="_blank">AICTE Grievance</a>
    </div>
    <!-- End Buttons -->

    <!-- Buttons -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center py-4">
        <a class="btn content-button" href="pdf-files/anti-ragging-committee-2020.pdf" role="button" target="_blank">Anti-Ragging Committee</a>
        <a class="btn content-button" href="pdf-files/grievance-redressal-cell.pdf" role="button" target="_blank">Grievance Redressal Cell</a>
        <a class="btn content-button" href="https://docs.google.com/forms/d/e/1FAIpQLSelGQaJi7P45giSBfJ6pQ7Pt8S0SNgiQNjDgOL68x27KXFOMw/viewform" role="button" target="_blank">Online Registration of Grievance</a>
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
<!-- End Anti-Ragging  -->

<!-- Include Footer -->
<?php require_once('includes/footer.php'); ?>
