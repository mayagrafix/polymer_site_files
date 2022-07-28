<?php

if (!defined('APPLICATION')) exit;


// Declare Current Page Name in a global variable
$currentPage = basename($_SERVER['PHP_SELF']);

// Function to write menu
function writeMenu($menu_name)
{

    // Access global variable
    global $currentPage;

    $writeMenuHTML = "";
    $fileName = "datafiles/" . $menu_name . ".csv";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($currentPage == $data[0]) {
                $writeMenuHTML .= "<li><a href=\"#\" class=\"nav-link active\" aria-current=\"page\"";
            } else {
                $writeMenuHTML .= "<li><a href=\"" . $data[0] . "\" class=\"nav-link\"";
            }
            $writeMenuHTML .= ">" . $data[1] . "</a></li>";
        }
    }

    return $writeMenuHTML;

}

// Write Faculty
function writeFaculty($faculty_list)
{

    $writeFacultyHTML = "";
    $fileName = "datafiles/" . $faculty_list . ".csv";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeFacultyHTML .= "<div class=\"col text-center faculty-link\">";
            /* Check whether profile link is present */
            if ($data[0] != "") {
                $writeFacultyHTML .= "<a href=\"" . $data[0] . "\" target=\"_blank\">";
            }
            $writeFacultyHTML .= "<img src=\"images/faculty/" . $data[1] . ".jpg\" alt=\"Faculty - " . $data[2] . "\" class=\"rounded-circle img-fluid\">";
            $writeFacultyHTML .= "<h5 class=\"faculty-name\">" . $data[2] . "</h5>";
            $writeFacultyHTML .= "<h6 class=\"faculty-designation\">" . $data[3] . "</h6>";
            if ($data[0] != "") {
                $writeFacultyHTML .= "</a>";
            }
            $writeFacultyHTML .= "</div>";
        }
    }

    return $writeFacultyHTML;
}

// Write Tables Three Columns
function writeTableThreeColumns($tableName)
{

    $fileName = "datafiles/" . $tableName . ".csv";

    $writeTableHTML = "<tbody>";

    $row = 1;
    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeTableHTML .= "<tr><th scope=\"row\" class=\"fw-normal align-middle\">$row</th><td class=\"align-middle\">$data[0]</td><td class=\"align-middle\">$data[1]</td></tr>";
            $row++;
        }
        fclose($handle);

    }

    $writeTableHTML .= "</tbody>";

    return $writeTableHTML;

}

// Write Tables Two Columns
function writeTableTwoColumns($tableName)
{

    $fileName = "datafiles/" . $tableName . ".csv";

    $writeTableHTML = "<tbody>";

    $row = 1;
    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeTableHTML .= "<tr><th scope=\"row\" class=\"fw-normal align-middle\">$row</th><td class=\"align-middle\">$data[0]</td></tr>";
            $row++;
        }
        fclose($handle);

    }

    $writeTableHTML .= "</tbody>";

    return $writeTableHTML;

}

// Write Tables Five Columns
function writeTableFiveColumns($tableName)
{

    $fileName = "datafiles/" . $tableName . ".csv";

    $writeTableHTML = "<tbody>";

    $row = 1;
    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeTableHTML .= "<tr><th scope=\"row\" class=\"fw-normal align-middle\">$row</th><td class=\"align-middle\">$data[0]</td><td class=\"align-middle\">$data[1]</td><td class=\"align-middle\">$data[2]</td><td class=\"align-middle\">$data[3]</td></tr>";
            $row++;
        }
        fclose($handle);

    }

    $writeTableHTML .= "</tbody>";

    return $writeTableHTML;

}

//Parse CSV to Array
function loadCSV($file, $sortOrder)
{
    $filePath = "datafiles/" . $file . ".csv";
    $tableRows = array();

    if (($handle = fopen("$filePath", "r")) !== FALSE) {

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($tableRows, $data);
        }
        fclose($handle);
    }

    if ($sortOrder == "reverse") {
        return array_reverse($tableRows);
    } else {
        return $tableRows;
    }
}


// Write Tables
function writeTables($file, $sortOrder = "straight", $tableHeader = "yes")
{
    $filePath = "datafiles/" . $file . ".csv";
    $tableRows = array();
    $first_row = array();
    $tableHTML = "";
    $row = 1;


    if (($handle = fopen("$filePath", "r")) !== FALSE) {

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($tableRows, $data);
        }
        fclose($handle);
    }

    if ($tableHeader == "yes") {
        $first_row = array_shift($tableRows);
    }


    if ($sortOrder == "reverse") {
        $tableArray = array_reverse($tableRows);
    } else {
        $tableArray = $tableRows;
    }

    if (!empty($first_row)) {
        $tableHTML .= "<thead>" . "\n";
        $tableHTML .= "<th scope='col' class='align-middle'>#</th>" . "\n";
        foreach ($first_row as $value) {
            $tableHTML .= "<th scope='col' class='align-middle'>$value</th>" . "\n";
        }
        $tableHTML .= "</thead>" . "\n";
    }
    $tableHTML .= "<tbody>" . "\n";

    foreach ($tableArray as $tableData) {
        $tableHTML .= "<tr>" . "\n";
        $tableHTML .= "<th scope='row' class='fw-normal align-middle'>$row</th>" . "\n";
        foreach ($tableData as $tableValue) {
            $tableHTML .= "<td class='align-middle'>$tableValue</td>" . "\n";
        }
        $tableHTML .= "</tr>" . "\n";
        $row++;
    }
    $tableHTML .= "</tbody>" . "\n";
    return $tableHTML;

}


// Write Consultancy Charges Table
function writeTableConsultancyCharges($tableName)
{

    $fileName = "datafiles/" . $tableName . ".csv";

    $writeTableHTML = "<tbody>";

    $row = 1;
    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[1] == "") {
                $writeTableHTML .= "<tr><td colspan='3' class=\"fw-bold align-middle\">$data[0]</td></tr>";
            } else {
                $writeTableHTML .= "<tr><th scope=\"row\" class=\"fw-normal align-middle\">$row</th><td class=\"text-start\">$data[0]</td><td class=\"text-end pe-sm-0 pe-md-3\">$data[1]</td></tr>";
                $row++;
            }
        }
        fclose($handle);

    }

    $writeTableHTML .= "</tbody>";

    return $writeTableHTML;

}

// Write Main Nav Stellar
function writeMainStellarNav()
{

    // Access global variable
    global $currentPage;

    $fileName = "datafiles/main-nav.csv";

    $homeDropDownHTML = "";
    $academicsDropDownHTML = "";
    $infrastructureDropDownHTML = "";
    $committeesDropDownHTML = "";

    if (($handleInner = fopen("$fileName", "r")) !== FALSE) {
        while (($dataInner = fgetcsv($handleInner, 1000, ",")) !== FALSE) {

            if ($dataInner[4] == "Home") {
                $homeDropDownHTML .= "<li><a href=\"" . $dataInner[0] . "\"";
                if (strpos($dataInner[0], ".pdf")) {
                    $homeDropDownHTML .= " target=\"_blank\"";
                }
                $homeDropDownHTML .= ">" . $dataInner[1] . "</a></li>";
            } elseif ($dataInner[4] == "Academics") {
                $academicsDropDownHTML .= "<li><a href=\"" . $dataInner[0] . "\">" . $dataInner[1] . "</a></li>";
            } elseif ($dataInner[4] == "Infrastructure") {
                $infrastructureDropDownHTML .= "<li><a href=\"" . $dataInner[0] . "\">" . $dataInner[1] . "</a></li>";
            } elseif ($dataInner[4] == "Committees") {
                $committeesDropDownHTML .= "<li><a href=\"" . $dataInner[0] . "\">" . $dataInner[1] . "</a></li>";
            }
        }
        fclose($handleInner);
    }

    $writeMenuHTML = "<div class=\"stellarnav bg-dark-brown\"><ul>";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[3] == "hasDropDown") {
                $writeMenuHTML .= "<li class=\"has-sub\"> <a href=\"" . $data[0] . "\"";
                if ($currentPage == $data[0]) {
                    $writeMenuHTML .= " class=\"active-menu\"";
                }
                $writeMenuHTML .= ">" . $data[1] . "</a><ul style=\"display: none;\" class=\"sub-menu\">";

                if ($data[4] == "homeDropDown") {
                    $writeMenuHTML .= $homeDropDownHTML;
                } elseif ($data[4] == "academicsDropDown") {
                    $writeMenuHTML .= $academicsDropDownHTML;
                } elseif ($data[4] == "infrastructureDropDown") {
                    $writeMenuHTML .= $infrastructureDropDownHTML;
                } elseif ($data[4] == "committeesDropDown") {
                    $writeMenuHTML .= $committeesDropDownHTML;
                }
                $writeMenuHTML .= "</ul></li>";
            } elseif ($data[3] != "isSubMenu") {
                $writeMenuHTML .= "<li><a href=\"" . $data[0] . "\"";
                if ($currentPage == $data[0]) {
                    $writeMenuHTML .= " class=\"active-menu active-wtout-submenu\"";
                }
                $writeMenuHTML .= ">" . $data[1] . "</a></li>";
            }
        }
        fclose($handle);

    }

    $writeMenuHTML .= "</ul></div>";

    return $writeMenuHTML;

}

// End Main Nav Stellar

// Write Library Books Table
function writeTableLibraryBook()
{

    $fileName = "datafiles/table-library.csv";

    $writeTableHTML = "<tbody>";
    $sum = 0;

    $row = 1;
    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $writeTableHTML .= "<tr><th scope=\"row\" class=\"fw-normal align-middle\">$row</th><td class=\"align-middle\">$data[0]</td><td class=\"align-middle\">$data[1]</td></tr>";
            $row++;
            $sum += $data[1];
        }
        fclose($handle);

    }
    $writeTableHTML .= "<tr><th scope=\"row\" class=\"fw-bold align-middle\" colspan=\"2\">Total</th><td class=\" fw-bold align-middle\">" . $sum . "</td></tr>";
    $writeTableHTML .= "</tbody>";

    return $writeTableHTML;

}

// End Write Library Books Table

// Write Gallery
function writeGallery($folder)
{
    $galleryDirectory = "images/" . $folder;

    $writeGalleryHTML = "";

    foreach (glob($galleryDirectory . "/*.*") as $file) {
        $galleryItem = pathinfo($file, PATHINFO_FILENAME);

        $writeGalleryHTML .= "<img class=\"lightboxed rounded img-fluid m-2\" rel=\"group1\" src=\"images/" . $folder . "/thumbs/" . $galleryItem . "_small.jpg\"
         data-link=\"images/" . $folder . "/" . $galleryItem . ".jpg\" alt=\"" . $galleryItem . "\">";
    }

    return $writeGalleryHTML;
}

// End Write Gallery

// Write Instruments Gallery
function writeInstrumentsGallery()
{

    $fileName = "datafiles/instruments-gallery.csv";

    $writeInstrumentsGallery = "";

    if (($handle = fopen("$fileName", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

            $writeInstrumentsGallery .= "<img class=\"lightboxed rounded img-fluid m-2\" rel=\"group1\" src=\"images/instruments_gallery/thumbs/instrument_gallery_" . $data[0] . "_small.jpg\"
         data-link=\"images/instruments_gallery/instrument_gallery_" . $data[0] . ".jpg\" alt=\"" . $data[1] . "\" data-caption=\"" . $data[1] . "\">";
        }
        fclose($handle);

    }

    return $writeInstrumentsGallery;
}

// End Write Instruments Gallery

// Write Carousel
function writeCarousel()
{
    $carouselDirectory = "images/carousel";

    $writeCarouselHTML = "<div class=\"carousel-indicators\">";
    $writeCarouseInnerHTML = "<div class=\"carousel-inner\">";
    $imageNo = 0;

    foreach (glob($carouselDirectory . "/*.*") as $file) {
        $carouselItem = pathinfo($file, PATHINFO_FILENAME);

        $writeCarouselHTML .= "<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"" . $imageNo . "\"";
        $writeCarouseInnerHTML .= "<div class=\"carousel-item";
        if ($carouselItem == "carousel_01") {
            $writeCarouselHTML .= " class=\"active\" aria-current=\"true\"";
            $writeCarouseInnerHTML .= " active";
        }
        $writeCarouselHTML .= " aria-label=\"Slide " . $imageNo . "\"></button>";
        $writeCarouseInnerHTML .= "\">";
        $writeCarouseInnerHTML .= "<img src=\"images/carousel/" . $carouselItem . ".jpg\" class=\"d-block w-100 img-fluid carousel-images\" alt=\"" . $carouselItem . "\">";
        $writeCarouseInnerHTML .= "</div>";
        $imageNo++;
    }
    $writeCarouselHTML .= "</div>";
    $writeCarouseInnerHTML .= "</div>";

    $writeCarouselHTML .= $writeCarouseInnerHTML;

    return $writeCarouselHTML;
}

// End Write Carousel

// Function to write title
function getTitle()
{

    // Access global variable
    global $currentPage;

    $result = "Department of Polymer Science & Rubber Technology";
    if (($handle = fopen("datafiles/main-nav.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[0] == $currentPage) //Checks the current page
                $result = $data[2];
        }
        fclose($handle);

    }
    return $result;
}


?>
