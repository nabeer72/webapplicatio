<!-- Skills Section -->
<section id="skills" class="skills section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="intro-content text-center mb-5" data-aos="fade-up" data-aos-delay="150">
          <p class="lead-text">Expertise refined through years of dedicated practice and continuous learning</p>
        </div>
      </div>
    </div>

    <div class="skills-grid">
      @isset($skills)
        @foreach ($skills as $skill)
          <div class="skill-item skills-animation" data-aos="fade-up" data-aos-delay="{{ 150 + ($loop->index * 50) }}">
            <div class="skill-icon">
              <i class="bi bi-check2-circle"></i>
            </div>
            <h3 class="skill-name">{{ $skill->name }}</h3>
            <div class="skill-level">
              <span class="level-text">{{ $skill->percentage }}%</span>
              <div class="progress-track progress">
                <div class="progress-bar" role="progressbar" style="width: {{ $skill->percentage }}%"
                  aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        @endforeach
      @endisset
    </div>

    <div class="certification-area mt-5" data-aos="fade-up" data-aos-delay="500">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="cert-content">
            <h4 class="cert-title">Professional Certifications</h4>
            <p class="cert-description">Continuous learning and professional development ensure that skills remain
              current with industry standards and emerging technologies.</p>
            <div class="cert-list">
              <div class="cert-item">
                <i class="bi bi-award"></i>
                <span>Google UX Design Professional Certificate</span>
              </div>
              <div class="cert-item">
                <i class="bi bi-award"></i>
                <span>AWS Certified Solutions Architect</span>
              </div>
              <div class="cert-item">
                <i class="bi bi-award"></i>
                <span>Certified Agile Project Manager</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="tools-showcase">
            <h5 class="tools-title">Essential Tools</h5>
            <div class="tools-grid">
              <span class="tool-tag">Figma</span>
              <span class="tool-tag">React</span>
              <span class="tool-tag">Node.js</span>
              <span class="tool-tag">Docker</span>
              <span class="tool-tag">Sketch</span>
              <span class="tool-tag">TypeScript</span>
              <span class="tool-tag">MongoDB</span>
              <span class="tool-tag">Kubernetes</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Skills Section -->