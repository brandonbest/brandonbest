<template>
    <div>
        <page-title title="Blog" subtitle="What's on Brandon's Mind?"></page-title>
        <ComingSoon></ComingSoon>
        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<script>
    import ComingSoon from "../../components/ComingSoon";
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    export default {
        name: 'Blog',
        components: {ComingSoon, FooterTop, PageTitle, FooterBottom},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>