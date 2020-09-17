<template>
    <div>
        <section class="home-bg section h-100vh clip-home" id="home">
            <div class="bg-overlay-images"></div>
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-white text-center">
                                    <h4>Hello &amp; Welcome</h4>
                                    <h1 class="header_title mb-0 mt-3">I Am <span class="title-typed font-weight-bold" data-elements="Brandon Best.,An Engineering Leader.,An Architech."></span></h1>
                                    <ul class="social_home list-unstyled text-center pt-4">
                                        <li class="list-inline-item"><a href="https://github.com/brandonbest" target="_blank"><i class="fab fa-github"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/brandondbest/" target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/brandondeanbest" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a></li>
                                        <li class="list-inline-item"><a href="https://stackoverflow.com/users/944074/dream-ideation" target="_blank"><i class="fab fa-stack-overflow" target="_blank"></i></a></li>
                                    </ul>
                                    <div class="header_btn">
                                        <a href="/resumes/2020-06/brandon-best-resume.pdf" class="btn btn-outline-custom btn-rounded mt-4" target="_blank">Download Resume</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll_down">
                <a href="#about" class="scroll">
                    <i class="fa fa-arrow-down" aria-hidden="true"></i>
                </a>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'TitleFancy',
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        mounted() {
            $(".title-typed").each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });

            $(".scroll_down a").on("click", function (e) {
                let t = $(this);
                $("html, body").stop().animate({scrollTop: $(t.attr("href")).offset().top - 0}, 1500, "easeInOutExpo"), e.preventDefault()
            })
        }
    }
</script>