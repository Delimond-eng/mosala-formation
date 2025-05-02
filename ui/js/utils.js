/**
 * Utility functions for the application
 */

/**
 * Format number with commas for thousands separators
 * @param {number} num - The number to format
 * @returns {string} Formatted number
 */
function formatNumberWithCommas(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

/**
 * Debounce function to limit how often a function is called
 * @param {Function} func - Function to debounce
 * @param {number} wait - Wait time in milliseconds
 * @returns {Function} Debounced function
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

/**
 * Add animation classes to elements for staggered animations
 * @param {string} selector - CSS selector for elements to animate
 * @param {string} className - Animation class to add
 * @param {number} staggerDelay - Delay between animations in ms
 */
function animateElementsSequentially(selector, className, staggerDelay = 100) {
    const elements = document.querySelectorAll(selector);
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add(className);
        }, index * staggerDelay);
    });
}

/**
 * Simulate search API call with delayed response
 * @param {string} searchTerm - Term to search for
 * @param {Function} callback - Callback function with results
 */
function simulateSearch(searchTerm, callback) {
    // Show loading state
    document.getElementById("results-container").innerHTML = `
      <div class="col-12 text-center py-5">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <p class="mt-3">Searching courses...</p>
      </div>
    `;

    // Simulate API delay
    setTimeout(() => {
        // Simple search implementation - case insensitive search in titles
        const searchTermLower = searchTerm.toLowerCase();
        let results = [];

        // Search across all categories
        Object.values(courseData).forEach((courses) => {
            const matchingCourses = courses.filter(
                (course) =>
                    course.title.toLowerCase().includes(searchTermLower) ||
                    course.provider.toLowerCase().includes(searchTermLower)
            );

            // Add unique courses to results
            matchingCourses.forEach((course) => {
                if (!results.some((r) => r.id === course.id)) {
                    results.push(course);
                }
            });
        });

        callback(results);
    }, 800); // Simulate network delay
}

/**
 * Update the page URL with query parameters without refreshing the page
 * @param {Object} params - Parameters to update
 */
function updateUrlParams(params) {
    const url = new URL(window.location);

    Object.entries(params).forEach(([key, value]) => {
        if (value === null) {
            url.searchParams.delete(key);
        } else {
            url.searchParams.set(key, value);
        }
    });

    window.history.pushState({}, "", url);
}

/**
 * Get a parameter from the URL
 * @param {string} param - Parameter name
 * @returns {string|null} Parameter value or null
 */
function getUrlParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}
