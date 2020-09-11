<template>
    <div>
        <page-title title="Reduced Downtime" subtitle="Reduced Website Downtime by 92%."></page-title>

        <section id="accomplishment" class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Identified the key sources of downtime and created a plan to correct each issue.</p>
                        <ul>
                            <li>Move to RDS from a self-hosted database</li>
                            <li>Implement Docker and ECS for automatic scaling, redundancy and reliability</li>
                            <li>Implemented CloudFront to reduce server load</li>
                            <li>Implemented SQS to eliminate queue pressure on Redis</li>
                            <li>Spearheaded effort for unit testing and built a QA process</li>
                        </ul>
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
        name: 'accomplishments.site-reliability',
        components: {Accomplishments, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>