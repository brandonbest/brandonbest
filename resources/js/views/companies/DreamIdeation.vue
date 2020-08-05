<template>
    <div>
        <page-title title="Dream Ideation" subtitle="What has Brandon done?"></page-title>

        <section id="companies" class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Companies</span></h2>
                            <div class="main-title-border mt-2 mb-2"><i class="far fa-building ml-2 mr-2"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <router-link :to="{ name: 'experience.bisnow' }">
                                    <img src="/images/companies/bisnow.jpg" alt="Bisnow" />
                                </router-link>
                            </div>
                            <div class="service-content mt-1">
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                            <div>
                                <a href="#bisnow" class="btn btn-xs btn-outline-black btn-rounded mt-3">Accomplishments</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <img src="/images/companies/dream-ideation.jpg" alt="Dream Ideation" />
                            </div>
                            <div class="service-content mt-1">
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p>
                            </div>
                            <div>
                                <a href="#dream-ideation" class="btn btn-xs btn-outline-black btn-rounded mt-3">Accomplishments</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <img src="/images/companies/rich-hessler.jpg" alt="Rich Hessler" />
                            </div>
                            <div class="service-content mt-1">
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                            <div>
                                <a href="#rich-hessler" class="btn btn-xs btn-outline-black btn-rounded mt-3">Accomplishments</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <img src="/images/companies/mesa-public-schools.jpg" alt="Mesa Public Schools" />
                            </div>
                            <div class="service-content mt-1">
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                            <div>
                                <a href="#mesa-schools" class="btn btn-xs btn-outline-black btn-rounded mt-3">Accomplishments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<style lang="scss">
    #companies img {
        max-width: 100%;
    }
</style>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    export default {
        name: 'experience.dream-ideation',
        components: {FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        mounted() {
            $('.collapse').collapse();
        }
    }
</script>