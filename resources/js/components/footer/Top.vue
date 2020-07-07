<template>
    <div class="footer-top">
        <div class="container footer-top-first">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span class="text-white">My</span> Services</h5>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-1"><router-link :to="{name: 'services.consulting'}">Consulting</router-link></p>
                                    <p class="mb-1"><router-link :to="{name: 'services.web-hosting'}">Web Hosting</router-link></p>
                                    <p class="mb-1"><router-link :to="{name: 'services.programming'}">Programming</router-link></p>
                                </div>
                                <div class="col">
                                    <p class="mb-1"><router-link :to="{name: 'services.email-hosting'}">Email Hosting</router-link></p>
                                    <p class="mb-1"><router-link :to="{name: 'services.web-design'}">Design</router-link></p>
                                    <p class="mb-1"><router-link :to="{name: 'services.seo'}">SEO</router-link></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-md-12 d-none d-lg-block col-social-media">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span class="text-white">Social</span> Media</h5>
                            <p class="card-text">
                                <a href="https://github.com/brandonbest" target="_blank"><i class="fab fa-github-alt"></i></a>
                                <a href="https://stackoverflow.com/users/944074/dream-ideation" target="_blank"><i class="fab fa-stack-overflow"></i></a>
                                <a href="https://www.linkedin.com/in/bbest100/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/dreamideation" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="modal-skype-open"><i class="fab fa-skype"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span class="text-white">Contact</span> Brandon</h5>
                            <ul class="list-group">
                                <li class="list-group-item p-2 pl-5"><i class="fa fa-phone"></i> (602) 910-5898</li>
                                <li class="list-group-item p-1 pl-5"><i class="fa fa-envelope"></i> info@BrandonBest.com</li>
                                <li class="list-group-item p-1 pl-5"><i class="fa fa-road"></i> Recker & Elliot<br />Gilbert, AZ 85296</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col"><hr /></div>
            </div>
        </div>
        <div class="container footer-top-second">
            <div class="row">
                <div class="col"><span class="text-white">Brandon</span> Best</div>
                <div class="col text-right"><span class="text-white">Gilbert,</span> AZ</div>
            </div>
        </div>
    </div>
</template>