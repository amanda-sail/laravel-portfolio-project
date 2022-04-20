<section id="skills" class="skills section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{ $section[2]->section_header }}</h2>
            <p>{{ $section[2]->section_desc }}</p>
        </div>

        <div class="row skills-content">
            <div class="col-lg-6" data-aos="fade-up">
                @for ($i = 0; $i < count($skills); $i++)
                    @if ($i % 2 === 0)
                        <div class="progress">
                            <span class="skill">{{ $skills[$i]->skill }} <i class="val">{{ $skills[$i]->skill_rating }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[$i]->skill_rating }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                @for ($i = 0; $i < count($skills); $i++)
                    @if ($i % 2 === 1)
                        <div class="progress">
                            <span class="skill">{{ $skills[$i]->skill }} <i class="val">{{ $skills[$i]->skill_rating }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[$i]->skill_rating }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
</section><!-- End Skills Section -->
