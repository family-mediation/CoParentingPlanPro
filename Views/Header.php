<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link src="Scripts/Pagination.js">
    <title>CoparentingPlan Pro</title>
    <script>
        let pageCount = 0;
        let numPages = 0;
        let current;
        $(document).ready(function() {
            current = $("#page" + pageCount);
            let elements = $("#mainForm").children();
            numPages = elements.length;
            //hide everything
            elements.addClass("hidden");
            current.removeClass("hidden");

        });
        
       function nextHandler(){
            current.addClass("hidden");
            pageCount = (pageCount + 1) % numPages;
            current = $("#page" + pageCount);
            current.removeClass("hidden");
            console.log(pageCount);
        };
        function previousHandler(){
            current.addClass("hidden");
            pageCount =  pageCount > 0 ? (pageCount - 1) % numPages : numPages -1;
            current = $("#page" + pageCount);
            current.removeClass("hidden");
            console.log(pageCount);
        };

    </script>
</head>
<header>
    <nav class="navbar navbar-expand-md color2 justify-content-center">
        <ul class="navbar-nav text-center">


            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Section 1: Introduction </a>
                <div class="dropdown-menu">
                    <li class="dropdown-item"><a class="nav-link">About the Case</a></li>
                    <li class="dropdown-item"><a class="nav-link">About you</a></li>
                    <li class="dropdown-item"><a class="nav-link">About your spouse</a></li>
                    <li class="dropdown-item"><a class="nav-link">About your children</a></li>
                </div>
            </div>

            <li class="nav-item"><a class="nav-link"> Section 2: <br /> Guiding Principles </a></li>
            <li class="nav-item"><a class="nav-link"> Section 3: <br /> Parties: </a></li>
            <li class="nav-item"><a class="nav-link"> Section 4: <br /> Children </a></li>
            <li class="nav-item"><a class="nav-link"> Section 5: <br /> Legal Custody </a></li>
            <li class="nav-item"><a class="nav-link"> Section 6: <br /> Physical Custody and Timesharing </a></li>
            <li class="nav-item"><a class="nav-link"> Section 7: <br /> Communication </a></li>
            <li class="nav-item"><a class="nav-link"> Section 8: <br /> Support of the Child(ren) </a></li>
            <li class="nav-item"><a class="nav-link"> Section 9: <br /> Other Issues </a></li>
            <li class="nav-item"><a class="nav-link"> Section 10: <br /> Legal </a></li>

        </ul>
    </nav>
</header>
<div id="content" class="container">
    <row class="text-center">
        <h1>Coparent Pro Version 1</h1>
    </row>


    <!-- Optional JavaScript -->
