<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TailorEase</title>
</head>
<body>
  <div class="container mx-auto flex justify-center items-center">
    <div class="bg-gray-950 w-1/2">
      <form action="postHandler.php" method="post" enctype="multipart/form-data">
        <label for="postUpload" class="bg-blue-500 text-white py-2 my-5 cursor-pointer rounded-md flex justify-center">
          Select from computer
          <input type="file" id="postUpload" name="postUpload" accept=".jpg, .png" style="display: none;" required>
        </label>
        <img id="preview" src="#" alt="">
        <textarea id="postDescription" name="postDescription" maxlength="255" class="w-full h-24 mb-4 p-2 bg-gray-800 my-16" placeholder="Write a caption"></textarea>
        <input type="submit" value="Share" class="bg-blue-500 text-white py-2 mx-auto w-40 rounded-md flex justify-center cursor-pointer"/>
      </form>
    </div>
  </div>

    <script>
          // Post picture preview after uploading
        window.addEventListener('load', function() {
            document.getElementById('file-input').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                var img = document.getElementById('preview')
                img.onload = function() {
                URL.revokeObjectURL(img.src) // no longer needed, free memory
                }
                img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                img.classList.add('img-fluid')
            }
            });
        });
    </script>
</body>
</html>