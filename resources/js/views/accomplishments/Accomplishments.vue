<template>
    <div>
        <section class="section section-accomplishments bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">Career</span> Accomplishments</h2>
                            <div class="main-title-border mt-2 mb-2"><i class="fas fa-trophy ml-2 mr-2"></i></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <ComponentLoader v-bind:show-loader="this.showAccomplishmentLoader"></ComponentLoader>
                            </div>
                            <div class="col-xl-4" v-for="accomplishment in this.accomplishments" v-show="$route.params.slug !== accomplishment.slug">
                                <div class="card mb-2">
                                    <div class="card-header bg-transparent p-0">
                                        <h5 class="mb-0">
                                            <router-link class="btn btn-link" :to="{ name: 'accomplishments.accomplishment', params: {slug: accomplishment.slug} }">
                                                <i v-bind:class="accomplishment.icon"></i>
                                                <h5 class="font-weight-bold" v-html="accomplishment.title"></h5>
                                                <p class="mt-3 text-muted mb-0" v-show="accomplishment.tagline" v-html="accomplishment.tagline"></p>
                                            </router-link>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss">
    .section-accomplishments .component-loader {
        min-height: 600px;
    }
    .section-accomplishments .card .card-header {
        border: 1px dotted #e7e7e7;
        position: relative;
        transition: all 0.5s;
    }
    .section-accomplishments .card .card-header:hover {
        border-color: #000;
        transition: all 0.5s;
    }
    .section-accomplishments .card .card-header .btn {
        width: 100%;
        color: #000;
        text-align: center;
    }
    .section-accomplishments .card .card-header .btn i {
        color: #000;
        display: block;
        font-size: 38px;
        margin-top: 10px;
        margin-bottom: 15px;
        position: relative;
        transition: all 0.5s;
    }
    .section-accomplishments .card:hover .card-header .btn i {
        color: #000;
        transform: rotate(360deg);
        transition: all 0.5s;
    }
</style>
f
<script>
    import ComponentLoader from "../../components/component-loader";
    export default {
        name: 'accomplishments.overview',
        components: {ComponentLoader},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'accomplishments': {},
                'showAccomplishmentLoader': true
            }
        },
        mounted() {
            $('.collapse').collapse();

            axios.get('/api/accomplishments').then((response) => {
                this.accomplishments = response.data.data;
                this.showAccomplishmentLoader = false;
            });
        }
    }
</script>