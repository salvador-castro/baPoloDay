<?php
$lang = request()->route('lang') ?? app()->getLocale() ?? 'en';
?>
<!DOCTYPE html>
<html lang="<?php echo e($lang); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buenos Aires Polo Day</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&family=Wittgenstein:wght@400;600&display=swap"
        rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-sand fixed-top" data-bs-theme="light">
        <div class="container-fluid">

            
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav"
                aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <a class="navbar-brand d-lg-none mx-auto" href="#">
                <img src="/img/logoNavbar.png" alt="Buenos Aires Polo Day" />
            </a>

            
            <div class="d-none d-lg-flex align-items-center desktop-menu">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Our Experiences
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#our-experiences">All Experiences</a></li>
                            <li><a class="dropdown-item" href="#gaucho">Gaucho Trail</a></li>
                            <li><a class="dropdown-item" href="#polo">Polo Day</a></li>
                            <li><a class="dropdown-item" href="#fishing">Fishing Trips</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tailored">Tailored Experiences</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about">About Us</a></li>
                            <li><a class="dropdown-item" href="#partners">Partners</a></li>
                            <li><a class="dropdown-item" href="#team">Our Team</a></li>
                            <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>

            
            <a class="navbar-brand d-none d-lg-block mx-auto" href="#">
                <img src="/img/logoNavbar.png" alt="Buenos Aires Polo Day" />
            </a>

            
            <div class="lang-group">
                <a href="<?php echo e(route('home', ['lang'=>'en'])); ?>" class="lang-link <?php echo e($lang==='en'?'fw-bold':''); ?>">EN</a>
                <span class="separador-lang">|</span>
                <a href="<?php echo e(route('home', ['lang'=>'es'])); ?>" class="lang-link <?php echo e($lang==='es'?'fw-bold':''); ?>">ES</a>
                <span class="separador-lang">|</span>
                <a href="<?php echo e(route('home', ['lang'=>'pt'])); ?>" class="lang-link <?php echo e($lang==='pt'?'fw-bold':''); ?>">PT</a>
            </div>

            
            <div class="collapse navbar-collapse d-lg-none" id="mobileNav">
                <ul class="navbar-nav mt-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Our Experiences
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#our-experiences">All Experiences</a></li>
                            <li><a class="dropdown-item" href="#gaucho">Gaucho Trail</a></li>
                            <li><a class="dropdown-item" href="#polo">Polo Day</a></li>
                            <li><a class="dropdown-item" href="#fishing">Fishing Trips</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tailored">Tailored Experiences</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about">About Us</a></li>
                            <li><a class="dropdown-item" href="#partners">Partners</a></li>
                            <li><a class="dropdown-item" href="#team">Our Team</a></li>
                            <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('footer'); ?>

</body>

</html><?php /**PATH C:\Users\salvaCastro\Documents\proyectos\baPoloDay\resources\views/layouts/main.blade.php ENDPATH**/ ?>