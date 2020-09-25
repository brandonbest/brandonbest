<template>
    <div>
        <page-title title="Accomplishments" subtitle="What has Brandon done?"></page-title>

        <Accomplishments></Accomplishments>

        <AllCompanies></AllCompanies>

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
    import AllCompanies from "../companies/All";
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    import Accomplishments from "./Accomplishments";

    export default {
        name: 'accomplishments.overview',
        components: {AllCompanies, Accomplishments, FooterBottom, FooterTop, PageTitle},
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