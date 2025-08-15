<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'JM Portfolio') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    :root {
      --navy-blue: #1e3a8a;
      --light-gray: #f8fafc;
      --dark-gray: #334155;
      --accent-blue: #3b82f6;
      --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      --shadow-soft: 0 10px 40px rgba(0, 0, 0, 0.1);
      --shadow-hover: 0 20px 60px rgba(0, 0, 0, 0.15);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background: var(--light-gray);
      color: var(--dark-gray);
      line-height: 1.6;
      overflow-x: hidden;
    }
    
    /* Hero Section Enhanced */
    .hero-section {
      min-height: 100vh;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }
    
    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23e2e8f0" fill-opacity="0.3"><circle cx="30" cy="30" r="2"/></g></g></svg>');
      opacity: 0.5;
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-10px) rotate(2deg); }
    }
    
    .portfolio-title {
      font-size: clamp(4rem, 12vw, 10rem);
      font-weight: 900;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      letter-spacing: -0.05em;
      line-height: 0.9;
      margin-bottom: 2rem;
      text-transform: uppercase;
      position: relative;
      animation: slideInLeft 1s ease-out;
    }
    
    @keyframes slideInLeft {
      from { transform: translateX(-100px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    
    .profile-image {
      width: 300px;
      height: 300px;
      border-radius: 30px;
      object-fit: cover;
      box-shadow: var(--shadow-soft);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      animation: slideInRight 1s ease-out;
    }
    
    .profile-image::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 30px;
      background: var(--gradient-primary);
      z-index: -1;
      transform: scale(1.05);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .profile-image:hover {
      transform: translateY(-10px) rotate(2deg);
      box-shadow: var(--shadow-hover);
    }
    
    .profile-image:hover::before {
      opacity: 0.1;
    }
    
    @keyframes slideInRight {
      from { transform: translateX(100px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    
    .intro-text {
      font-size: 1.25rem;
      font-weight: 500;
      color: var(--dark-gray);
      margin-bottom: 1rem;
      animation: fadeInUp 1s ease-out 0.3s both;
    }
    
    .subtitle {
      font-size: 1rem;
      color: #64748b;
      font-weight: 400;
      margin-bottom: 2rem;
      animation: fadeInUp 1s ease-out 0.4s both;
    }
    
    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    
    .social-buttons {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      animation: fadeInUp 1s ease-out 0.5s both;
    }
    
    .btn-custom {
      padding: 14px 28px;
      border-radius: 50px;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: none;
      font-size: 0.95rem;
      position: relative;
      overflow: hidden;
    }
    
    .btn-custom::before {
      content: '';
      position: absolute;
      inset: 0;
      background: var(--gradient-primary);
      z-index: -1;
      transition: transform 0.3s ease;
      transform: scaleX(0);
      transform-origin: left;
    }
    
    .btn-primary-custom {
      background: var(--gradient-primary);
      color: white;
      box-shadow: var(--shadow-soft);
    }
    
    .btn-primary-custom:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-hover);
      color: white;
    }
    
    .btn-outline-custom {
      background: transparent;
      color: var(--navy-blue);
      border: 2px solid var(--navy-blue);
    }
    
    .btn-outline-custom:hover {
      background: var(--navy-blue);
      color: white;
      transform: translateY(-3px);
      box-shadow: var(--shadow-soft);
    }
    
    .btn-outline-custom:hover::before {
      transform: scaleX(1);
    }
    
    /* Enhanced Sections */
    .content-section {
      padding: 6rem 0;
    }
    
    .section-title {
      font-size: 3rem;
      font-weight: 700;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 4rem;
      position: relative;
      text-align: center;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: var(--gradient-primary);
      border-radius: 2px;
    }
    
    .about-text {
      font-size: 1.125rem;
      line-height: 1.8;
      color: var(--dark-gray);
      margin-bottom: 1.5rem;
    }
    
    /* Enhanced Projects Carousel */
    .projects-carousel-container {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px 0;
    }

    .projects-carousel {
      overflow: hidden;
      border-radius: 30px;
      /* background: var(--gradient-primary); */
      position: relative;
      box-shadow: var(--shadow-soft);
    }

    .carousel-track {
      display: flex;
      transition: transform 0.8s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .carousel-slide {
      min-width: 100%;
      flex-shrink: 0;
      opacity: 0;
      transition: opacity 0.8s ease;
    }

    .carousel-slide.active {
      opacity: 1;
    }

    .project-card-carousel {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      margin: 30px;
      border-radius: 25px;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      min-height: 600px;
      display: flex;
      flex-direction: column;
    }

    .project-card-carousel:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
    }

    .project-image-container {
      position: relative;
      height: 300px;
      overflow: hidden;
    }

    .project-image-carousel {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .project-card-carousel:hover .project-image-carousel {
      transform: scale(1.1);
    }

    .project-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: var(--gradient-primary);
      opacity: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.4s ease;
    }

    .project-card-carousel:hover .project-overlay {
      opacity: 0.9;
    }

    .project-number {
      font-size: 4rem;
      font-weight: 900;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      transform: scale(0.8);
      transition: transform 0.4s ease;
    }

    .project-card-carousel:hover .project-number {
      transform: scale(1);
    }

    .project-content {
      padding: 40px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .project-title-carousel {
      font-size: 1.75rem;
      font-weight: 700;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 15px;
      line-height: 1.3;
    }

    .project-desc-carousel {
      color: #4a5568;
      line-height: 1.6;
      margin-bottom: 25px;
      flex-grow: 1;
      font-size: 1rem;
    }

    .tech-stack-carousel {
      margin-bottom: 30px;
    }

    .tech-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 15px;
    }

    .tech-tag {
      background: var(--gradient-primary);
      color: white;
      padding: 8px 16px;
      border-radius: 25px;
      font-size: 0.85rem;
      font-weight: 500;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
      transition: transform 0.2s ease;
    }

    .tech-tag:hover {
      transform: translateY(-2px);
    }

    /* Navigation Controls */
    .carousel-controls {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 -20px;
      pointer-events: none;
      z-index: 10;
    }

    .carousel-btn-nav {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: var(--shadow-soft);
      pointer-events: all;
      color: var(--navy-blue);
    }

    .carousel-btn-nav:hover {
      background: white;
      transform: scale(1.1);
      box-shadow: var(--shadow-hover);
    }

    .carousel-btn-nav:active {
      transform: scale(0.95);
    }

    /* Dots Indicator */
    .carousel-dots {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 40px;
    }

    .carousel-dot {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      border: none;
      background: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: all 0.4s ease;
      position: relative;
    }

    .carousel-dot::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 50%;
      background: var(--gradient-primary);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .carousel-dot.active::before,
    .carousel-dot:hover::before {
      opacity: 1;
    }

    .carousel-dot.active {
      transform: scale(1.3);
    }
    
    /* Contact Section Enhanced */
    .contact-section {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-radius: 50px 50px 0 0;
      padding: 5rem 0;
      margin-top: 4rem;
      position: relative;
      overflow: hidden;
    }
    
    .contact-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><circle cx="50" cy="50" r="3"/></g></g></svg>');
      opacity: 0.3;
    }
    
    .contact-section .section-title {
      color: white;
      background: none;
      -webkit-text-fill-color: white;
    }
    
    .contact-section .section-title::after {
      background: rgba(255, 255, 255, 0.5);
    }
    
    .contact-item {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      padding: 1.5rem;
      font-size: 1.1rem;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      margin-bottom: 1rem;
      backdrop-filter: blur(20px);
      transition: all 0.3s ease;
    }
    
    .contact-item:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateX(10px);
    }
    
    .contact-icon {
      width: 28px;
      height: 28px;
      color: rgba(255, 255, 255, 0.9);
    }
    
    .scroll-indicator {
      position: absolute;
      bottom: 2rem;
      left: 50%;
      transform: translateX(-50%);
      color: var(--navy-blue);
      animation: bounce 2s infinite;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateX(-50%) translateY(0);
      }
      40% {
        transform: translateX(-50%) translateY(-10px);
      }
      60% {
        transform: translateX(-50%) translateY(-5px);
      }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .hero-content {
        text-align: center;
      }
      
      .portfolio-title {
        font-size: 3rem;
        margin-bottom: 1rem;
      }
      
      .profile-image {
        width: 150px;
        height: 150px;
        margin-bottom: 2rem;
      }
      
      .social-buttons {
        justify-content: center;
      }
      
      .content-section {
        padding: 4rem 0;
      }
      
      .section-title {
        font-size: 2.5rem;
      }
      
      .project-card-carousel {
        margin: 15px;
        min-height: 500px;
      }
      
      .project-content {
        padding: 25px;
      }
      
      .carousel-btn-nav {
        width: 50px;
        height: 50px;
      }
      
      .project-number {
        font-size: 3rem;
      }
      
      .contact-item {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h1 class="portfolio-title">PORTFOLIO</h1>
          <div class="hero-content">
            <h2 class="intro-text">Hi, I'm Jaymark Ancheta.</h2>
            <p class="subtitle">Aspiring Backend Developer</p>
            <div class="social-buttons">
              <a href="mailto:anchetajaymark69@gmail.com" class="btn-custom btn-primary-custom">
                <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                Email
              </a>
              <a href="https://github.com/jeemsama" target="_blank" class="btn-custom btn-outline-custom">
                <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                </svg>
                GitHub
              </a>
              <a href="https://www.linkedin.com/in/jaymark-ancheta-8511b430b" target="_blank" class="btn-custom btn-outline-custom">
                <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                </svg>
                LinkedIn
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <img src="{{ asset('images/profile.jpg') }}" alt="JM Profile" class="profile-image">
        </div>
      </div>
    </div>
    <div class="scroll-indicator">
      <svg width="24" height="24" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </div>
  </section>

  <!-- About Section -->
  <section class="content-section">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <p class="about-text">
            I build practical applications using Laravel and Flutter. I enjoy creating clean APIs, designing solid database structures, and delivering functional features. My passion lies in backend development where I can architect robust systems that power seamless user experiences.
          </p>
          <p class="about-text">
            Currently expanding my skills in modern web technologies and exploring the latest trends in software architecture. I believe in writing clean, maintainable code that scales efficiently.
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- Projects Carousel Section -->
<section class="content-section" style="background: white;">
  <div class="container">
    <h2 class="section-title">Featured Projects</h2>
    
    <!-- Carousel Container -->
    <div class="projects-carousel-container">
      <div class="projects-carousel" id="projectsCarousel">
        <div class="carousel-track" id="carouselTrack">
          @foreach($projects as $index => $p)
            <div class="carousel-slide {{ $index === 0 ? 'active' : '' }}">
              <div class="project-card-carousel">
                @if($p['image'])
                  <div class="project-image-container">
                    <img src="{{ asset($p['image']) }}" class="project-image-carousel" alt="{{ $p['title'] }}">
                    <div class="project-overlay">
                      <div class="project-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    </div>
                  </div>
                @else
                  <div class="project-image-container">
                    <div class="project-image-placeholder">{{ $p['title'] }}</div>
                    <div class="project-overlay">
                      <div class="project-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    </div>
                  </div>
                @endif
                
                <div class="project-content">
                  <h3 class="project-title-carousel">{{ $p['title'] }}</h3>
                  <p class="project-desc-carousel">{{ $p['desc'] }}</p>
                  <div class="tech-stack-carousel">
                    <strong>Technologies:</strong> 
                    <div class="tech-tags">
                      @foreach(explode(', ', $p['tech']) as $tech)
                        <span class="tech-tag">{{ trim($tech) }}</span>
                      @endforeach
                    </div>
                  </div>
                  @if($p['link'])
                    <a href="{{ $p['link'] }}" class="btn-custom btn-primary-custom" target="_blank">
                      <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                      </svg>
                      View Project
                    </a>
                  @else
                    <div class="btn-custom btn-primary-custom" style="opacity: 0.6; cursor: not-allowed;">
                      <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                      </svg>
                      Current Site
                    </div>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      
      <!-- Navigation Controls -->
      <div class="carousel-controls">
        <button class="carousel-btn-nav carousel-btn-prev" id="prevBtn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15,18 9,12 15,6"></polyline>
          </svg>
        </button>
        <button class="carousel-btn-nav carousel-btn-next" id="nextBtn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9,18 15,12 9,6"></polyline>
          </svg>
        </button>
      </div>
      
      <!-- Dots Indicator -->
      <div class="carousel-dots" id="carouselDots">
        @foreach($projects as $index => $p)
          <button class="carousel-dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></button>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- Add this JavaScript before closing </body> tag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  class ProjectCarousel {
    constructor() {
      this.currentSlide = 0;
      this.totalSlides = document.querySelectorAll('.carousel-slide').length;
      this.carouselTrack = document.getElementById('carouselTrack');
      this.slides = document.querySelectorAll('.carousel-slide');
      this.dots = document.querySelectorAll('.carousel-dot');
      this.prevBtn = document.getElementById('prevBtn');
      this.nextBtn = document.getElementById('nextBtn');
      
      this.init();
    }
    
    init() {
      // Add event listeners
      this.prevBtn.addEventListener('click', () => this.prevSlide());
      this.nextBtn.addEventListener('click', () => this.nextSlide());
      
      // Add dot event listeners
      this.dots.forEach((dot, index) => {
        dot.addEventListener('click', () => this.goToSlide(index));
      });
      
      // Auto-slide functionality
      this.startAutoSlide();
      
      // Pause auto-slide on hover
      const carousel = document.getElementById('projectsCarousel');
      carousel.addEventListener('mouseenter', () => this.pauseAutoSlide());
      carousel.addEventListener('mouseleave', () => this.startAutoSlide());
    }
    
    goToSlide(slideIndex) {
      // Remove active class from current slide and dot
      this.slides[this.currentSlide].classList.remove('active');
      this.dots[this.currentSlide].classList.remove('active');
      
      // Update current slide
      this.currentSlide = slideIndex;
      
      // Add active class to new slide and dot
      this.slides[this.currentSlide].classList.add('active');
      this.dots[this.currentSlide].classList.add('active');
      
      // Move carousel track
      const translateX = -this.currentSlide * 100;
      this.carouselTrack.style.transform = `translateX(${translateX}%)`;
    }
    
    nextSlide() {
      const nextIndex = (this.currentSlide + 1) % this.totalSlides;
      this.goToSlide(nextIndex);
    }
    
    prevSlide() {
      const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
      this.goToSlide(prevIndex);
    }
    
    startAutoSlide() {
      this.autoSlideInterval = setInterval(() => {
        this.nextSlide();
      }, 5000);
    }
    
    pauseAutoSlide() {
      if (this.autoSlideInterval) {
        clearInterval(this.autoSlideInterval);
      }
    }
  }
  
  // Initialize carousel
  new ProjectCarousel();
  
  // Add keyboard navigation
  document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') {
      document.getElementById('prevBtn').click();
    } else if (e.key === 'ArrowRight') {
      document.getElementById('nextBtn').click();
    }
  });
});
</script>

<!-- Add this CSS to your existing styles -->
<style>
/* Additional CSS for image placeholder */
.project-image-placeholder {
  color: white;
  font-size: 2rem;
  font-weight: 700;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  background: var(--gradient-secondary);
}
</style>
  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <h2 class="section-title">Get In Touch</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-item">
            <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>
            <div>
              <strong>Email:</strong> <a href="mailto:anchetajaymark69@gmail.com" style="color: rgba(255,255,255,0.9); text-decoration: none;">anchetajaymark69@gmail.com</a>
            </div>
          </div>
          <div class="contact-item">
            <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
            </svg>
            <div>
              <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/jaymark-ancheta-8511b430b" target="_blank" style="color: rgba(255,255,255,0.9); text-decoration: none;">Jaymark Ancheta</a>
            </div>
          </div>
          <div class="contact-item">
            <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027s-.546 1 .203 2c0 .001-.203 .398 .098 .651c0 .001 .39 .595 .39 1.272c0 1.093-.39 1.988-1.029 2.688.103.253.446 1.272-.098 2.65 0 0-.84 .27-2.75-1.026A9.564 9.564 0 0110 4.844c-.85 .004-1.705 .115-2.504 .337-1.909-1.296-2.747-1.027-2.747-1.027s.546 1-.203 2c0 .001 .203 .398-.098 .651c0 .001-.39 .595-.39 1.272c0 3.848 2.339 4.695 4.566 4.942-.359 .31-.678 .921-.678 1.856c0 1.338 .012 2.419 .012 2.747c0 .268-.18 .58-.688 .482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
            </svg>  
            <div>
              <strong>GitHub:</strong> <a href="https://github.com/jeemsama" target="_blank" style="color: rgba(255,255,255,0.9); text-decoration: none;">jeemsama</a>
            </div>
          </div>
