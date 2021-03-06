<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student School</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Mobile App Template">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Nunito:400,600,700" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous">
    </script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url('public/jquery_flipster_master/dist/jquery.flipster.min.css'); ?>">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url('public/css/theme.css'); ?>">
    <link id="theme-style" rel="stylesheet" href="<?= base_url('public/css/styles.css'); ?>">
    <link id="theme-style" rel="stylesheet" href="<?= base_url('public/css/header_guest.css'); ?>">
    <link id="theme-style" rel="stylesheet" href="<?= base_url('public/css/form_style.css'); ?>">

</head>

<body>
    <header class="header-guest">
        <div class="branding">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <h1 class="site-logo">
                        <a class="navbar-brand" href="<?= base_url('') ?>">
                            <img class="logo-icon" src="<?= base_url('public/images/logo-icon.svg'); ?>" alt="logo">
                            <!-- Logo -->
                            <span class="logo-text">Student School</span>
                        </a>
                    </h1>
                    <div class="menu-guest">
                        <ul class="social-list list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="nav-link" href="<?= base_url('guest/login'); ?>">Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="nav-link" href="<?= base_url('guest/adminLogin'); ?>">Admin</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="nav-link" href="<?= base_url('guest/register'); ?>">Register</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu -->
                </nav>
            </div>
        </div>
    </header>
    <!--Header-->