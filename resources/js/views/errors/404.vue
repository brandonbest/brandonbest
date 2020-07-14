<template>
    <div>
        <div class="error-background">
            <div class="logo-repeat"></div>
            <section class="header_section section bg-none pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center text-white">
                            <h4>404 Error</h4>
                            <h1 class="header_title mb-0 mt-3"><span class="title-typed font-weight-bold" data-elements="Page Not Found"></span></h1>
                            <ul class="social_home list-unstyled text-center pt-4">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-github"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-stack-overflow"></i></a></li>
                            </ul>
                            <p>You have reached a page that does not exist! Use the navigation bar to get back on track.</p>
                            <div class="header_btn">
                                <router-link class="btn btn-outline-custom mt-4" :to="{ name: 'Home' }">Home</router-link>
                                <router-link class="btn btn-outline-custom mt-4" :to="{ name: 'Home' }">Contact</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'PageNotFound',
        components: {
        },
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
                    backDelay: 30000
                });
            });
        }
    }
</script>