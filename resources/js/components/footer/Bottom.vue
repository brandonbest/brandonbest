<template>
    <div class="footer-bottom">
        <div class="container d-none d-md-block">
            <div class="row">
                <div class="col">
                    <ul class="nav">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'home'}"><img src="/images/logos/brandon-best-white-icon.png" alt="Brandon Best" /></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'sitemap'}">Site Map</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'legal.privacy'}">Privacy</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'legal.terms'}">Terms of Use</router-link>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Designed by Brandon Best &copy; {{ currentYear }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container d-md-none">
            <div class="row">
                <div class="col">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'home'}"><img src="/images/logos/brandon-best-white-icon.png" alt="Brandon Best" /></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'sitemap'}">Site Map</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'legal.privacy'}">Privacy</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name:'legal.terms'}">Terms of Use</router-link>
                        </li>
                    </ul>

                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link disabled p-0 pb-2" tabindex="-1" aria-disabled="true">Designed by Brandon Best &copy; {{ currentYear }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        name: 'FooterBottom',
        computed: {
            currentYear() {
                var d = new Date();
                return d.getFullYear();
            }
        }
    }
</script>