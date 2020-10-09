<template>
    <div>
        <PageTitle v-bind:title="this.accomplishment.title" v-bind:subtitle="this.accomplishment.tagline" v-bind:icon="this.accomplishment.icon"></PageTitle>

        <section class="section section-accomplishment bg-light pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" v-html="this.accomplishment.description"></div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 text-left">
                        <router-link v-if="this.accomplishment.links.previous.slug && this.accomplishment.links.previous.title" class="btn btn-xs btn-outline-black btn-custom btn-rounded mt-3" :to="{ name: 'accomplishments.accomplishment', params: {slug: this.accomplishment.links.previous.slug} }">
                            <i class="fas fa-caret-left mr-2"></i> {{this.accomplishment.links.previous.title}}
                        </router-link>
                    </div>
                    <div class="col-lg-6 text-right">
                        <router-link v-if="this.accomplishment.links.next.slug && this.accomplishment.links.next.title" class="btn btn-xs btn-outline-black btn-custom btn-rounded mt-3" :to="{ name: 'accomplishments.accomplishment', params: {slug: this.accomplishment.links.next.slug} }">
                            {{this.accomplishment.links.next.title}} <i class="ml-2 fas fa-caret-right"></i>
                        </router-link>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <hr />
                    </div>
                </div>
            </div>
        </section>

        <Accomplishments></Accomplishments>

        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<style lang="scss">
    .section-accomplishment {
        font-size: 16px;
        line-height: 18px;

        h2, h3 {
            margin-bottom: 10px;
            margin-top: 10px;
        }
        h3 {
            font-size: 22px;
        }
        ul, ol, p {
            padding-bottom: 10px;
        }
        ul, ol {
            padding-left: 30px;
        }
    }
</style>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    import Accomplishments from "./Accomplishments";
    import Companies from "./../companies/All";
    export default {
        name: 'accomplishments.accomplishment',
        components: {Accomplishments, Companies, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'accomplishment': {}
            }
        },
        methods: {
            fetchAccomplishment () {
                $('.router-view').fadeOut(100);
                axios.get('/api/accomplishments/' + this.$route.params.slug).then((response) => {
                    this.accomplishment = response.data.data;
                    $('.router-view').fadeIn(500);
                });
            }
        },
        mounted() {
            this.fetchAccomplishment();
        },
        watch: {
            // call again the method if the route changes
            '$route': 'fetchAccomplishment'
        }
    }
</script>