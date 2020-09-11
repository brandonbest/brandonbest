<template>
    <div>
        <page-title title="Ad Delivery at Scale" subtitle="Architeched Platform to Deliver Ads at Scale"></page-title>

        <section id="accomplishment" class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="font-weight-bold">Delivered ads</span> to <span class="font-weight-bold">800,000</span> engaged readers in 108 publications.
                    </div>
                </div>
            </div>
        </section>

        <Accomplishments></Accomplishments>

        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    import Accomplishments from "./Accomplishments";
    export default {
        name: 'accomplishments.ad-delivery',
        components: {Accomplishments, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>