<template>
    <div>
        <page-title title="Contact" subtitle="Question? Comments? I'm happy to help!"></page-title>
        <section class="section " id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center mt-4">
                            <div class="text-custom h2">
                                <i class="fas fa-mobile-alt "></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Call Brandon</p>
                                <p class="text-muted">(949) 351-1573</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div class="text-custom h2">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Email Brandon</p>
                                <p class="text-muted">brandon@brandonbest.com</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div class="text-custom h2">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="mt-2">
                                <p class="mb-0 font-weight-bold">Visit</p>
                                <p class="text-muted">Gilbert, AZ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact_form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="first_name" class="font-weight-bold">First Name</label>
                                            <input name="first_name" id="first_name" type="text" class="form-control" placeholder="Your first name..." required="" autocomplete="given-name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="last_name" class="font-weight-bold">Last Name</label>
                                            <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Your last name..." required="" autocomplete="family-name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="email" class="font-weight-bold">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="" autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="tel" class="font-weight-bold">Phone Number</label>
                                            <input name="tel" id="tel" type="tel" class="form-control" placeholder="Your phone number..." required="" autocomplete="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="subject" class="font-weight-bold">Subject</label>
                                            <input type="text" class="form-control" id="subject" placeholder="Your Subject..." required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="comments" class="font-weight-bold">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-custom" value="Send Message">
                                    </div>
                                </div>
                            </form>
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
    import PageTitle from "../components/header/PageTitle";
    import FooterTop from "../components/footer/FooterTop";
    import FooterBottom from "../components/footer/FooterBottom";
    export default {
        name: 'Contact',
        components: {FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>