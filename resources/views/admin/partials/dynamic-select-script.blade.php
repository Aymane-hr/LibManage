<?php
// Create this file: resources/views/admin/image-script.blade.php
?>

<script>
document.addEventListener("turbo:load", () => {
    console.log("Dynamic select script loaded");

    // Wait a bit for Orchid to fully render the form
    setTimeout(function() {
        const typeSelect = document.querySelector('select[name="image[image_type]"]');
        const blogField = document.querySelector('select[name="image[blog_id]"]');
        const productField = document.querySelector('select[name="image[produit_id]"]');

        console.log("Type select:", typeSelect);
        console.log("Blog field:", blogField);
        console.log("Product field:", productField);

        if (!typeSelect || !blogField || !productField) {
            console.error("One or more fields not found");
            return;
        }

        // Find the containers (try multiple selectors)
        const blogContainer = blogField.closest('.form-group') ||
                            blogField.closest('.mb-3') ||
                            blogField.closest('.row') ||
                            blogField.parentElement;

        const productContainer = productField.closest('.form-group') ||
                               productField.closest('.mb-3') ||
                               productField.closest('.row') ||
                               productField.parentElement;

        console.log("Blog container:", blogContainer);
        console.log("Product container:", productContainer);

        function toggleFields() {
            const selectedType = typeSelect.value;
            console.log("Selected type:", selectedType);

            if (selectedType === "blog") {
                console.log("Showing blog field");
                blogContainer.style.display = "block";
                productContainer.style.display = "none";
                productField.value = "";
                blogField.setAttribute("required", "required");
                productField.removeAttribute("required");
            } else if (selectedType === "product") {
                console.log("Showing product field");
                blogContainer.style.display = "none";
                productContainer.style.display = "block";
                blogField.value = "";
                productField.setAttribute("required", "required");
                blogField.removeAttribute("required");
            } else {
                console.log("Hiding both fields");
                blogContainer.style.display = "none";
                productContainer.style.display = "none";
                blogField.removeAttribute("required");
                productField.removeAttribute("required");
                blogField.value = "";
                productField.value = "";
            }
        }

        // Initial state
        toggleFields();

        // Listen for changes
        typeSelect.addEventListener("change", function() {
            console.log("Type changed to:", this.value);
            toggleFields();
        });

    }, 500); // Wait 500ms for Orchid to fully render
});
</script>
