<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        session_start();
    ?>
    <div class="min-h-screen flex-grow flex-col">
        <div class="pt-6 flex-grow flex h-auto">
            <div class="py-5 w-2/6 md:px-0 mr-8 flex justify-end">
                <img src="uploads/<?php echo $_SESSION['imgName']?>" alt="profile picture" class="rounded-full w-40 h-40">
            </div>
            <div class="block pt-4 pl-16 justify-start w-4/6 h-auto">
                <?php
                    echo $_SESSION['username'];
                ?>

                <button class="ml-4 bg-gray-500 bg-opacity-50 px-3 py-1 rounded-md hover:bg-opacity-30">Edit profile</button>
                <button class="ml-1 bg-gray-500 bg-opacity-50 px-3 py-1 rounded-md hover:bg-opacity-30">View archive</button>
                <button class="ml-1 bg-gray-500 bg-opacity-50 px-3 py-1 rounded-md hover:bg-opacity-30">Ad tools</button>
                <a href="logout.php" class="ml-1 bg-red-400 bg-opacity-50 px-3 py-1 rounded-md hover:bg-opacity-30">Log Out</a>
                
                <div class="justify-start block mt-5 font-roboto">
                    <pre>5 posts    10 followers    15 following</pre>
                </div>
                <div class="justify-start block mt-3">
                    <?php
                        echo $_SESSION['name'];
                    ?>
                </div>
                <div class="justify-start block mt-3">
                    <p>Emotionally in debt 😭</p>
                    <p>But I still lend smiles to others 😊</p>
                </div>
            </div>
        </div>
        <div class="flex flex-1 justify-center border-t border-t-gray-800 w-3/5 mx-auto mt-52">
            <div class="py-4 px-2 mx-8 border-t flex">
                <img src="graphics/icons/mdi_grid.svg" alt="" class="mr-2">
                <button>POSTS</button>
            </div>
            <div class="py-4 px-2 mx-14 flex">
                <img src="graphics/icons/bookmark.svg" alt="" class="mr-2">
                <button>SAVED</button>
            </div>
            <div class="py-4 px-2 mx-8 flex">
                <img src="graphics/icons/la_portrait.svg" alt="" class="mr-2">
                <button>TAGGED</button>
            </div>
        </div>
        <div class="md:grid md:grid-cols-3 sm:grid sm:grid-cols-2 gap-1 flex flex-1 justify-center w-3/5 mx-auto">
                <?php
                    require "postsArray.php";
                    for ($i = 0; $i < count($pictureArray); $i++) {
                        echo "<img src='uploads/$pictureArray[$i]' alt='$descriptionArray[$i]' class='w-80 h-72'>";
                  }
                ?>
            </div>
    </div>

        
    <script src="views.js"></script>
</body>
</html>