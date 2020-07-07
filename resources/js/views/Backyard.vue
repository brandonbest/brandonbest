<template>
    <div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <page-title titleWord="Backyard" icon="fas fa-tree" subtitle="Custom Backyard"></page-title>
                </div>
            </div>
        </div>

        <coming-soon></coming-soon>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <router-link :to="{name: 'about.hiking'}" class="btn btn-lg btn-primary">< Hiking</router-link>
                </div>
                <div class="col-lg-6 text-right">
                    <router-link :to="{name: 'about.wood-working'}" class="btn btn-lg btn-primary">Wood Working ></router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PageTitle from '../components/PageTitle';
    import ComingSoon from '../components/ComingSoon';

    export default {
        name: 'Backkyard',
        components: {
            'coming-soon': ComingSoon,
            'page-title': PageTitle
        },
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>