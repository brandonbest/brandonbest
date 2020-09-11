<template>
    <div>
        <section class="header_section section">
            <div class="bg-overlay"></div>
            <div class="bg-overlay-images"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h2 class="font-weight-bold" v-html="this.title"></h2>
                            <div class="home_divider mt-3 mb-3 mx-auto"></div>
                            <div class="page_link" v-show="this.subtitle">
                                <span class="text-white ml-1" v-html="this.subtitle"></span>
                            </div>
                            <div class="header_btn" v-show="downloadLink && downloadLinkTitle">
                                <a v-bind:href="downloadLink" class="btn btn-outline-custom btn-rounded mt-4" target="_blank">{{ this.downloadLinkTitle }}</a>
                            </div>
                            <div class="header_btn" v-show="link && linkTitle">
                                <a v-bind:href="link" class="btn btn-outline-custom btn-rounded mt-4">{{ this.linkTitle }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style>
    .header_section {
        background-image: url('/images/img-1.jpg');
    }
</style>

<script>
    export default {
        name: 'PageTitle',
        props: {
            title: {
                type: String
            },
            subtitle: {
                type: String
            },
            downloadLinkTitle: {
                type: String
            },
            downloadLink: {
                type: String
            },
            linkTitle: {
                type: String
            },
            link: {
                type: String
            }
        },
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>