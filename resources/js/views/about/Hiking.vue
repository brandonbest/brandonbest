<template>
    <div>
        <page-title title="Hiking" subtitle="I love to hike"></page-title>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="text-center mx-auto section-main-title"><h2><span
                                class="font-weight-bold">Education</span></h2>
                            <div class="main-title-border mt-2 mb-2"><i class="fas fa-graduation-cap ml-2 mr-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="timeline offset-md-3 col-md-6 col-sm-12">
                        <div class="row align-items-center timeline-end d-flex">
                            <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">4</div>
                            </div>
                            <div class="col-6"><h5 class="m-0">Point Loma</h5>
                                <p class="m-0">Degree: Biochemistry</p>
                                <p class="m-0">Graduated cum laude</p></div>
                        </div>
                        <div class="row timeline-item">
                            <div class="col-2">
                                <div class="corner top-right"></div>
                            </div>
                            <div class="col-8">
                                <hr>
                            </div>
                            <div class="col-2">
                                <div class="corner left-bottom"></div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-end timeline-end d-flex">
                            <div class="col-6 text-right"><h5 class="m-0">Bond University</h5>
                                <p class="m-0">Studied abroad in Australia, focused biochemistry and imunology.</p>
                            </div>
                            <div class="col-2 text-center right full d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">3</div>
                            </div>
                        </div>
                        <div class="row timeline-item">
                            <div class="col-2">
                                <div class="corner right-bottom"></div>
                            </div>
                            <div class="col-8">
                                <hr>
                            </div>
                            <div class="col-2">
                                <div class="corner top-left"></div>
                            </div>
                        </div>
                        <div class="row align-items-center timeline-end d-flex">
                            <div class="col-2 text-center full left d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">2</div>
                            </div>
                            <div class="col-6"><h5 class="m-0">Saguaro High School</h5>
                                <p class="m-0">Graduted in top 5% of class of 370+.</p></div>
                        </div>
                        <div class="row timeline-item">
                            <div class="col-2">
                                <div class="corner top-right"></div>
                            </div>
                            <div class="col-8">
                                <hr>
                            </div>
                            <div class="col-2">
                                <div class="corner left-bottom"></div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-end timeline-end d-flex">
                            <div class="col-6 text-right"><h5 class="m-0">Grayslake Middle School</h5>
                                <p class="m-0">Grayslake, IL</p></div>
                            <div class="col-2 text-center top right d-inline-flex justify-content-center align-items-center">
                                <div class="circle font-weight-bold">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-cta">
            <div class="bg-overlay"></div>
            <div class="container text-light">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title mb-4"><h2><span
                                class="font-weight-bold">Family</span></h2>
                            <div class="main-title-border mt-2 mb-2"><i class="fas fa-graduation-cap ml-2 mr-2"></i>
                            </div>
                        </div>
                        <p class="text-center mx-auto mt-2">Brandon grew up in Grayslake, Illinois and Scottsdale,
                            Arizona with 3 younger brothers.</p>
                        <p class="text-center mx-auto mt-2">He met his wife, Amanda, in 2014. They married in 2015 and
                            have 2 children.</p>
                        <p class="text-center mx-auto mt-2">Brandon and Amanda host weekly gatherings for young adults
                            in their home and stay physically active.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto section-main-title">
                            <h2>Other <span class="font-weight-bold">Hobbies</span></h2>
                            <div class="main-title-border mt-2 mb-2"><i class="fas fa-tractor ml-2 mr-2"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4">
                    <div class="col-lg-6">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon"><i class="fas fa-tree"></i></div>
                            <div class="service-content mt-4"><h5 class="font-weight-bold">Landscaping</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lan_box_ser text-center rounded p-4 mt-3">
                            <div class="ser_icon"><i class="fas fa-pencil-ruler"></i></div>
                            <div class="service-content mt-4"><h5 class="font-weight-bold">Wood Work</h5>
                                <p class="mt-3 text-muted mb-0">The standard chunk of Lorem Ipsum used since the is
                                    reproduced below for those interested.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <FooterTop></FooterTop>
        <FooterBottom></FooterBottom>
    </div>
</template>

<script>
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";

    export default {
        name: 'about.hiking',
        components: {FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>