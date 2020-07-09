<template>
    <div>
        <page-title title="Skills" subtitle="What skills does Brandon have?"></page-title>
    </div>
</template>

<script>
    import PageTitle from "../components/header/PageTitle";
    export default {
        name: 'Skills',
        components: {PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>