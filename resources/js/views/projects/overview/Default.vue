<template>
    <div>

    </div>
</template>

<script>
    export default {
        name: 'ProjectOverviewDefault',
        props: {
            project: {
                type: Object
            },
        },
        components: {},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>