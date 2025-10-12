<?php
$lang = request()->route('lang') ?? app()->getLocale() ?? 'en';
?>
<!DOCTYPE html>
<html lang="<?php echo e($lang); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Home'); ?> — Buenos Aires Polo Day</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&family=Wittgenstein:wght@400;600&display=swap"
        rel="stylesheet">

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-sand py-0 border-0" data-bs-theme="light">
        <div class="container-fluid navbar-grid">

            
            <div class="d-none d-lg-block">
                <ul class="navbar-nav flex-row gap-3 mb-0">
                    <li class="nav-item dropdown hover-open">
                        <a class="nav-link dropdown-toggle px-0" href="#" data-bs-toggle="dropdown">Our Experiences</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#our-experiences">All Experiences</a></li>
                            <li><a class="dropdown-item" href="#gaucho">Gaucho Trail</a></li>
                            <li><a class="dropdown-item" href="#polo">Polo Day</a></li>
                            <li><a class="dropdown-item" href="#fishing">Fishing Trips</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link px-0" href="#tailored">Tailored Experiences</a></li>

                    <li class="nav-item dropdown hover-open">
                        <a class="nav-link dropdown-toggle px-0" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about">About Us</a></li>
                            <li><a class="dropdown-item" href="#partners">Partners</a></li>
                            <li><a class="dropdown-item" href="#team">Our Team</a></li>
                            <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link px-0" href="#contact">Contact</a></li>
                </ul>
            </div>

            
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <a class="navbar-brand fw-semibold text-center brand-center-lg brand-white" href="#">Buenos Aires Polo
                Day</a>

            
            <div class="d-none d-sm-flex align-items-center gap-2 justify-content-end">
                <a href="<?php echo e(route('home', ['lang'=>'en'])); ?>" class="lang-link <?php echo e($lang==='en'?'fw-bold':''); ?>">EN</a>
                <span class="text-muted">|</span>
                <a href="<?php echo e(route('home', ['lang'=>'es'])); ?>" class="lang-link <?php echo e($lang==='es'?'fw-bold':''); ?>">ES</a>
                <span class="text-muted">|</span>
                <a href="<?php echo e(route('home', ['lang'=>'pt'])); ?>" class="lang-link <?php echo e($lang==='pt'?'fw-bold':''); ?>">PT</a>
            </div>

            
            <div class="collapse navbar-collapse d-lg-none mt-2" id="mainNav">
                <ul class="navbar-nav flex-column gap-1 mb-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Our Experiences</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#our-experiences">All Experiences</a></li>
                            <li><a class="dropdown-item" href="#gaucho">Gaucho Trail</a></li>
                            <li><a class="dropdown-item" href="#polo">Polo Day</a></li>
                            <li><a class="dropdown-item" href="#fishing">Fishing Trips</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#tailored">Tailored Experiences</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about">About Us</a></li>
                            <li><a class="dropdown-item" href="#partners">Partners</a></li>
                            <li><a class="dropdown-item" href="#team">Our Team</a></li>
                            <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>

    
    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->yieldContent('footer'); ?>
</body>

</html><?php /**PATH C:\Users\salvaCastro\Documents\proyectos\baPoloDay\resources\views/layouts/main.blade.php ENDPATH**/ ?>