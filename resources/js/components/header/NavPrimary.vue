<template>
    <div>
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <router-link class="navbar-brand logo" :to="{ name: 'Home' }">
                    <img src="images/brandon-b.png" alt="Brandon Best" class="img-fluid logo-light">
                    <img src="images/brandon-b-black.png" alt="Brandon Best" class="img-fluid logo-dark">
                </router-link>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" v-bind:class="{ 'active': currentRouteName === 'Skills' }">
                            <router-link class="nav-link" :to="{ name: 'Skills' }">Skills</router-link>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
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