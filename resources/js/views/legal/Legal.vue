<template>
    <div>
        <PageTitle title="Legal" subtitle="Policies and Data"></PageTitle>

        <section class="section section-legal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i class="fas fa-gavel mb-3"></i>
                                <h4 class="card-title">Terms of Use</h4>
                                <p class="card-text">How you can and cannot use brandonbest.com.</p>
                                <router-link class="nav-link btn btn-xs btn-outline-black btn-rounded mt-2" :to="{ name: 'legal.terms' }">Terms</router-link>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i class="fas fa-user-lock mb-3"></i>
                                <h4 class="card-title">Privacy</h4>
                                <p class="card-text">Manage and learn how we protect your privacy.</p>
                                <router-link class="nav-link btn btn-xs btn-outline-black btn-rounded mt-2" :to="{ name: 'legal.privacy' }">Privacy</router-link>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i class="fas fa-cookie-bite mb-3"></i>
                                <h4 class="card-title">Cookies</h4>
                                <p class="card-text">What are cookies and how do we use them.</p>
                                <router-link class="nav-link btn btn-xs btn-outline-black btn-rounded mt-2" :to="{ name: 'legal.cookies' }">Cookies</router-link>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
    export default {
        name: 'legal',
        components: {PageTitle, FooterBottom, FooterTop},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>