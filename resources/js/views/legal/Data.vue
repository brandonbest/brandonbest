<template>
    <div>
        <PageTitle title="Data Request" router-name="legal" router-title="Legal" subtitle="Request all data we have from you."></PageTitle>

        <section class="section " id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact_form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="first_name" class="font-weight-bold mb-1">First Name</label>
                                            <input name="first_name" id="first_name" type="text" class="form-control" placeholder="Your first name..." required="" autocomplete="given-name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="last_name" class="font-weight-bold mb-1">Last Name</label>
                                            <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Your last name..." required="" autocomplete="family-name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="email" class="font-weight-bold mb-1">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="" autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="tel" class="font-weight-bold mb-1">Phone Number</label>
                                            <input name="tel" id="tel" type="tel" class="form-control" placeholder="Your phone number..." required="" autocomplete="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="subject" class="font-weight-bold mb-1">Subject</label>
                                            <input type="text" class="form-control" id="subject" placeholder="Your Subject..." required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <label for="comments" class="font-weight-bold mb-1">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-custom" value="Request Your Data">
                                        <router-link class="btn btn-" :to="{ name: 'legal' }">Cancel</router-link>
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
    import PageTitle from "../../components/header/PageTitle";
    import FooterTop from "../../components/footer/FooterTop";
    import FooterBottom from "../../components/footer/FooterBottom";

    export default {
        name: 'DataRequest',
        components: {FooterBottom, FooterTop, PageTitle},
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        },
        mounted() {
            $(".table-contents a").on("click", function (e) {
                let t = $(this);
                $("html, body").stop().animate({scrollTop: $(t.attr("href")).offset().top - 100}, 1500, "easeInOutExpo"), e.preventDefault()
            })
        }
    }
</script>