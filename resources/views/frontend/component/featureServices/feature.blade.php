<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

            @isset($feature_services)
                @foreach ($feature_services as $service)
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($loop->index + 2) }}">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                            <a href="{{ route('detailServices') }}" class="service-link">
                                <span>Explore Service</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach
            @endisset

        </div>

    </div>

</section><!-- /Featured Services Section -->