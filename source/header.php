
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Network Stake</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Features-Centered-Icons-icons.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Responsive-YouTube-Video-Section-Dark-Centered.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
<nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span>NetworkStake_</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1"><a href="index.php" style="margin-left: 8px;">Home</a>
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link<?php
                    if ($_SERVER['REQUEST_URI']=="/casper.php")
                    {
                        echo " active";
                    }

                    ?>" href="casper.php">Casper</a></li>
                <li class="nav-item"><a class="nav-link<?php
                    if ($_SERVER['REQUEST_URI']=="/nym.php")
                    {
                        echo " active";
                    }

                    ?>" href="nym.php">Nym</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Lunc(Coming Soon)</a></li>
                <li class="nav-item"></li>
            </ul><a class="btn btn-primary shadow" role="button" href="contact.php">Contact</a>
        </div>
    </div>
</nav>