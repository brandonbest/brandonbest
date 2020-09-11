<template>
    <div>
        <page-title title="Reduced Transaction Costs" subtitle="Engineered a Custom B2B Ticketing Solution"></page-title>

        <section id="accomplishment" class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Engineered a custom ecommerce ticketing solution to process credit card transactions for 350 events per year. Used the savings to build a custom news platform and generate ad revenue.</p>
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
        name: 'accomplishments.marketing-at-scale',
        components: {Accomplishments, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>