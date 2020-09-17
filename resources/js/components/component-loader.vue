<template>
    <div class="component-loader" v-show="this.showLoader">
        <div class="logo"></div>
        <div class="logo-repeat"></div>
    </div>
</template>

<script>
    export default {
        name: 'ComponentLoader',
        props: {
            showLoader: {
                type: Boolean
            },
        }
    }
</script>