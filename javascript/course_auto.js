var slide_course = 0;
            setInterval(showSlidesc,3000);
            function showSlidesc() {
                var i;
                var slides = document.getElementsByClassName("course-col");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slide_course++;
                if (slide_course > slides.length) {slide_course = 1}    
                slides[slide_course-1].style.display = "block";
            }