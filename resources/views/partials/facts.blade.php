<section id="facts" class="facts">
    <div class="container">

        <div class="section-title">
            <h2>{{ $section->section_header }}</h2>
            <p>{{ $section->section_desc }}</p>
        </div>

        <div class="row no-gutters">
            @foreach ($facts as $fact)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                    data-aos-delay="{{ $fact->fact_delay }}">
                    <div class="count-box">
                        <i class="{{ $fact->fact_icon }}"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $fact->fact_number }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>{{ $fact->fact_title }}</strong>{{ $fact->fact_desc }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Facts Section -->
