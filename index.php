<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- Header with Navigation -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-400 text-white shadow-lg p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-extrabold tracking-tight">My PHP Page</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-lg hover:text-gray-200">Home</a></li>
                    <li><a href="#" class="text-lg hover:text-gray-200">About</a></li>
                    <li><a href="#" class="text-lg hover:text-gray-200">Services</a></li>
                    <li><a href="#" class="text-lg hover:text-gray-200">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-cover bg-center text-white py-24" style="background-image: url('https://picsum.photos/1200/800?random=7');">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Inspiring Your Future</h2>
            <p class="text-xl mb-8">Welcome to a world of opportunities and endless possibilities.</p>
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-200">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                // Feature Cards
                $features = [
                    ["img" => "https://picsum.photos/300/200?random=4", "title" => "Feature One", "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam."],
                    ["img" => "https://picsum.photos/300/200?random=5", "title" => "Feature Two", "desc" => "Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum."],
                    ["img" => "https://picsum.photos/300/200?random=6", "title" => "Feature Three", "desc" => "Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa."],
                    ["img" => "https://picsum.photos/300/200?random=8", "title" => "Feature Four", "desc" => "Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra."],
                    ["img" => "https://picsum.photos/300/200?random=9", "title" => "Feature Five", "desc" => "Inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc."],
                    ["img" => "https://picsum.photos/300/200?random=10", "title" => "Feature Six", "desc" => "Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor."],
                    ["img" => "https://picsum.photos/300/200?random=11", "title" => "Feature Seven", "desc" => "Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor."],
                    ["img" => "https://picsum.photos/300/200?random=12", "title" => "Feature Eight", "desc" => "Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet."]
                ];
                foreach ($features as $feature) { ?>
                    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                        <img src="<?php echo $feature['img']; ?>" alt="<?php echo $feature['title']; ?>" class="w-full h-40 object-cover rounded-t-lg">
                        <h3 class="text-xl font-semibold mt-4"><?php echo $feature['title']; ?></h3>
                        <p class="text-gray-600 mt-2"><?php echo $feature['desc']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <footer class="bg-gradient-to-r from-blue-600 to-blue-400 text-white shadow-inner p-4 mt-8">
        <p class="text-center">&copy; <?php echo date("Y"); ?> My PHP Page. All rights reserved.</p>
    </footer>
</body>

</html>