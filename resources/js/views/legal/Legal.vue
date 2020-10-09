<template>
    <div>
        <PageTitle title="Legal" subtitle="Policies and Data"></PageTitle>

        <section class="section section-legal">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ComponentLoader v-bind:show-loader="this.showLegalLoader"></ComponentLoader>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" v-for="legalLink in this.legal">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i v-bind:class="legalLink.icon" class="mb-3"></i>
                                <h4 class="card-title">{{ legalLink.title }}</h4>
                                <p class="card-text" v-html="legalLink.overview"></p>
                                <router-link class="nav-link btn btn-xs btn-outline-black btn-rounded mt-2" :to="{ name: 'legal.sections', params: {slug: legalLink.slug} }">{{ legalLink.title }}</router-link>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" v-show="!this.showLegalLoader">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i class="fas fa-table mb-3"></i>
                                <h4 class="card-title">Data</h4>
                                <p class="card-text">Request and delete your data.</p>
                                <router-link class="nav-link btn btn-xs btn-outline-black btn-rounded mt-2" :to="{ name: 'legal.data' }">Data</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<style lang="scss">
    .section-legal .fas {
        font-size: 40px;
    }
</style>

<script>
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    import PageTitle from "../../components/header/PageTitle";
    import ComponentLoader from "../../components/component-loader";
    export default {
        name: 'legal',
        components: {ComponentLoader, PageTitle, FooterBottom, FooterTop},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'legal': {},
                'showLegalLoader': true
            }
        },
        mounted() {
            axios.get('/api/legal').then((response) => {
                this.legal = response.data.data;
                this.showLegalLoader = false;
            });
        }
    }
</script>