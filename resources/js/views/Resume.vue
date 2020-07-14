<template>
    <div>
        <page-title title="Resume" subtitle="View or Download My Resume" download-link-title="Download Resume" download-link="/resumes/2020-06/brandon-best-resume.pdf"></page-title>
        <section class="section " id="resume">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mx-auto">
                            <img src="/resumes/2020-06/brandon-best-resume.jpg" alt="Brandon Best Resume" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <FooterTop></FooterTop>
    </div>
</template>

<style>
    #resume img {
        max-width: 100%;
    }
</style>

<script>
    import PageTitle from "../components/header/PageTitle";
    import FooterTop from "../components/footer/FooterTop";
    export default {
        name: 'Resume',
        components: {FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>