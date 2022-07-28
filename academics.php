<!-- Include Header -->
<?php require_once('includes/header.php'); ?>

<div class="title-box mt-3 mt-lg-0">
    <h3 class="title-text display-6">
        Academics
    </h3>
</div>

<!-- BTech & MTech Courses -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-orange scroll-margin" id="courses">
    <h4 class="sub-headline">
        BTech & MTech Courses
    </h4>
    <p class="text-start">
        The Department offers four-year B. Tech. (Polymer Science and Engineering), two-year M. Tech. (Polymer
        Technology) and research leading to Ph. D. The Academic semesters span form July to November and December to
        April. The curriculum and syllabi are as per the guidelines of the AICTE.
        <br> <br>
        <strong>The B.Tech (Polymer Science and Rubber Technology)</strong> was started in 1972 as a two-year post-B.
        Sc. course which was restructured to three years in 1978. In 2004 the course was revamped completely to make it
        a four-year-long B. Tech. for which the admission requirement was Plus-two (10+2). In 2009, the course was
        redesignated as
        <strong>B. Tech. (Polymer Science and Engineering)</strong> without compromising the rubber technology content.
        The admission is through an All-India Entrance test (CAT) conducted by the University every year in April/May
        for which the registration will be during December/ January. This course with a limited intake of 20 students
        per year is a Govt. aided one and hence the semester fees is nominal. The highlights of the course are the
        one-semester long project work and training in an industry and very high prospects of placement through campus
        recruitment. Many of our students qualify for GATE examination without additional coaching and pursue their
        higher education in IITs or abroad. From 2020 admission onwards the syllabus of the B. Tech. programme has been
        modified in tune with the Outcome Based Education.
    </p>

    <!-- BTech Syllabus Buttons -->
    <div class="button-container d-flex flex-column flex-md-row gap-3 justify-content-center py-4">
        <a class="btn content-button" href="pdf-files/btech_syllabus_2015.pdf" role="button" target="_blank">BTech Syllabus 2015</a>
        <a class="btn content-button" href="pdf-files/btech_syllabus_2020.pdf" role="button" target="_blank">BTech Syllabus 2020</a>
    </div>
    <!-- End BTech Syllabus Buttons -->

    <p class="text-start">
        <strong>The M.Tech. (Polymer Technology) course</strong>, started in 1985 with assistance from UGC and AICTE
        admits 10 students per year. The selection is based on GATE score/ Departmental Admission Test (for non -gate
        students). Applications are invited during December / January. Classes start by July. Many of our students opt
        for research in IITs or abroad.
    </p>

    <!-- Mtech Syllabus Buttons -->
    <div class="button-container d-flex flex-column flex-md-row gap-3 justify-content-center py-4">
        <a class="btn content-button" href="pdf-files/mtech_syllabus_2015.pdf" role="button" target="_blank">Mtech Syllabus 2015</a>
        <a class="btn content-button" href="pdf-files/mtech_syllabus_2020.pdf" role="button" target="_blank">Mtech Syllabus 2020</a>
    </div>
    <!-- End Mtech Syllabus Buttons -->

    <p class="text-start">
        For more details on fee and academics please see:
    </p>

    <!-- Prospectus Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4">
        <a class="btn content-button" href="pdf-files/prospectus_2022.pdf" role="button" target="_blank">Academic
            Bulletin</a>
    </div>
    <!-- End Prospectus Button -->

</div>
<!-- End BTech & MTech Courses -->

<!-- Ph.D. Programme and Post Doctoral Fellowship Courses -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-blue scroll-margin" id="research">
    <h4 class="sub-headline">
        Ph.D. Programme and Post Doctoral Fellowship
    </h4>
    <p class="text-start">
        The Department has an active research wing. External agencies like the MHRD, Department of Science and
        Technology (Govt. of India), University Grants Commission (UGC), Department of Science and Technology (Govt. of
        Kerala) are supporting the Department through various research projects. The department has been funded by the
        DST under the FIST programme. Currently, 38 research students are working in various aspects of polymer technology. 119 126 Ph.Ds have been awarded till now.
        <br> <br>
        Some of the current research areas are:
    </p>

    <!-- Ph.D Research Areas Table -->
    <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="table-responsive">
                <table class="table table-striped table-bordered border-black bg-white table-sm">
                    <?php echo writeTables('table-phd-research-areas', "straight", "no") ?>
                </table>
            </div>
        </div>
    </div>
    <!-- End Ph.D Research Areas Table -->

    <!-- Ph. D Awardees Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn content-button mt-4" data-bs-toggle="modal" data-bs-target="#phdAwardeesModal">
        List of Ph. D. awardees so far
    </button>

    <!-- Modal -->
    <div class="modal fade" id="phdAwardeesModal" tabindex="-1" aria-labelledby="phdAwardeesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="phdAwardeesModalLabel">Ph.D. Awardees  Since 1987</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Ph.D Awardees Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered border-black bg-white table-sm">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Year</th>
                            </thead>
                            <?php echo writeTableThreeColumns('table-phd-awardees') ?>
                        </table>
                    </div>
                    <!-- End Ph.D Awardees Table -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn content-button" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ph. D Awardees Modal -->

    <p class="text-start mt-5">
        <strong>Eligibility</strong> <br>
        A post Graduation with at least 60 % marks in the qualifying examination. Valid national test scores such as NET,
        GATE/ a pass in the Departmental Admission Test. The input PG must be in Polymer Science/ Chemistry/Technology or
        Chemistry with polymer specialisation or Chemical Engineering.
        <br> <br>

        <strong>Admission</strong> <br>
        Admission is through Departmental Admission Test (DAT) conducted during May/ June. Applications is available
        during January - March. For more details on application procedure and Ph.D. Regulations, visit the below page.
    </p>
    <!-- PhD Regulations Page Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4">
        <a class="btn content-button" href="https://cusat.ac.in/student/phd-regulations" role="button" target="_blank">PhD
            Regulations</a>
    </div>
    <!-- End PhD Regulations Page Button -->

    <p class="text-start mt-4">
        <strong>Post Doctoral Fellowship</strong> <br>
        The Department has a few Post Doctoral Fellowship positions. Currently four PDFs are pursuing advanced research
        in their selected areas. Applications for this fellowship is processed twice in an year.
    </p>

    <p class="mt-4">
        <strong> Awards / recognitions received for  / innovations  won by institution / teachers / research scholars / students
        </strong>
    </p>

    <!-- Awards Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <?php echo(writeTables('table-awards', 'reverse')); ?>
        </table>
    </div>
    <!-- End Awards Table -->

    <p class="mt-4">
        <strong>  Patents published/awarded </strong>
    </p>

    <!-- Patents Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <?php echo ( writeTables('table-patents', 'reverse')); ?>
        </table>
    </div>
    <!-- End Patents Table -->

    <p class="mt-4">
        <strong> Functional MoUs with institutions/ industries  in India and abroad for internship, on-the-job training, project work, student / faculty exchange and  collaborative research
        </strong>
    </p>
    <!-- MOU Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <?php echo ( writeTables('table-mou', 'reverse')); ?>
        </table>
    </div>
    <!-- End MOU Table -->

    <p class="mt-4">
        <strong> Workshops / Seminars / Invited Talks organised by the Department
        </strong>
    </p>
    <!-- Workshops Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <?php echo ( writeTables('table-workshops', 'reverse')); ?>
        </table>
    </div>

    <!-- End Workshops Table -->
</div>
<!-- End Ph.D. Programme and Post Doctoral Fellowship Courses -->

<!-- Current Students -->
<div class="text-center mt-5 py-5 px-3 px-md-5 faculty-box bg-light-orange scroll-margin" id="currentstudents">
    <h4 class="sub-headline">
        Current Students
    </h4>
    <p class="">
        <strong>B.Tech. & M.Tech students</strong>
    </p>

    <!-- Students Portal Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4">
        <a class="btn content-button" href="https://estudents.cusat.ac.in/" role="button" target="_blank">Students Portal</a>
    </div>
    <!-- End Students Portal Button -->

    <p class="mt-4">
        <strong>Research scholars and Postdoctoral Students</strong>
    </p>
    <!-- Ph.D Students Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-black bg-white table-sm">
            <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">PhD / PDF</th>
            <th scope="col">Topic of Research</th>
            <th scope="col">Supervising Guide</th>
            </thead>
            <?php echo writeTableFiveColumns('table-phdstudents') ?>
        </table>
    </div>
    <!-- End Ph.D Students Table -->

    <!-- Announcements Button -->
    <div class="button-container d-flex d-md-inline-flex flex-column gap-4 justify-content-center pb-4 mt-4">
        <a class="btn content-button" href="https://cusat.ac.in/exam_notif.php" role="button" target="_blank">Announcements / Notifications</a>
    </div>
    <!-- End Announcements Button -->
    </div>
</div>
<!-- End Current Students -->

<!-- Include Footer -->
<?php require_once('includes/footer.php'); ?>