<template>
    <div>
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <router-link class="navbar-brand logo" :to="{ name: 'Home' }">
                    <img src="/images/brandon-b.png" alt="Brandon Best" class="img-fluid logo-light">
                    <img src="/images/brandon-b-black.png" alt="Brandon Best" class="img-fluid logo-dark">
                </router-link>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName !== null && currentRouteName.includes('accomplishments') }">
                            <router-link class="nav-link" :to="{ name: 'accomplishments.overview' }">Accomplishments</router-link>
                        </li>
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'Skills' }">
                            <router-link class="nav-link" :to="{ name: 'Skills' }">Skills</router-link>
                        </li>
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'Resume' }">
                            <router-link class="nav-link" :to="{ name: 'Resume' }">Resume</router-link>
                        </li>
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'Portfolio' }">
                            <router-link class="nav-link" :to="{ name: 'Portfolio' }">Portfolio</router-link>
                        </li>
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'About' }">
                            <router-link class="nav-link" :to="{ name: 'About' }">About</router-link>
                        </li>
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'Blog' }">
                            <router-link class="nav-link" :to="{ name: 'Blog' }">Blog</router-link>
                        </li>
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'Contact' }">
                            <router-link class="nav-link" :to="{ name: 'Contact' }">Contact</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
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