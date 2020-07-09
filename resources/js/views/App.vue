<template>
    <div>
        <NavPrimary></NavPrimary>
        <router-view></router-view>
    </div>
</template>

<script>
    import NavPrimary from "../components/header/NavPrimary";

    export default {
        name: 'App',
        components: {
            'NavPrimary': NavPrimary
        },
        mounted() {
            setTimeout(function(){ $('body').css('overflow', 'scroll'); $('#app-loader').fadeOut(1000); }, 500);
        }
    }
</script>