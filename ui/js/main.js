/**
 * Main application logic for EduSearch
 */

document.addEventListener("DOMContentLoaded", () => {
    // Initialize page
    initApp();

    // Event listeners
    setupEventListeners();
});

/**
 * Initialize the application
 */
function initApp() {
    // Check URL parameters for initial state
    const category = getUrlParam("category") || "popular";
    const searchTerm = getUrlParam("search");

    if (searchTerm) {
        // If search term is in URL, perform search
        document.querySelector("#search-form input").value = searchTerm;
        performSearch(searchTerm);
    } else {
        // Otherwise load default category
        loadCourses(category);

        // Update active category in navigation
        document.querySelectorAll(".category-nav .nav-link").forEach((link) => {
            link.classList.remove("active");
            if (link.dataset.category === category) {
                link.classList.add("active");
            }
        });
    }
}

/**
 * Set up event listeners for interactive elements
 */
function setupEventListeners() {
    // Search form submission
    document.getElementById("search-form").addEventListener("submit", (e) => {
        e.preventDefault();
        const searchInput = e.target.querySelector("input");
        performSearch(searchInput.value);
    });

    // Category navigation
    document.querySelectorAll(".category-nav .nav-link").forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const category = e.target.dataset.category;

            // Update active state
            document
                .querySelectorAll(".category-nav .nav-link")
                .forEach((l) => {
                    l.classList.remove("active");
                });
            e.target.classList.add("active");

            // Load courses for selected category
            loadCourses(category);

            // Update URL parameters
            updateUrlParams({ category, search: null });
        });
    });

    // Load more button
    document.getElementById("load-more").addEventListener("click", () => {
        // In a real application, this would load more results
        // For demo purposes, we'll just show an alert
        alert(
            "In a real application, this would load more courses from the server."
        );
    });
}

/**
 * Load courses for a specific category
 * @param {string} category - Category identifier
 */
function loadCourses(category) {
    const courses = courseData[category] || [];
    const totalResults = categoryTotals[category] || 0;

    // Update UI to reflect category
    document.getElementById("search-term").textContent = category.replace(
        "-",
        " "
    );
    document.getElementById("results-count").textContent = courses.length;
    document.getElementById("total-results").textContent =
        formatNumberWithCommas(totalResults);

    // Clear existing results
    const resultsContainer = document.getElementById("results-container");
    resultsContainer.innerHTML = "";

    // Render course cards
    courses.forEach((course) => {
        resultsContainer.innerHTML += createCourseCardHtml(course);
    });

    // Add animation for a more engaging experience
    animateElementsSequentially(".result-item", "fade-in");
}

/**
 * Perform search with the given term
 * @param {string} searchTerm - Term to search for
 */
function performSearch(searchTerm) {
    if (!searchTerm.trim()) {
        // If search is empty, load popular courses
        loadCourses("popular");
        updateUrlParams({ category: "popular", search: null });
        return;
    }

    // Update URL parameters
    updateUrlParams({ search: searchTerm, category: null });

    // Reset all active categories
    document.querySelectorAll(".category-nav .nav-link").forEach((link) => {
        link.classList.remove("active");
    });

    // Update search term display
    document.getElementById("search-term").textContent = searchTerm;

    // Perform search simulation
    simulateSearch(searchTerm, (results) => {
        const resultsContainer = document.getElementById("results-container");

        // Update counts
        document.getElementById("results-count").textContent = results.length;
        document.getElementById("total-results").textContent = results.length;

        // Display results or empty state
        if (results.length > 0) {
            resultsContainer.innerHTML = "";
            results.forEach((course) => {
                resultsContainer.innerHTML += createCourseCardHtml(course);
            });

            // Show/hide load more button based on results
            document.getElementById("load-more").style.display =
                results.length > 8 ? "block" : "none";

            // Add animation
            animateElementsSequentially(".result-item", "fade-in");
        } else {
            resultsContainer.innerHTML = createEmptyResultsHtml(searchTerm);
            document.getElementById("load-more").style.display = "none";
        }
    });
}
