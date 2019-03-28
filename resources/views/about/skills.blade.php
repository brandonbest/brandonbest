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
        <div class="col-6">
            <label>CSS</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>HTML</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>PHP</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>JS</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>jQuery</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Angular</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>React</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>Vue.js</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>PostGres</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>MySQL</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Redis</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>Memcache</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Git</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>Docker</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Linux Management</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>Phonegap / Cordova</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Varnish</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            @include('layout.page.title', ['title' => 'Techology Experience', 'subtitle' => 'What technology have I used?', 'icon' => 'fas fa-server'])
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-6">
            <label>Digital Ocean</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Rackspace</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-6">
            <label>AWS</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Github</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Jira</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Laravel</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Wordpress</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Laravel Package Development</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Wordpress Plugin Development</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Magento</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Eloqua</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Marketo</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Sparkpost</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Sendgrid</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Mailchimp</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Mandrill</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Iterable</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Pardot</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Braintree</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Stripe</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Square</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-6">
            <label>Salesforce</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-6">
            <label>Zoho</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Celigo</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>LinkedIn</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Facebook</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Twitter</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Instagram</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-6">
            <label>Vimeo</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>YouTube</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Google Maps</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Google Analytics</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-6">
            <label>Google Doubleclick</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Google Webmaster Tools</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Google Calendar</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Google Custom Search</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>WooCommerce</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Zapier</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Google Spreadsheets</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Email Setup</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Domain Setup</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>OpenSSH</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Cloudflare</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>Incapsula</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Domain Setup</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="col-6">
            <label>MaxCDN</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Netsuite</label>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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