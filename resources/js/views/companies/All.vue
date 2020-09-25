<template>
    <div>
        <section id="companies" class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Companies</span></h2>
                            <div class="main-title-border mt-2 mb-2"><i class="far fa-building ml-2 mr-2"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <ComponentLoader v-bind:show-loader="this.showCompaniesLoader"></ComponentLoader>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-3" v-for="company in this.companies">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon">
                                <img v-bind:src="company.logo_src" v-bind:alt="company.company" />
                            </div>
                            <div class="service-content mt-1">
                                <p class="mt-3 text-muted mb-0">Start to end dates</p>
                            </div>
                            <div>
                                <router-link class="btn btn-xs btn-outline-black btn-rounded mt-3" :to="{ name: 'experience.company', params: {slug: company.slug} }">
                                    Accomplishments
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss">
    #companies img {
        max-width: 100%;
    }
</style>

<script>
    import ComponentLoader from "../../components/component-loader";
    export default {
        name: 'companies.all',
        components: {ComponentLoader},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'companies': {},
                'showCompaniesLoader': true
            }
        },
        mounted() {
            axios.get('/api/companies').then((response) => {
                this.companies = response.data.data;
                this.showCompaniesLoader = false;
            });
        }
    }
</script>