<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sport Club</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    STYLES
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="font-sans bg-gray-100">

     -->
<main>
    <div class="h-96 relative text-white ">
        <!-- heroe bg-orange-300 text-white p-40 -->
        <img src="public/img/images/1.jpg" alt="" class="object-cover h-full w-full ">
        <div class="p-6 md:p-10 text-center z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-40 rounded-lg w-3/4">
            <h1 class="text-lg md:text-5xl font-bold mb-2 md:mb-4">Welcome to Sport Club</h1>
            <p class="text-sm md:text-xl">Experience the thrill of <span class="font-bold text-orange-500 underline underline-offset-2"> Sport Club</span> like never before. Join us on the journey of <span class="font-bold "> "teamwork, dedication, and victory!"</span></p>
        </div>
    </div>
    <!-- CONTENT -->
    <h2 class="text-2xl font-bold mb-4 text-black underline underline-offset-1 mx-4 mt-2">Upcoming Events</h2>

    <section class="container mx-auto md:mt-8 mt-1 px-16">

        <!-- Upcoming Events -->
        <div class="mt-2 flex flex-row">
            <div class="flex flex-wrap justify-center">
                <!-- Display upcoming events with dates and venues -->
                <?php
                for ($i = 1; $i <= 6; $i++)
                    echo '<div class="m-4 text-center">
                    <img src="public/img/images/event' . $i . '.jpg" alt="" class="h-64 rounded-lg shadow-lg">
                    <h3 class="text-sm font-semibold mt-1 ">Game Day: [Event Name]</h3>
                    <p class="text-xs">Date: [Event Date]</p>
                    <p class="text-xs">Venue: [Event Venue]</p>
                </div> ' ?>
            </div>
        </div>
        </div>
    </section>
    <?php
    echo view('Components/gallery.php');
    ?>
    <?php
    echo view('Components/about.php');

    ?>
</main>