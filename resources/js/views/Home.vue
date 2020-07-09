<template>
    <div>
        <text-slideshow></text-slideshow>

        <section class="section" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2><span class="font-weight-bold">About </span>Me</h2>
                            <div class="main-title-border">
                                <i class="mdi mdi-asterisk"></i>
                            </div>
                            <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div>
                            <img src="images/brandon-best-signature.png" alt="Brandon Best Signature" class="signature img-fluid mx-auto d-block">
                        </div>
                        <div class="text-center about-detail mx-auto mt-5">
                            <h3 class="mb-3">Hello! <span class="font-weight-bold text-custom">I'M Brandon Best.</span></h3>
                            <ul class="mb-0 list-inline text-center about-work">
                                <li class="list-inline-item mr-0 text-muted">Engineering Leader</li>
                                <li class="list-inline-item mr-0 text-muted">Architect</li>
                                <li class="list-inline-item mr-0 text-muted">Developer</li>
                            </ul>
                            <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Development</div>
                                <div class="text-muted float-right">80%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">WordPress</div>
                                <div class="text-muted float-right">59%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Photoshop</div>
                                <div class="text-muted float-right">88%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress-bars skill-custom">
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Html</div>
                                <div class="text-muted float-right">96%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Css</div>
                                <div class="text-muted float-right">70%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="clearfix">
                                <div class="text-dark font-weight-bold float-left">Asp.net</div>
                                <div class="text-muted float-right">58%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:58%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style>
    .signature {
        width: 300px;
    }
</style>

<script>
    import TextSlideshow from "../components/text-slideshow";

    export default {
        name: 'Home',
        components: {TextSlideshow},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>