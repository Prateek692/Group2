var slideIndex = 0;
                    setInterval(showSlidesf,5000);
                    function showSlidesf() {
                        var i;
                        var slides = document.getElementsByClassName("facilities-col");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {slideIndex = 1}    
                        slides[slideIndex-1].style.display = "block";  
                    }