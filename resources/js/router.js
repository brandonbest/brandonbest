import Vue from 'vue'
import VueRouter from 'vue-router'
import Routes from './routes'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: Routes,
});

router.beforeEach(function (to, from, next) {
    $(".sticky").removeClass("stickyadd");
    setTimeout(() => {
        window.scrollTo(0, 0);
    }, 225);
    next();
});

export default router;