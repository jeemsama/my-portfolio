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