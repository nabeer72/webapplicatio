<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
        <h2 class="section-headline mb-4">Measurable Excellence in Every Detail</h2>
        <p class="section-description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
          curae; Mauris viverra veniam sit amet lacus cursus.</p>
      </div>
    </div>

    <div class="stats-grid row g-0 justify-content-center">
      <div class="col-lg-10">
        <div class="stats-container">
          @isset($stats)
            @foreach ($stats as $stat)
              <div class="stat-item" data-aos="fade-up" data-aos-delay="{{ 100 * ($loop->index + 1) }}">
                <div class="stat-content">
                  <div class="stat-number">
                    {{ $stat->number }}
                  </div>
                  <div class="stat-divider"></div>
                  <div class="stat-label">{{ $stat->label }}</div>
                  <p class="stat-description">{{ $stat->description }}</p>
                </div>
              </div>
            @endforeach
          @endisset
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="500">
        <div class="achievement-badge">
          <div class="badge-icon">
            <i class="bi bi-award"></i>
          </div>
          <div class="badge-content">
            <h4 class="badge-title">Industry Recognition</h4>
            <p class="badge-text">Awarded "Excellence in Innovation" for three consecutive years by leading industry
              organizations.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Stats Section -->