<template>
    <div>
        <section class="home-bg section h-100vh clip-home" id="home">
            <div class="bg-overlay"></div>
            <div class="bg-overlay-images"></div>
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-white text-center">
                                    <h4 v-show="this.title">{{ title }}</h4>
                                    <h1 class="header_title mb-0 mt-3">I Am <span class="title-typed font-weight-bold" data-elements="Brandon Best.,An Engineering Leader.,An Architech."></span></h1>
                                    <div class="header_btn" v-show="this.btnLink && this.btnText">
                                        <a v-bind:href="this.btnLink" class="btn btn-outline-custom btn-rounded mt-4">{{ btnText }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll_down">
                <a href="#about" class="scroll">
                    <i class="mbri-arrow-down text-white"></i>
                </a>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'Title',
        props: {
            title: {
                type: String
            },
            btnLink: {
                type: String
            },
            btnText: {
                type: String
            }
        },
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        mounted() {
            $(".title-typed").each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 100,
                    backDelay: 3000
                });
            });
        }
    }
</script>