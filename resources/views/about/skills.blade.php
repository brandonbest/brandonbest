@extends('layout.public')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            @include('layout.page.title', ['title' => 'My Skills', 'subtitle' => 'What skills does Brandon have?', 'icon' => 'fas fa-code'])
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            <h4>Coding Languages</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>CSS</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <h6>HTML</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>PHP</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Laravel</li>
                    <li class="list-group-item p-1 pl-3">Laravel Package Development</li>
                    <li class="list-group-item p-1 pl-3">Wordpress</li>
                    <li class="list-group-item p-1 pl-3">Wordpress Plugin Development</li>
                    <li class="list-group-item p-1 pl-3">Symphony</li>
                    <li class="list-group-item p-1 pl-3">Magento</li>
                </ul>
            </div>
        </div>

        <div class="col-6">
            <h6>JS</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">jQuery</li>
                    <li class="list-group-item p-1 pl-3">React</li>
                    <li class="list-group-item p-1 pl-3">Angular</li>
                    <li class="list-group-item p-1 pl-3">Vue</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <h4>Databases and Cache</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>PostGres</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <h6>MySQL</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>Redis</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <h6>Memcache</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <h4>Development Tools</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>Git</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <h6>Docker</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>Phonegap / Cordova</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            @include('layout.page.title', ['title' => 'Production Ecosystems', 'subtitle' => 'How have I hosted and managed projects?', 'icon' => 'fas fa-server'])
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-6">
            <h6>Server Management</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Linux</li>
                    <li class="list-group-item p-1 pl-3">Buddy.works</li>
                    <li class="list-group-item p-1 pl-3">Varnish</li>
                    <li class="list-group-item p-1 pl-3">Email Setup and Management</li>
                    <li class="list-group-item p-1 pl-3">Domain Setup and Management</li>
                    <li class="list-group-item p-1 pl-3">SSL</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <h6>Server Hosts</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Digital Ocean</li>
                    <li class="list-group-item p-1 pl-3">Rackspace</li>
                    <li class="list-group-item p-1 pl-3">AWS</li>
                    <li class="list-group-item p-1 pl-3">cPanel</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>Project Mangement</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Jira</li>
                </ul>
            </div>

        </div>
        <div class="col-6">
            <h6>Code Management</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Github</li>
                    <li class="list-group-item p-1 pl-3">Gitlab</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                @include('layout.page.title', ['title' => 'Software Experience', 'subtitle' => 'What APIs and Software have I used?', 'icon' => 'fas fa-server'])
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-6">
            <h6>Email Marketing</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Eloqua</li>
                    <li class="list-group-item p-1 pl-3">Marketo</li>
                    <li class="list-group-item p-1 pl-3">Sparkpost</li>
                    <li class="list-group-item p-1 pl-3">Sendgrid</li>
                    <li class="list-group-item p-1 pl-3">Mailchimp</li>
                    <li class="list-group-item p-1 pl-3">Mandrill</li>
                    <li class="list-group-item p-1 pl-3">Iterable</li>
                    <li class="list-group-item p-1 pl-3">Pardot</li>
                </ul>
            </div>
        </div>

        <div class="col-6">
            <h6>Payment Processing</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Braintree</li>
                    <li class="list-group-item p-1 pl-3">Stripe</li>
                    <li class="list-group-item p-1 pl-3">Square</li>
                    <li class="list-group-item p-1 pl-3">PayPal</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>CDN</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Cloudflare</li>
                    <li class="list-group-item p-1 pl-3">Incapsula</li>
                    <li class="list-group-item p-1 pl-3">MaxCDN</li>
                    <li class="list-group-item p-1 pl-3">Cloudfront</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <h6>CRM</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Salesforce</li>
                    <li class="list-group-item p-1 pl-3">Zoho</li>
                    <li class="list-group-item p-1 pl-3">SugarCRM</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>Additional Technology</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Celigo</li>
                    <li class="list-group-item p-1 pl-3">Netsuite</li>
                    <li class="list-group-item p-1 pl-3">Zapier</li>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <h6>Social Media</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">LinkedIn</li>
                    <li class="list-group-item p-1 pl-3">Facebook</li>
                    <li class="list-group-item p-1 pl-3">Twitter</li>
                    <li class="list-group-item p-1 pl-3">Instagram</li>
                    <li class="list-group-item p-1 pl-3">Vimeo</li>
                    <li class="list-group-item p-1 pl-3">YouTube</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <h6>Google Platform</h6>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div>
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item p-1 pl-3">Maps</li>
                    <li class="list-group-item p-1 pl-3">Analytics</li>
                    <li class="list-group-item p-1 pl-3">Doubleclick</li>
                    <li class="list-group-item p-1 pl-3">Websmaster Tools</li>
                    <li class="list-group-item p-1 pl-3">Calendar</li>
                    <li class="list-group-item p-1 pl-3">Custom Search</li>
                    <li class="list-group-item p-1 pl-3">Drive</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container mb-6">
    <div class="row mt-6 mb-3">
        <div class="col">
            <h2>Companies</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card-deck">
                <div class="card">
                    <img src="{{ url('/images/content/bisnow.jpg') }}" class="card-img-top" alt="Bisnow">
                    <div class="card-body">
                        <h5 class="card-title">Bisnow</h5>
                        <p class="card-text">Built the current website, migrated between multiple email marketing platforms, and managed a team up to 2 developers.</p>
                        <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ url('/images/content/dream-ideation.jpg') }}" class="card-img-top" alt="Dream Ideation">
                    <div class="card-body">
                        <h5 class="card-title">Dream Ideation</h5>
                        <p class="card-text">This is Brandon's company. Acted as the president and lead on all projects. Hired and successfully managed 2 employees.</p>
                        <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ url('/images/content/rich-hessler-solar.jpg') }}" class="card-img-top" alt="Rich Hessler Solar">
                    <div class="card-body">
                        <h5 class="card-title">Rich Hessler Solar</h5>
                        <p class="card-text">Designed and built the website, developed a process for launching websites for solar companies, ran marketing efforts and sold websites/education.</p>
                        <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ url('/images/content/mesa-public-schools.jpg') }}" class="card-img-top" alt="Mesa Public Schools">
                    <div class="card-body">
                        <h5 class="card-title">Mesa Public Schools</h5>
                        <p class="card-text">Added HTML and CSS to online education courses using Dreamweaver.</p>
                        <p><a href="" class="btn btn-outline-primary">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection