document.querySelectorAll(".link-buttons").forEach(button => {
    button.classList.add(
        "w-full",
        "py-4",
        "px-10",
        "rounded-2xl",
        "hover:bg-gray-500",
        "hover:bg-opacity-20",
        "active:bg-opacity-15",
        "flex", 
        "space-x-2"
        );
  })

// Dashboard views
// Free loaded view is set to profile.php
$.ajax({
    url: 'views/profileView.php',
    type: 'GET',
    success: function (data) {
        $('#viewDiv').html(data);
    },
    error: function () {
        $('#viewDiv').html('An error occurred while loading content.')
    }
})

// Function to load content from a URL and update the viewDiv
function loadContent(url) {
    $.ajax({
        url: url,
        type: 'GET',
        success: function (data) {
            $('#viewDiv').html(data);
        },
        error: function () {
            $('#viewDiv').html('An error occurred while loading content.')
        }
    })
}

// Event handlers for the buttons
function profileView() {
    loadContent('views/profileView.php')
}

function createView() {
    loadContent('views/createView.php')
}

function exploreView() {
    loadContent('views/exploreView.php')
}

