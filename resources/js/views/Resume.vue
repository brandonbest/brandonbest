<template>
    <div>
        <div class="container container-resume mb-1">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <page-title title="Resume" titleWord="The" icon="far fa-file-alt" subtitle="Download a PDF Version"></page-title>
                    <a href="/resumes/2020-06/brandon-best-resume.pdf" class="btn btn-primary btn-md btn-resume-download">Download</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <img src="/resumes/2020-06/brandon-best-resume.jpg" alt="Brandon Best Resume" class="img-fluid" />
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PageTitle from '../components/PageTitle';

    export default {
        name: 'Resume',
        components: {
            'page-title': PageTitle
        },
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>