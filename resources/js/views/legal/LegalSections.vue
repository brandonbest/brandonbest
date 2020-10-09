<template>
    <div>
        <PageTitle v-bind:title="this.legal.title" v-bind:subtitle="this.legal.updated_date" router-name="legal" router-title="Legal"></PageTitle>

        <section class="section section-legal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" v-html="this.html" v-show="this.html">
                    </div>
                </div>
            </div>
        </section>

        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";

    export default {
        name: 'legal.sections',
        components: {FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'legal': {},
                'html': null
            }
        },
        methods: {
            fetchLegal () {
                $('.router-view').fadeOut(100);
                axios.get('/api/legal/' + this.$route.params.slug).then((response) => {
                    this.legal = response.data.data;
                    this.legal.updated_date = "Last updated: " + this.legal.updated_date;
                    this.html = this.legal.html;
                    $('.router-view').fadeIn(500);
                });
            }
        },
        mounted() {
            this.fetchLegal();
        },
        watch:{
            html(val){
                if(val){
                    this.$nextTick(()=>{
                        $(".section-legal a").on("click", function (e) {
                            let t = $(this);
                            $("html, body").stop().animate({scrollTop: $(t.attr("href")).offset().top - 100}, 1500, "easeInOutExpo"), e.preventDefault()
                        });
                    })
                }
            }
        }
    }
</script>