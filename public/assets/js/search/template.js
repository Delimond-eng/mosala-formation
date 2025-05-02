/**
 * Templates for rendering course cards and other UI elements
 */

/**
 * Create stars HTML based on rating
 * @param {number} rating - Course rating (1-5)
 * @returns {string} HTML for star rating
 */
function createStarsHtml(rating) {
    let starsHtml = "";
    const fullStars = Math.floor(rating);
    const hasHalfStar = rating % 1 >= 0.5;

    for (let i = 1; i <= 5; i++) {
        if (i <= fullStars) {
            starsHtml += `<i class="bi bi-star-fill" style="--i: ${i}"></i>`;
        } else if (i === fullStars + 1 && hasHalfStar) {
            starsHtml += `<i class="bi bi-star-half" style="--i: ${i}"></i>`;
        } else {
            starsHtml += `<i class="bi bi-star" style="--i: ${i}"></i>`;
        }
    }

    return starsHtml;
}

/**
 * Format large numbers to a more readable format
 * @param {number|string} count - Number to format
 * @returns {string} Formatted number
 */
function formatNumber(count) {
    if (typeof count === "string") {
        // If already formatted (e.g., "20k"), return as is
        return count;
    }

    if (count >= 1000000) {
        return (count / 1000000).toFixed(1) + "m";
    } else if (count >= 1000) {
        return (count / 1000).toFixed(1) + "k";
    }

    return count.toString();
}

/**
 * Create HTML for a course card
 * @param {Object} course - Course data
 * @returns {string} HTML for course card
 */
function createCourseCardHtml(course) {
    return `
      <div class="col-lg-6 col-12 result-item mb-4">
        <div class="course-card">
          <div class="course-image-wrapper">
            <img src="${course.image}" alt="${
        course.title
    }" class="course-image">
          </div>
          <div class="course-content">
            <div class="course-provider">${course.provider}</div>
            <h3 class="h5 course-title">${course.title}</h3>
            <div class="course-type">${course.type}</div>
            <div class="course-rating">
              <div class="rating-stars">
                ${createStarsHtml(course.rating)}
              </div>
              <div class="rating-count">${course.rating} (${formatNumber(
        course.ratingCount
    )})</div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="student-count">${course.students} students</span>
              <div class="course-level">
                <i class="bi bi-bar-chart-fill level-icon"></i>
                ${course.level}
              </div>
            </div>
          </div>
        </div>
      </div>
    `;
}

/**
 * Create HTML for empty search results
 * @param {string} searchTerm - The search term that yielded no results
 * @returns {string} HTML for empty results
 */
function createEmptyResultsHtml(searchTerm) {
    return `
      <div class="col-12 text-center py-5">
        <div class="mb-4">
          <i class="bi bi-search" style="font-size: 3rem; color: var(--bs-secondary);"></i>
        </div>
        <h3>No results found for "${searchTerm}"</h3>
        <p class="text-muted">Try adjusting your search terms or browse categories below.</p>
        <div class="mt-4">
          <button class="btn btn-outline-primary me-2" onclick="loadCourses('popular')">Browse Popular Courses</button>
          <button class="btn btn-outline-secondary" onclick="document.querySelector('#search-form input').focus()">Search Again</button>
        </div>
      </div>
    `;
}
