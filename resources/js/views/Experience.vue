<template>
    <div>
        <page-title title="Experience" subtitle="What has Brandon done?"></page-title>
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
    import AllCompanies from "./companies/All";
    import PageTitle from "../components/header/PageTitle";
    import FooterTop from "../components/footer/FooterTop";
    import FooterBottom from "../components/footer/FooterBottom";
    export default {
        name: 'experience',
        components: {AllCompanies, FooterBottom, FooterTop, PageTitle},
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