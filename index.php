<?php
// Define feature and testimonials data
$features = [
    ["img" => "https://picsum.photos/300/200?random=4", "title" => "Feature One", "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."],
    ["img" => "https://picsum.photos/300/200?random=5", "title" => "Feature Two", "desc" => "Sed nisi. Nulla quis sem at nibh elementum imperdiet."],
    ["img" => "https://picsum.photos/300/200?random=6", "title" => "Feature Three", "desc" => "Praesent mauris. Fusce nec tellus sed augue semper porta."]
];
$testimonials = [
    ["name" => "Olivia Moore", "text" => "Absolutely fantastic from start to finish.", "img" => "https://picsum.photos/100?random=12"],
    ["name" => "Liam Jackson", "text" => "The customer service was outstanding.", "img" => "https://picsum.photos/100?random=13"],
    ["name" => "Ava Rodriguez", "text" => "A delightful experience, will visit again.", "img" => "https://picsum.photos/100?random=14"],
    ["name" => "Noah Lee", "text" => "Top-notch service and friendly staff.", "img" => "https://picsum.photos/100?random=15"],
    ["name" => "Emma Walker", "text" => "Beyond satisfied with the experience.", "img" => "https://picsum.photos/100?random=16"],
    ["name" => "Lucas Hall", "text" => "Great ambiance and professional service.", "img" => "https://picsum.photos/100?random=17"],
    ["name" => "Charlotte Allen", "text" => "Everything was perfect from start to finish.", "img" => "https://picsum.photos/100?random=18"],
    ["name" => "Mason Young", "text" => "Friendly staff and excellent service.", "img" => "https://picsum.photos/100?random=19"],
    ["name" => "Amelia Hernandez", "text" => "Remarkably satisfying experience.", "img" => "https://picsum.photos/100?random=20"],
    ["name" => "Logan King", "text" => "Will surely come back next time!", "img" => "https://picsum.photos/100?random=21"],
    ["name" => "Sophia Wright", "text" => "Highly recommend for quality service.", "img" => "https://picsum.photos/100?random=22"],
    ["name" => "Ethan Lopez", "text" => "Completely exceeded my expectations.", "img" => "https://picsum.photos/100?random=23"],
    ["name" => "Isabella Green", "text" => "Simply the best service I have had.", "img" => "https://picsum.photos/100?random=24"],
    ["name" => "Aiden Scott", "text" => "Would recommend to anyone looking for quality.", "img" => "https://picsum.photos/100?random=25"],
    ["name" => "Mila Adams", "text" => "An experience to remember forever.", "img" => "https://picsum.photos/100?random=26"],
    ["name" => "Jacob Phillips", "text" => "Exceptional service and attention to detail.", "img" => "https://picsum.photos/100?random=27"],
    ["name" => "Emily Carter", "text" => "My go-to place every time I'm in town.", "img" => "https://picsum.photos/100?random=28"],
    ["name" => "Benjamin Mitchell", "text" => "Outstanding in every way imaginable.", "img" => "https://picsum.photos/100?random=29"],
    ["name" => "Avery Perez", "text" => "Top marks for quality and service.", "img" => "https://picsum.photos/100?random=30"],
    ["name" => "Ella Roberts", "text" => "They ensured everything was perfect!", "img" => "https://picsum.photos/100?random=31"]
];

// Pagination setup for testimonials
$testimonialsPerPage = 4;
$totalTestimonials = count($testimonials);
$totalPages = ceil($totalTestimonials / $testimonialsPerPage);
$currentPage = isset($_GET['page']) ? max(1, min((int)$_GET['page'], $totalPages)) : 1;
$startIndex = ($currentPage - 1) * $testimonialsPerPage;
$testimonialsSubset = array_slice($testimonials, $startIndex, $testimonialsPerPage);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        .card,
        .btn-primary,
        .nav-link,
        .navbar-brand,
        .btn-outline-light {
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #1e293b;
            color: #f8fafc;
        }

        .dark-mode .card {
            background-color: #374151;
            color: #f8fafc;
            border-color: #374151;
        }

        .dark-mode .navbar,
        .dark-mode footer {
            background-color: #374151;
        }

        .dark-mode .nav-link,
        .dark-mode .navbar-brand,
        .dark-mode .btn-outline-light {
            color: #f8fafc;
        }

        .dark-mode .btn-primary {
            background-color: #2563eb;
            border-color: #2563eb;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">My Bootstrap Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <button id="theme-toggle" class="btn btn-outline-light">Toggle Theme</button>
            </div>
        </div>
    </nav>

    <section class="text-white text-center bg-primary py-5">
        <div class="container">
            <h2 class="display-4 fw-bold">Inspiring Your Future</h2>
            <p class="lead">Welcome to a world of opportunities and endless possibilities.</p>
            <a href="#" class="btn btn-secondary">Get Started</a>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Features</h2>
            <div class="row">
                <?php foreach ($features as $feature): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="<?= htmlspecialchars($feature['img']) ?>" class="card-img-top" alt="<?= htmlspecialchars($feature['title']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($feature['title']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($feature['desc']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Testimonials</h2>
            <div class="row">
                <?php foreach ($testimonialsSubset as $testimonial): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body text-start">
                                <img src="<?= htmlspecialchars($testimonial['img']) ?>" class="rounded-circle float-start me-3" alt="<?= htmlspecialchars($testimonial['name']) ?>">
                                <h5 class="card-title"><?= htmlspecialchars($testimonial['name']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($testimonial['text']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="d-flex justify-content-center mt-4">
                    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                        <a href="?page=<?= $page ?>" class="mx-2 <?= $page == $currentPage ? 'fw-bold' : '' ?>">
                            <?= $page ?>
                        </a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary text-white py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; <?= date("Y") ?> My Bootstrap Page. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const setTheme = (isDark) => {
            document.body.classList.toggle('dark-mode', isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            themeToggleBtn.innerText = isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode';
        };

        const currentThemeIsDark = localStorage.getItem('theme') === 'dark';
        setTheme(currentThemeIsDark);

        themeToggleBtn.addEventListener('click', () => {
            const isDark = document.body.classList.toggle('dark-mode');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            themeToggleBtn.innerText = isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode';
        });
    </script>
</body>

</html>