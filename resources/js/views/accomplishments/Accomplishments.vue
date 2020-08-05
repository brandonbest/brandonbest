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
                        <div id="accordion">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card mb-2" v-show="currentRouteName !== 'accomplishments.built-team'">
                                        <div class="card-header bg-transparent p-0">
                                            <h5 class="mb-0">
                                                <router-link class="btn btn-link" :to="{ name: 'accomplishments.built-team' }">
                                                    <i class="fas fa-users"></i>
                                                    <h5 class="font-weight-bold">Expanded Team</h5>
                                                    <p class="mt-3 text-muted mb-0">Expanded engineering team from 1 to 6 engineers</p>
                                                </router-link>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="card mb-2" v-show="currentRouteName !== 'accomplishments.mentor'">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseTwo">
                                            <h5 class="mb-0">
                                                <router-link class="btn btn-link" :to="{ name: 'accomplishments.mentor' }">
                                                    <i class="fas fa-chalkboard-teacher"></i>
                                                    <h5 class="font-weight-bold">Mentor</h5>
                                                    <p class="mt-3 text-muted mb-0">Mentored entry-level developers into junior developers.</p>
                                                </router-link>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-ticket-alt"></i> <span class="font-weight-bold">Reduced</span> ecommerce <span class="font-weight-bold">transaction costs</span> from 15% to 3.5%.
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Engineered a custom ecommerce ticketing solution to process credit card transactions for 350 events per year. Used the savings to build a custom news platform and generate ad revenue.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseTen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="far fa-clock"></i> <span class="font-weight-bold">Reduced</span> engineering <span class="font-weight-bold">waste</span> by 15%.
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseTen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Spearheaded implementation agile methodology and organizing sprints. Implemented daily standups to learn about progress and build relationships for a remote workforce.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-money-bill-wave"></i> <span class="font-weight-bold">Increased profit</span> on single product by <span class="font-weight-bold">300%</span> through price optimization and improving conversion.
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Identified a product with high demand and a low price point. Spearheaded a study to identify the optimal price for profit. Engineered automatic upsell of product during checkout.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseFive">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-server"></i> <span class="font-weight-bold">Reduced</span> website <span class="font-weight-bold">downtime</span> by 92%.
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                                            <div class="card-body">
                                                Identified the key sources of downtime and created a plan to correct each issue.
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

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseSix">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-route"></i> <span class="font-weight-bold">Track 130 million conversions</span>, clicks and impressions per month.
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                                            <div class="card-body">
                                                Architeched a data pipeline using Snowplow and Redshift to track user activity and metrics. Using Periscope, we can determine the optimal number of events in each market and maximum revenue with current subscription sizes.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseSeven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-bullhorn"></i> Constructed <span class="font-weight-bold">marketing platform</span> to convert 1.5 million subscribers into <span class="font-weight-bold">68,000 attendees</span> for 330 events
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseSeven" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                In 2019, the marketing platform my team built targeted 1.5 million subscribers and sold 68,000 tickets to 330+ events.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseEight">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-envelope-open-text"></i> <span class="font-weight-bold">Delivered ads</span> to <span class="font-weight-bold">800,000</span> engaged readers in 108 publications
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseEight" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Implemented a data pipeline to automatically deliver ads from sales > ad operations > editorial. Using Salesforce, FatTail, DFP and Marketo, ads are automatically placed into newsletters and tracked using Snowplow. We deliver reports to each sponsor on their ads including impressions, clicks and leads.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseEleven">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseTwoEntryLevel">
                                                    <i class="fas fa-ad"></i> <span class="font-weight-bold">Increased maximum</span> ad <span class="font-weight-bold">revenue</span> in markets with no available inventory.
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseEleven" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Designed a data pipeline to segment our audience and deliver ads from our sponsors to the the audience they want to reach.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseTwelve">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                    <i class="fas fa-calculator"></i> <span class="font-weight-bold">Developed</span> white label solar calculator to generate leads on customer's websites
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseTwelve" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Designed a data pipeline to segment our audience and deliver ads from our sponsors to the the audience they want to reach.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-2">
                                        <div class="card-header bg-transparent p-0" id="headingCollapseThirteen">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                    <i class="fas fa-funnel-dollar"></i> <span class="font-weight-bold">Architeched</span> white label solar marketing platform to deliver leads to solar innstallers
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseThirteen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Designed a data pipeline to segment our audience and deliver ads from our sponsors to the the audience they want to reach.
                                            </div>
                                        </div>
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

<script>
    export default {
        name: 'accomplishments.overview',
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        mounted() {
            $('.collapse').collapse();
        }
    }
</script>