@extends('layout.public')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                @include('layout.page.title', ['title' => 'Contact Us', 'subtitle' => 'Question? Comments? We\'re happy to help!', 'icon' => 'far fa-paper-plane'])

                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputFirstName" class="text-muted">First Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-user-circle"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" required />
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
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" />
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
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputMessage" class="text-muted">Write Us a Message</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-sticky-note"></i></span>
                                </div>
                                <textarea name="inputMessage" class="form-control" id="inputMessage" rows="7" placeholder="Enter your message here..." required></textarea>
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
            <div class="col-lg-5 d-none d-lg-block"></div>
        </div>
    </div>
@endsection

@section('js-footer')
    @parent
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
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