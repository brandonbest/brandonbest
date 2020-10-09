<template>
    <div>
        <PageTitle title="Portfolio" subtitle="What skills does Brandon have?"></PageTitle>
        <div class="row" v-if="this.showPortfolioLoader">
            <div class="col-xl-12">
                <ComponentLoader v-bind:show-loader="this.showPortfolioLoader"></ComponentLoader>
            </div>
        </div>

        <div class="row" v-if="this.projects">
            <div class="col-xl-4" v-for="project in this.projects">
                <ProjectOverviewDefault v-bind:project="project"></ProjectOverviewDefault>
            </div>
        </div>

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
    import ComponentLoader from "../components/component-loader";
    import ProjectOverviewDefault from "./projects/overview/Default";

    export default {
        name: 'Portfolio',
        components: {
            ProjectOverviewDefault,
            Project, ComponentLoader, ComingSoon, FooterTop, PageTitle, FooterBottom},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'projects': {},
                'showPortfolioLoader': true
            }
        },
        mounted() {
            axios.get('/api/projects').then((response) => {
                this.projects = response.data.data;
                this.showPortfolioLoader = false;
            });
        }
    }
</script>