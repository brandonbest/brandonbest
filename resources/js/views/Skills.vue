<template>
    <div>
        <PageTitle title="Skills" subtitle="What skills does Brandon have?"></PageTitle>
        <section class="section" id="skills">
            <div class="container" v-show="this.showSkillsLoader">
                <div class="row">
                    <div class="col-xl-12">
                        <ComponentLoader v-bind:show-loader="this.showSkillsLoader"></ComponentLoader>
                    </div>
                </div>
            </div>
            <div class="container mb-5" v-for="section in this.sections">

                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2 class="mb-3"><span
                                    class="font-weight-bold" v-html="section.section"></span></h2>
                            <div class="main-title-border"><i v-bind:class="section.icon" class="ml-2 mr-2"></i></div>
                            <p class="text-muted mx-auto mt-3" v-html="section.description"></p></div>
                    </div>
                </div>

                <div v-for="category in section.categories" class="mb-5">
                    <div class="row mb-4" v-show="category.category">
                        <div class="col-12 text-center">
                            <h4 v-html="category.category"></h4>
                        </div>
                    </div>
                    <div class="row" v-if="category.skills">
                        <div class="col-6" v-for="skill in category.skills">
                            <div class="progress-bars skill-custom">
                                <h6 v-html="skill.skill"></h6>
                                <div class="progress" v-bind:class="{'mb-2': skill.line_items.length > 0}">
                                    <div class="progress-bar" role="progressbar" v-bind:style="'width:' + skill.skill_level + '%'" v-bind:aria-valuenow="skill.skill_level"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="list-group list-group-flush" v-bind:class="{'mb-4': skill.line_items.length > 0}">
                                    <li class="list-group-item p-1 pl-3" v-for="line_item in skill.line_items" v-html="line_item.line_item"></li>
                                </ul>
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

<script>
    import ComponentLoader from "../components/component-loader";
    import PageTitle from "../components/header/PageTitle";
    import FooterTop from "../components/footer/FooterTop";
    import FooterBottom from "../components/footer/FooterBottom";

    export default {
        name: 'skills',
        components: {ComponentLoader, FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        data() {
            return {
                'sections': {},
                'showSkillsLoader': true
            }
        },
        mounted() {
            axios.get('/api/skills/sections').then((response) => {
                this.sections = response.data.data;
                this.showSkillsLoader = false;
            });
        }
    }
</script>