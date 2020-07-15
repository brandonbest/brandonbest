<template>
    <div>
        <page-title title="Accomplishments" subtitle="What has Brandon done?"></page-title>

        <section id="services" class="section bg-light">
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
                            <div class="ser_icon"><i class="fas fa-hiking"></i></div>
                            <div class="service-content mt-4"><h5 class="font-weight-bold">Bisnow</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon"><i class="fas fa-tree"></i></div>
                            <div class="service-content mt-4"><h5 class="font-weight-bold">Dream Ideation</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon"><i class="fas fa-pencil-ruler"></i></div>
                            <div class="service-content mt-4"><h5 class="font-weight-bold">Rich Hessler Solar</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon"><i class="fas fa-pencil-ruler"></i></div>
                            <div class="service-content mt-4"><h5 class="font-weight-bold">Mesa Public Schools</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <FooterTop></FooterTop>
    </div>
</template>

<script>
    import PageTitle from "../components/header/PageTitle";
    import FooterTop from "../components/footer/FooterTop";
    export default {
        name: 'Experience',
        components: {FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>