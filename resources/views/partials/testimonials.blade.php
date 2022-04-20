<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>{{ $section[4]->section_header }}</h2>
            <p>{{ $section[4]->section_desc }}</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="{{ $testimonial->delay }}">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $testimonial->comment }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
                            <h3>{{ $testimonial->commenter }}</h3>
                            <h4>{{ $testimonial->job }}</h4>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->