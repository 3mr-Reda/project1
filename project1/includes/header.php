<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | TechVision' : 'TechVision | الموقع الرئيسي'; ?></title>
    
    <!-- Bootstrap CSS (Local) -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons (CDN for rich modern icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-body-tertiary">

<?php
// Include Navbar automatically in every page header
include 'includes/navbar.php';
?>

<main class="flex-grow-1">
