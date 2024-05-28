document.addEventListener("DOMContentLoaded", function () {
    const headings = document.querySelectorAll(".faq-accordion h4.wp-block-heading");

    headings.forEach((heading, index) => {
        // Create an anchor element
        const anchor = document.createElement("a");
        anchor.href = "javascript:void(0)";
        anchor.innerHTML = heading.innerHTML;
        
        // Clear the original heading content and append the anchor
        heading.innerHTML = "";
        heading.appendChild(anchor);

        // Get the adjacent content div
        const content = heading.nextElementSibling;
        content.style.overflow = "hidden";
        content.style.transition = "max-height 0.3s ease-out";

        if (heading.parentElement.classList.contains("active")) {
            // If the parent has 'active' class, set maxHeight to scrollHeight
            content.style.maxHeight = content.scrollHeight + "px";
        } else {
            content.style.maxHeight = "0";
        }

        heading.addEventListener("click", function () {
            const parentGroup = heading.parentElement;
            const isActive = parentGroup.classList.contains("active");

            // Close all other open accordions
            document.querySelectorAll(".faq-accordion .wp-block-group.active").forEach(activeGroup => {
                activeGroup.classList.remove("active");
                activeGroup.querySelector(".faq-accordion div.wp-block-group").style.maxHeight = "0";
            });

            if (!isActive) {
                // Open the clicked accordion
                parentGroup.classList.add("active");
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });
});
