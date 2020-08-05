<template>
    <div>
        <NavPrimary></NavPrimary>
        <transition name="fade" mode="out-in" appear>
            <router-view class="bg-light"></router-view>
        </transition>
        <a href="#" class="back_top" style="display: inline;"> <i class="fas fa-chevron-up"></i> </a>
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
            setTimeout(function () {
                if ($(this).scrollTop() <= 100) {
                    $(".back_top").hide();
                }
                $('body').css('overflow', 'scroll');
                $('#app-loader').fadeOut(700);
            }, 500);
            setTimeout(function () {
                $('body').css('overflow', 'scroll');
                $('#app-loader').css('z-index', '-1').css('display', '');
            }, 1500);

            $(window).on("scroll", function () {
                $(this).scrollTop() > 100 ? $(".back_top").fadeIn() : $(".back_top").fadeOut()
            });
            $(".back_top").click(function () {
                return $("html, body").animate({scrollTop: 0}, 1e3), !1
            });
        },
        watch: {
            '$route'(to, from) {
                document.title = to.meta.title || 'Brandon Best'
            }
        }
    }
</script>