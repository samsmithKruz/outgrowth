document.querySelector(".menu").onclick = (e) => {
    e.preventDefault();
    console.log("Nav");
    document.querySelector("nav").classList.add("show");
};
document.querySelector(".close").onclick = (e) => {
    e.preventDefault();
    console.log("Close");
    document.querySelector("nav").classList.remove("show");
};
document.addEventListener("DOMContentLoaded", function () {
    // Function to start the odometer rolling
    function startOdometer(rollerElement) {
        const maxValue = rollerElement.getAttribute("data-max"); // Get max value from the data attribute

        // Trigger the odometer update to the max value
        rollerElement.innerHTML = maxValue;
    }

    // Set up IntersectionObserver to watch the .roller elements
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Start the odometer rolling when the element comes into view
                    startOdometer(entry.target);
                    // Unobserve the element after the animation is triggered
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        }
    ); // Trigger when 50% of the element is visible

    // Select all elements with the .roller class and observe them
    const rollers = document.querySelectorAll(".roller");
    rollers?.forEach((roller) => {
        observer.observe(roller);
    });
});