<template>
    <section class="bg-light"  id="footer-top">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-lg-12">
                    <div class="float-left float_none mt-2 mb-2">
                        <p class="copy-rights text-muted mb-0">{{ new Date().getFullYear() }} © <router-link :to="{ name: 'Home' }">Brandon Best</router-link></p>
                    </div>
                    <div class="float-right float_none mt-2 mb-2">
                        <ul class="list-inline fot_social mb-0">
                            <li class="list-inline-item"><a href="https://github.com/brandonbest" target="_blank" class="social-icon text-muted"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/brandondbest/" target="_blank" class="social-icon text-muted"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/brandondeanbest" target="_blank" class="social-icon text-muted"><i class="fab fa-twitter" target="_blank"></i></a></li>
                            <li class="list-inline-item"><a href="https://stackoverflow.com/users/944074/dream-ideation" target="_blank" class="social-icon text-muted"><i class="fab fa-stack-overflow" target="_blank"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<script>
    export default {
        name: 'FooterTop',
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>