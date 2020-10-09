<template>
    <div>
        <page-title title="Resume" subtitle="View or Download My Resume" download-link-title="Download Resume" v-bind:download-link="this.resume.url"></page-title>
        <section class="section " id="resume">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <ComponentLoader v-bind:show-loader="this.showResumeLoader"></ComponentLoader>
                        <div class="text-center mx-auto" v-if="this.resume.id">
                            <img v-bind:src="this.resume.preview_src" v-bind:alt="this.resume.name" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
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
    import ComponentLoader from "../components/component-loader";
    import FooterBottom from "../components/footer/FooterBottom";
    export default {
        name: 'Resume',
        components: {FooterBottom, ComponentLoader, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'resume': null,
                'showResumeLoader': true
            }
        },
        mounted() {
            axios.get('/api/resume/latest').then((response) => {
                this.resume = response.data.data;
                this.showResumeLoader = false;
            });
        }
    }
</script>