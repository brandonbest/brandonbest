<template>
    <div>
        <div class="container-fluid container-error">
            <div class="row">
                <div class="col-md-4 offset-md-4 text-center">
                    <h1>404 <span>Error</span></h1>
                    <p>You have reached a page that does not exist! Use one of the links below to get back on track.</p>
                    <p>&nbsp;</p>
                    <ul class="list-unstyled">
                        <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                        <li><router-link :to="{ name: 'services' }">Services</router-link></li>
                        <li><router-link :to="{ name: 'about' }">About Us</router-link></li>
                        <li><router-link :to="{ name: 'contact' }">Contact Us</router-link></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>