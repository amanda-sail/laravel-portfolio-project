<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>{{ $section[0]->section_header }}</h2>
            <p>{{ $section[0]->section_desc }}</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset($header->profile_pic) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>
                    {{ $about->job_title }}
                </h3>
                <p class="fst-italic">
                    {{ $about->job_intro }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>Birthday:</strong> 
                                <span>1 May 1995</span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>Website:</strong>
                                <span>www.example.com</span></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <strong>Phone:</strong> 
                                <span>+123 456 7890</span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>City:</strong> 
                                <span>New York, USA</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>Age:</strong> 
                                <span>30</span></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>Degree:</strong> 
                                <span>Master</span></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>PhEmailone:</strong>
                                <span>email@example.com</span></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> 
                                <strong>Freelance:</strong> 
                                <span>Available</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <p>
                    {{ $about->job_desc }}
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
