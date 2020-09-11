<template>
    <div>
        <page-title title="Reduced engineering waste by 15%" subtitle="Engineered a Custom B2B Ticketing Solution"></page-title>

        <section id="accomplishment" class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Spearheaded implementation agile methodology and organizing sprints. Implemented daily standups to learn about progress and build relationships for a remote workforce.</p>
                    </div>
                </div>
            </div>
        </section>

        <Accomplishments></Accomplishments>

        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";
    import Accomplishments from "./Accomplishments";
    export default {
        name: 'accomplishments.reduce-engineering-waste',
        components: {Accomplishments, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>