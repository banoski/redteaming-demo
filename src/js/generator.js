function generateImage() {
    // Execute the PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/generate-image.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Image generation successful, display the image
            var image = document.createElement("img");
            image.src = "../../assets/generated-images/output.png";
            document.getElementById("imageContainer").appendChild(image);
        }
    };
    xhr.send();
}