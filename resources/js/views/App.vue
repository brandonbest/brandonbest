<template>
    <div>
        <NavPrimary></NavPrimary>
        <NavSecondary></NavSecondary>
        <router-view></router-view>
        <div class="footer">
            <FooterTop></FooterTop>
            <FooterBottom></FooterBottom>
        </div>
    </div>
</template>

<script>
    import NavPrimary from "../components/header/NavPrimary";
    import NavSecondary from "../components/header/NavSecondary";
    import FooterTop from "../components/footer/Top";
    import FooterBottom from "../components/footer/Bottom";

    export default {
        name: 'app',
        components: {
            'NavPrimary': NavPrimary,
            'NavSecondary': NavSecondary,
            'FooterTop': FooterTop,
            'FooterBottom': FooterBottom
        }
    }
</script>