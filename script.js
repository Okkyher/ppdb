document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('imageInput');
    const previewImage = document.getElementById('previewImage');
    const croppedCanvas = document.getElementById('croppedCanvas');
    const croppedImageInput = document.getElementById('croppedImage');
    const clearButton = document.getElementById('clearButton');
    let cropper;

    imageInput.addEventListener('change', function () {
        const file = this.files[0];

        if (file) {
            // Check if the file is an image
            if (!file.type.startsWith('image/')) {
                alert('Please select a valid image file.');
                this.value = ''; // Clear the file input
                return;
            }

            // Check if the file size is less than 3 MB
            if (file.size > 3 * 1024 * 1024) {
                alert('File size exceeds 3 MB. Please choose a smaller image.');
                this.value = ''; // Clear the file input
                return;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                if (cropper) {
                    cropper.destroy();
                }

                // Display the preview image
                previewImage.src = e.target.result;

                // Initialize Cropper.js on the preview image
                cropper = new Cropper(previewImage, {
                    aspectRatio: 1,
                    viewMode: 2,
                    ready: function () {
                        // Do something when Cropper is ready
                    },
                });
            };

            reader.readAsDataURL(file);
        }
    });

    // Handle form submission
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();

        // Check if an image is selected
        if (!cropper) {
            alert('Please select an image to upload.');
            return;
        }

        // Get cropped data
        const croppedData = cropper.getData();

        // Create a canvas to draw the cropped image
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.width = croppedData.width;
        canvas.height = croppedData.height;

        // Draw the cropped image on the canvas
        context.drawImage(cropper.getCroppedCanvas(), 0, 0, croppedData.width, croppedData.height);

        // Convert the canvas to a data URL
        const croppedImageDataURL = canvas.toDataURL();

        // Set the data URL as the value of the hidden input
        croppedImageInput.value = croppedImageDataURL;

        // Submit the form
        this.submit();
    });

    // Handle clear button click
    clearButton.addEventListener('click', function () {
        // Reset the form and clear the preview and cropped canvas
        document.querySelector('form').reset();
        previewImage.src = '';
        croppedCanvas.style.display = 'none';
        croppedImageInput.value = '';

        // Destroy the Cropper instance if it exists
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
    });
});
