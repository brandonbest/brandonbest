<template>
    <div>
        <page-title title="Maximized Profit" subtitle="Increased Profit by 300% on a Single Product"></page-title>

        <section id="accomplishment" class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p><span class="font-weight-bold">Increased profit</span> on single product by <span class="font-weight-bold">300%</span> through price optimization and improving conversion.</p>
                        <p>Identified a product with high demand and a low price point. Spearheaded a study to identify the optimal price for profit. Engineered automatic upsell of product during checkout.</p>
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
        name: 'accomplishments.maximized-profix',
        components: {Accomplishments, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>