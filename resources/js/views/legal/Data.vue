<template>
    <div>
        <PageTitle title="Data Request" subtitle="Last updated July 26, 2020" link="/legal" link-title="Legal"></PageTitle>

        <section class="section section-legal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
        name: 'DataRequest',
        components: {FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        mounted() {
            $(".table-contents a").on("click", function (e) {
                let t = $(this);
                $("html, body").stop().animate({scrollTop: $(t.attr("href")).offset().top - 100}, 1500, "easeInOutExpo"), e.preventDefault()
            })
        }
    }
</script>