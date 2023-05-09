const gliders = document.querySelectorAll("[id^=glider]");

        gliders.forEach((glide) => {
            const glider = document.querySelector(`#${glide.id} .glider`);
            const gliderPrev = document.querySelector(`#${glide.id} .glider-prev`);
            const gliderNext = document.querySelector(`#${glide.id} .glider-next`);
            const gliderDots = document.querySelector(`#${glide.id} .dots`);

            // new Glider(glider, {
            //     slidesToShow: 3,
            //     draggable: true,
            //     dots: gliderDots,
            //     arrows: {
            //         prev: gliderPrev,
            //         next: gliderNext
            //     }



                new Glider(glider, {
            slidesToScroll: 1,
            slidesToShow: 4,
            draggable: true,
            dots: gliderDots,
            arrows: {
                prev: gliderPrev,
                next: gliderNext
            },

            responsive: [{
                // screens greater than >= 775px
                breakpoint: 1200,
                settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 4,
                    slidesToScroll: 2,
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 304,
                settings: {
                    slidesToShow: 1.2,
                    slidesToScroll: 1,
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 0,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
            });
        });