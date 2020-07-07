<template>
    <div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <page-title title="Me" titleWord="Contact" icon="far fa-paper-plane" subtitle="Question? Comments? I'm happy to help!"></page-title>

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputFirstName" class="text-muted">First Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-user-circle"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" autocomplete="given-name" required />
                                    <div class="invalid-feedback">
                                        First Name Required
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col">
                                <label for="inputLastName" class="text-muted">Last Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-user-circle"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="inputLastName" autocomplete="family-name" placeholder="Last Name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail" class="text-muted">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="inputEmail" autocomplete="email" placeholder="Email" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputMessage" class="text-muted">Write Me a Message</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-sticky-note"></i></span>
                                    </div>
                                    <textarea name="inputMessage" class="form-control" id="inputMessage" rows="7" autocomplete="off" placeholder="Enter your message here..." required></textarea>
                                    <div class="invalid-feedback">
                                        Please write a message
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" class="btn btn-primary" value="Send Message" />
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 offset-md-1 page-sidebar d-none d-lg-block">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="card bg-light">
                                <div class="card-body pt-0">
                                    <sidebar title="Status Updates"></sidebar>
                                    <p class="mt-1">Check my social media and Github for current projects and updates.</p>
                                    <p class="text-center mb-0">
                                        <a href="https://www.linkedin.com/in/bbest100/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.facebook.com/dreamideation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://github.com/brandonbest" target="_blank"><i class="fab fa-github-alt"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <sidebar title="Contact Brandon"></sidebar>
                            <ul class="list-group">
                                <li class="list-group-item p-2 pl-5"><i class="fa fa-phone"></i> (602) 910-5898</li>
                                <li class="list-group-item p-1 pl-5"><i class="fa fa-envelope"></i> info@BrandonBest.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <sidebar title="Work Hours"></sidebar>
                            <ul class="list-group">
                                <li class="list-group-item p-2 pl-5"><i class="fa fa-clock"></i> 4:45 AM - 4:15 PM AZ</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PageTitle from '../components/PageTitle';
    import Sidebar from '../components/Sidebar';

    export default {
        name: 'Resume',
        components: {
            'page-title': PageTitle,
            'sidebar': Sidebar
        },
        computed: {
            currentRouteName() {
                return this.$route.name;
            }
        }
    }
</script>