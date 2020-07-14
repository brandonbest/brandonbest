<template>
    <div>
        <page-title title="Blog" subtitle="What's on Brandon's Mind?"></page-title>
        <FooterTop></FooterTop>
    </div>
</template>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    export default {
        name: 'Blog',
        components: {FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>