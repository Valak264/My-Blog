<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
    .card-width {
        width: 54rem;
    }    
    footer {
        color: white;
        text-align: center;
        font-weight: bold;
    }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/ckeditor/ckeditor.js'); ?>"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About Me</a>
                    </li>
                    <?php if (auth()->loggedIn()): ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/newArticle">New Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/logout">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/login">Login</a>
                        </li>
                    <?php endif ?>                       
                </ul>
            </div>
        </div>
    </nav>
