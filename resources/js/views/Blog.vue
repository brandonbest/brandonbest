<template>
    <div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <page-title title="Blog" titleWord="Brandon's" icon="fas fa-paperclip" subtitle="What's Happening in My World?"></page-title>
                </div>
            </div>
        </div>

        <coming-soon></coming-soon>
    </div>
</template>

<script>
    import PageTitle from '../components/PageTitle';
    import ComingSoon from '../components/ComingSoon';

    export default {
        name: 'WoodWorking',
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