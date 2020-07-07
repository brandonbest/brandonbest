<template>
    <nav class="navbar navbar-secondary navbar-dark navbar-expand-lg d-none d-lg-block">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item" v-bind:class="{'active': currentRouteName === 'services'}">
                        <router-link class="nav-link" :to="{ name: 'services' }">Services</router-link>
                    </li>
                    <li class="nav-item" v-bind:class="{'active': currentRouteName === 'portfolio'}">
                        <router-link class="nav-link" :to="{ name: 'portfolio' }">Portfolio</router-link>
                    </li>
                    <li class="nav-item" v-bind:class="{'active': currentRouteName === 'portfolio-websites'}">
                        <router-link class="nav-link" :to="{ name: 'portfolio-websites' }">Websites</router-link>
                    </li>
                    <li class="nav-item" v-bind:class="{'active': currentRouteName === 'blog'}">
                        <router-link class="nav-link" :to="{ name: 'blog' }">Blog</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'NavSecondary',
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>