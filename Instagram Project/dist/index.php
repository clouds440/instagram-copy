<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="bg-black text-white">
    <div class="min-h-screen flex-grow flex h-[calc(100vh - 60px)]">
        <div class="py-5 w-1/6 md:px-0 mx-auto flex justify-center bg-black backdrop-blur-lg fixed">
            <ul class="w-full">
                <li class="pb-10">
                    <a href="index.html">
                        <span class="text-3xl hidden md:inline font-lobster px-10">
                            Instagram
                        </span>
                    </a>
                </li>
                <li>
                    <button onclick="profileView()" class="link-buttons">
                        <img src="graphics/icons/home.svg" alt="home icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Home
                        </span>
                    </button>
                </li>
                <li>
                    <button class="link-buttons">
                        <img src="graphics/icons/search.svg" alt="search icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Search
                        </span>
                    </button>
                </li>
                <li>
                    <button onclick="exploreView()" class="link-buttons">
                        <img src="graphics/icons/explore.svg" alt="explore icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Explore
                        </span>
                    </button>
                </li>
                <li>
                    <button class="link-buttons">
                        <img src="graphics/icons/reels.svg" alt="reels icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Reels
                        </span>
                    </button>
                </li>
                <li>
                    <button class="link-buttons">
                        <img src="graphics/icons/messages.svg" alt="messages icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Messages
                        </span>
                    </button>
                </li>
                <li>
                    <button class="link-buttons">
                        <img src="graphics/icons/notification.svg" alt="notifications icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Notifications
                        </span>
                    </button>
                </li>
                <li>
                    <button onclick="createView()" class="link-buttons">
                        <img src="graphics/icons/create.svg" alt="create icon" class="w-7">
                        <span class="text-1xl hidden md:inline">
                            Create
                        </span>
                    </button>
                </li>
            </ul>
        </div>

        <div id="viewDiv" class="flex justify-center w-5/6 ml-auto border-l border-l-gray-800 overflow-y-auto">

        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="app.js"></script>
</body>
</html>