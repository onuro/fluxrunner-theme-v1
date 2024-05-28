document.addEventListener("DOMContentLoaded", function () {
    // Define data in an organized structure
    const pricingData = [
        {
            button: '.cost-btn-1',
            prices: {
                data1: 8.61,
                data2: 176.76,
                data3: 79.92,
                data4: 116.80
            }
        },
        {
            button: '.cost-btn-2',
            prices: {
                data1: 18.61,
                data2: 276.76,
                data3: 179.92,
                data4: 216.80
            }
        },
        {
            button: '.cost-btn-3',
            prices: {
                data1: 228.61,
                data2: 2176.76,
                data3: 179.92,
                data4: 2116.80
            }
        }
    ];

    // Elements to update
    const dataElements = {
        data1: document.querySelector('.data1'),
        data2: document.querySelector('.data2'),
        data3: document.querySelector('.data3'),
        data4: document.querySelector('.data4')
    };

    // Initial values
    const initialValues = pricingData[0].prices;

    // Update initial values
    Object.keys(initialValues).forEach(key => {
        dataElements[key].textContent = `$${initialValues[key].toFixed(2)}`;
    });

    // Function to animate the counter
    function animateCounter(element, start, end) {
        const duration = 1000;
        const range = end - start;
        let startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = Math.min((timestamp - startTime) / duration, 1);
            element.textContent = `$${(start + range * progress).toFixed(2)}`;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        }

        window.requestAnimationFrame(step);
    }

    // Function to update the prices
    function updatePrices(prices) {
        Object.keys(prices).forEach(key => {
            animateCounter(dataElements[key], parseFloat(dataElements[key].textContent.slice(1)), prices[key]);
        });
    }

    // Function to handle button clicks
    function handleButtonClick(prices, button) {
        // Update prices
        updatePrices(prices);

        // Remove 'active' class from all buttons
        pricingData.forEach(item => {
            document.querySelector(item.button).classList.remove('active');
        });

        // Add 'active' class to the clicked button
        button.classList.add('active');
    }

    // Set up event listeners
    pricingData.forEach(item => {
        document.querySelector(item.button + ' a').addEventListener('click', function () {
            handleButtonClick(item.prices, document.querySelector(item.button));
        });
    });

    // Set the first button as active by default
    document.querySelector(pricingData[0].button).classList.add('active');
});
