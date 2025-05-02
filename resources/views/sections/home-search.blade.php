<div class="container-fluid py-2 mb-2 mt-50">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h3 class="display-5 fw-bold mb-4">Trouvez la formation idéale pour booster votre carrière professionnelle</h3>
            <div class="search-container">
                <form class="d-flex" id="search-form">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0">
                            <i class="far fa-search"></i>
                        </span>
                        <input type="text" class="form-control border-start-0"
                            placeholder="ex. Comptabilité" aria-label="Search">
                        <button class="btn btn-primary px-4" type="submit">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Category Navigation -->
<div class="category-nav">
    <div class="container">
        <ul class="nav nav-pills justify-content-center flex-nowrap">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-category="popular">Popular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="business">Business</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="computer-science">Computer Science</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="data-science">Data Science</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="health">Health</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="information-technology">Information Technology</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="arts-humanities">Arts and Humanities</a>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <!-- Results Section -->
    <div class="results-summary mb-4">
        <h2 hidden class="h5 text-primary">Affichage de <span id="results-count">4</span> sur <span id="total-results">3792</span> résultats au total pour <span id="search-term">Technologies de l'information</span></h2>
    </div>

    <div class="row" id="results-container">
        <!-- Results will be loaded here by JavaScript -->
    </div>
    <div class="text-center my-5">
        <a href="#" class="theme-btn"><span class="fal fa-arrow-alt-right"></span>Voir plus de formations</a>
    </div>
</div>
@push("styles")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
<link rel="stylesheet" href="{{ asset("assets/css/animations.css") }}">
@endpush
@push("scripts")
    <script src="{{ asset("assets/js/search/data.js") }}"></script>
    <script src="{{ asset("assets/js/search/utils.js") }}"></script>
    <script src="{{ asset("assets/js/search/template.js") }}"></script>
    <script src="{{ asset("assets/js/search/main.js") }}"></script>
@endpush