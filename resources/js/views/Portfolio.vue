<template>
    <div>
        <PageTitle title="Portfolio" subtitle="What skills does Brandon have?"></PageTitle>
        <ComingSoon></ComingSoon>
        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<script>
    import ComingSoon from "../components/ComingSoon";
    import PageTitle from "../components/header/PageTitle";
    import FooterTop from "../components/footer/FooterTop";
    import FooterBottom from "../components/footer/FooterBottom";
    export default {
        name: 'Portfolio',
        components: {ComingSoon, FooterTop, PageTitle, FooterBottom},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>