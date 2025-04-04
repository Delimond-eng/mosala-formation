@props([
    'category' => 'Uncategorized',
    'image' => 'assets/img/default.jpg',
    'link' => '#',
    'lessons' => 0,
    'rating' => 0,
    'title' => 'No Title',
    'description' => 'No description available.',
    'seats' => 0,
    'duration' => 'N/A',
    'price' => 0
])
<div class="course-item wow fadeInUp" data-wow-delay=".75s">
    <div class="course-img">
        <span class="course-tag"><i class="far fa-bookmark"></i> {{ $category }}</span>
        <img src="{{ $image }}" alt="">
        <a href="{{ url("/course-details")}}" class="btn"><i class="far fa-link"></i></a>
    </div>
    <div class="course-content">
        <div class="course-meta">
            <span class="course-meta-left"><i class="far fa-book"></i> {{ $lessons }} Lessons</span>
            <div class="course-rating">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="{{ $i <= $rating ? 'fas' : 'far' }} fa-star"></i>
                @endfor
                <span>({{ number_format($rating, 1) }})</span>
            </div>
        </div>
        <h4 class="course-title">
        <a href="{{ url("/course-details") }}">{{ $title }}</a>
        {{--<a href="{{ $link }}">{{ $title }}</a>--}}
        </h4>
        <p class="course-text">{{ $description }}</p>
        <div class="course-bottom">
            <div class="course-bottom-left">
                <span><i class="far fa-users"></i>{{ $seats }} Seats</span>
                <span><i class="far fa-clock"></i>{{ $duration }}</span>
            </div>
            <span class="course-price">${{ number_format($price, 2) }}</span>
        </div>
    </div>
</div>
