<template>
    <div>
        <page-title title="Experience" subtitle="What skills does Brandon have?"></page-title>
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