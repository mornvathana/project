// ui slider range
const rangeMin = document.getElementById("range-min");
const rangeMax = document.getElementById("range-max");
const minValue = document.getElementById("min-value");
const maxValue = document.getElementById("max-value");
const sliderTrack = document.getElementById("slider-track");

// Update the position and values based on the range inputs
function updateSlider() {
    const min = parseInt(rangeMin.value);
    const max = parseInt(rangeMax.value);

    if (min > max) {
        rangeMin.value = max - 1; // Adjust min if it is greater than max
    }

    // Update slider track position
    sliderTrack.style.left = `${(min - 8) / (1000 - 8) * 100}%`;
    sliderTrack.style.width = `${(max - min) / (1000 - 8) * 100}%`;

    // Update displayed values
    minValue.textContent = min;
    maxValue.textContent = max+'$';
}

// Event listeners for range input
rangeMin.addEventListener("input", updateSlider);
rangeMax.addEventListener("input", updateSlider);

// Initialize slider
updateSlider();







