<?php
// $pageTitle should be set before including this file
// e.g. $pageTitle = 'About Page';
if (!isset($pageTitle)) $pageTitle = 'SLBN Badegan Ponorogo';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - SLBN Badegan Ponorogo</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#26ad14'
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif'],
                    swash: ['Berkshire Swash', 'cursive'],
                }
            }
        }
    }
    </script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .font-swash {
        font-family: 'Berkshire Swash', cursive;
    }

    /* smooth scroll */
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>

<body class="bg-white text-gray-900">

    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="pt-16">
