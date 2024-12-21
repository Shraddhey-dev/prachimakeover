<script>
        const slides = document.querySelectorAll('#slider label');
        const totalSlides = slides.length;
        let currentSlideIndex = 0;
    
        function updateSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active', 'next', 'next-next', 'prev', 'prev-prev');
                if (index === currentSlideIndex) {
                    slide.classList.add('active');
                } else if (index === (currentSlideIndex + 1) % totalSlides) {
                    slide.classList.add('next');
                } else if (index === (currentSlideIndex + 2) % totalSlides) {
                    slide.classList.add('next-next');
                } else if (index === (currentSlideIndex - 1 + totalSlides) % totalSlides) {
                    slide.classList.add('prev');
                } else if (index === (currentSlideIndex - 2 + totalSlides) % totalSlides) {
                    slide.classList.add('prev-prev');
                }
            })
        }  
        function startAutoSlider() {
            setInterval(() => {
                currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
                updateSlides();
            }, 3000) // Adjust the interval as needed
        }
    updateSlides();  
    startAutoSlider();
    </script>