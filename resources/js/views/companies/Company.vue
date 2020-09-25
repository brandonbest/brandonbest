<template>
    <div>
        <page-title v-bind:title="this.company.company" v-bind:subtitle="this.company.tagline"></page-title>

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
    import AllCompanies from "./All";
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    export default {
        name: 'companies.company',
        components: {AllCompanies, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'company': {}
            }
        },
        methods: {
            fetchCompany () {
                $('.router-view').fadeOut(100);
                axios.get('/api/companies/' + this.$route.params.slug).then((response) => {
                    this.company = response.data.data;
                    $('.router-view').fadeIn(500);
                });
            }
        },
        mounted() {
            this.fetchCompany();
        },
        watch: {
            // call again the method if the route changes
            '$route': 'fetchCompany'
        }
    }
</script>