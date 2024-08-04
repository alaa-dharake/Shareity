document.addEventListener("DOMContentLoaded", function () {
    const minValue = document.getElementById("min-value");
    const maxValue = document.getElementById("max-value");
    const rangeFill = document.querySelector(".range-fill");
    const minPriceInput = document.querySelector(".min-price");
    const maxPriceInput = document.querySelector(".max-price");

    // Function to validate range and update the fill color on slider
    function validateRange() {
        let minPrice = parseInt(minPriceInput.value) || 0;
        let maxPrice = parseInt(maxPriceInput.value) || 0;

        minPrice = Math.max(minPrice, 5);
        maxPrice = Math.min(maxPrice, 50);

        if (minPrice > maxPrice) {
            let tempValue = maxPrice;
            maxPrice = minPrice;
            minPrice = tempValue;
        }

        const totalRange = 50 - 5;
        const minPercentage = ((minPrice - 5) / totalRange) * 100;
        const maxPercentage = ((maxPrice - 5) / totalRange) * 100;

        rangeFill.style.left = minPercentage + "%";
        rangeFill.style.width = (maxPercentage - minPercentage) + "%";

        minValue.textContent = "$" + minPrice;
        maxValue.textContent = "$" + maxPrice;
    }

    // Add event listeners to each input element for both input and change events
    minPriceInput.addEventListener("input", validateRange);
    minPriceInput.addEventListener("change", validateRange);
    maxPriceInput.addEventListener("input", validateRange);
    maxPriceInput.addEventListener("change", validateRange);

    // Initial call to validateRange
    validateRange();
});