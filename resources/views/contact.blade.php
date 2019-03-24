@extends('layout.public')

@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                @include('layout.page.title', ['title' => 'Contact Me', 'subtitle' => 'Question? Comments? I\'m happy to help!', 'icon' => 'far fa-paper-plane'])

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

            {{-- SIDEBAR --}}
            <div class="col-lg-4 offset-md-1 page-sidebar d-none d-lg-block">
                <div class="row mt-4">
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-body pt-0">
                                @include('layout.page.sidebar-title', ['title' => 'Status Updates'])
                                <p class="mt-1">Check my social media and Github for current projects and updates.</p>
                                <p class="text-center mb-0">
                                    <a href="https://www.facebook.com/dreamideation" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.facebook.com/dreamideation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/dreamideation" target="_blank"><i class="fab fa-twitter"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        @include('layout.page.sidebar-title', ['title' => 'Contact Brandon'])
                        <ul class="list-group">
                            <li class="list-group-item p-2 pl-5"><i class="fa fa-phone"></i> (602) 910-5898</li>
                            <li class="list-group-item p-1 pl-5"><i class="fa fa-envelope"></i> info@BrandonBest.com</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        @include('layout.page.sidebar-title', ['title' => 'Work Hours'])
                        <ul class="list-group">
                            <li class="list-group-item p-2 pl-5"><i class="fa fa-clock"></i> 4:45 AM - 4:15 PM AZ</li>
                        </ul>
                    </div>
                </div>

            </div>
            {{-- SIDEBAR --}}
        </div>
    </div>
@endsection

@section('js-footer')
    @parent
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection