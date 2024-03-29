<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="scripts/pagination.js" type="text/javascript"></script>
    <title>Co-parenting Plan Pro</title>
</head>
<div id="wrapper">
    <header>
        <div class="container-fluid">
            <div class="row color1 p-4">
                <div class="offset-md-5">
                    <div class="container1">
                        <div class="center" style="padding-right: 38vh">
                            <i class="bi bi-telephone-fill"></i> (808) 439-8600
                            <i class="bi bi-envelope" style="padding-left: 10vh"></i> info@familymediationhawaii.com
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md color2 justify-content-center">
            <div class="navbar-brand">
                <image src="https://lirp.cdn-website.com/0ec4144d/dms3rep/multi/opt/family-mediation-hawaii-web-90-white-1-201w.png" />
            </div>

            <ul class="navbar-nav text-center">

                <li class="nav-item"><a class="nav-link active-link" href="./?page=1">Section 1: <br /> Parties </a></li>
              <?php
                if ($_SESSION['canSeeChildren']) {
                  echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=2" aria-disabled="true">Section 2: <br /> Children </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 2: <br /> Children </a></li>';
                }
                if ($_SESSION['canSeeCustody']) {
                    echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=3" aria-disabled="true">Section 3: <br /> Legal Custody </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 3: <br /> Legal Custody </a></li>';
                }
                if ($_SESSION['canSeeTimesharing']) {
                    echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=4" aria-disabled="true">Section 4: <br /> Physical Custody and Timesharing </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 4: <br /> Physical Custody and Timesharing </a></li>';
                }
                if ($_SESSION['canSeeCommunication']) {
                    echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=5" aria-disabled="true">Section 5: <br /> Communication </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 5: <br /> Communication </a></li>';
                }
                if ($_SESSION['canSeeSupport']) {
                    echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=6" aria-disabled="true">Section 6: <br /> Support of the Child(ren) </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 6: <br /> Support of the Child(ren) </a></li>';
                }
                if ($_SESSION['canSeeIssues']) {
                    echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=7" aria-disabled="true">Section 7: <br /> Other Issues </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 7: <br /> Other Issues </a></li>';
                }
                if ($_SESSION['canSeeLegal']) {
                    echo '<li class="nav-item"><a class="nav-link active-link" href="./?page=8" aria-disabled="true">Section 8: <br /> Legal </a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" aria-disabled="true">Section 8: <br /> Legal </a></li>';
                }
              ?>
            </ul>
        </nav>
    </header>

    <body>
        <div id="content" class="container-fluid d-flex">
            <div class="container">
                <row class="text-center">
                    <h1 class="pt-4">Coparent Pro Version 1</h1>
                </row>

                <!-- Optional JavaScript -->
                
                <script>
                    // use to bold the nav-link of user's current section 
                    document.addEventListener("DOMContentLoaded", function() {
                        var urlParams = new URLSearchParams(location.search);
                        var currentPage = urlParams.get('page');

                        if (currentPage) {
                            var activeLink = document.querySelector('.nav-link[href="./?page=' + currentPage + '"]');
                            if (activeLink) {
                                activeLink.classList.add('active-link');
                            }
                        }
                    });
                </script>