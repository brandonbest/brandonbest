<template>
    <section class="bg-dark" id="footer-bottom">
        <div class="container">
            <div class="row pt-1 pb-1">
                <div class="col-lg-12">
                    <div class="float-left float_none">
                        <ul class="nav">
                            <li class="nav-item">
                                <router-link class="navbar-brand logo" :to="{ name: 'Home' }">
                                    <img src="/images/brandon-b.png" alt="Brandon Best" class="img-fluid logo-light">
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" :to="{ name: 'sitemap' }">Site Map</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" :to="{ name: 'legal' }">Legal</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" :to="{ name: 'legal.privacy' }">Privacy</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" :to="{ name: 'legal.terms' }">Terms of Use</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
    #footer-bottom {
        img {
            max-height: 20px;
        }
    }
</style>

<script>
    export default {
        name: 'FooterBottom',
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>