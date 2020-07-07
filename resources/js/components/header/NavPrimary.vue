<template>
    <nav class="container navbar navbar-primary navbar-light navbar-expand-lg">
        <router-link class="navbar-brand d-none d-sm-block" :to="{ name: 'home' }">
            <img src="/images/logos/brandon-best.png" height="40" alt="Brandon Best" />
        </router-link>
        <a class="navbar-brand d-sm-none" href="/">
            <img src="/images/logos/brandon-best-icon.png" height="40" alt="Brandon Best" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarMain">
            <ul class="navbar-nav">
                <li class="nav-item" v-bind:class="{'active': currentRouteName === 'skills'}">
                    <router-link class="nav-link" :to="{ name: 'skills' }">Skills <span class="sr-only" v-show="currentRouteName === 'skills'">(current)</span></router-link>
                </li>
                <li class="nav-item" v-bind:class="{'active': currentRouteName === 'experience'}">
                    <router-link class="nav-link" :to="{ name: 'experience' }">Experience <span class="sr-only" v-show="currentRouteName === 'experience'">(current)</span></router-link>
                </li>
                <li class="nav-item d-lg-none" v-bind:class="{'active': currentRouteName === 'services'}">
                    <router-link class="nav-link" :to="{ name: 'services' }">Services <span class="sr-only" v-show="currentRouteName === 'services'">(current)</span></router-link>
                </li>
                <li class="nav-item d-lg-none" v-bind:class="{'active': currentRouteName === 'portfolio'}">
                    <router-link class="nav-link" :to="{ name: 'portfolio' }">Portfolio <span class="sr-only" v-show="currentRouteName === 'portfolio'">(current)</span></router-link>
                </li>
                <li class="nav-item d-lg-none" v-bind:class="{'active': currentRouteName === 'portfolio-websites'}">
                    <router-link class="nav-link" :to="{ name: 'portfolio-websites' }">Websites <span class="sr-only" v-show="currentRouteName === 'portfolio/websites'">(current)</span></router-link>
                </li>
                <li class="nav-item d-lg-none" v-bind:class="{'active': currentRouteName === 'blog'}">
                    <router-link class="nav-link" :to="{ name: 'blog' }">Blog <span class="sr-only" v-show="currentRouteName === 'blog'">(current)</span></router-link>
                </li>
                <li class="nav-item" v-bind:class="{'active': currentRouteName === 'resume'}">
                    <router-link class="nav-link" :to="{ name: 'resume' }">Resume <span class="sr-only" v-show="currentRouteName === 'resume'">(current)</span></router-link>
                </li>
                <li class="nav-item" v-bind:class="{'active': currentRouteName === 'about'}">
                    <router-link class="nav-link" :to="{ name: 'about' }">About Me <span class="sr-only" v-show="currentRouteName === 'about'">(current)</span></router-link>
                </li>
                <li class="nav-item" v-bind:class="{'active': currentRouteName === 'contact'}">
                    <router-link class="nav-link" :to="{ name: 'contact' }">Contact <span class="sr-only" v-show="currentRouteName === 'contact'">(current)</span></router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'NavPrimary',
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>