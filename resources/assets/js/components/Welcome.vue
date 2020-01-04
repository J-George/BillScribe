<template>
    <div>
        <div class="front-splash-background">    
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <router-link :to="{ name: 'welcome' }" class="nav-link logo">BillScribe Vue</router-link>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><router-link :to="{ name: 'register' }" class="nav-link">Register</router-link></li>
                            <li class="nav-item active"><router-link :to="{ name: 'login' }" class="nav-link" >Login</router-link></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="container front-splash">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>All warranties,<br>One location</h1>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid blackbackground">
                <div class="container">
                    <h2 class="text-center">
                        The essential tool for a smart home.
                    </h2>
                    <p class="text-center">
                        As our homes get smarter, it makes sense to secure our
                        products with a good warranty program. It makes greater
                        sense to record and never forget your warranties when you
                        need them the most.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row focus">
                    <div class="col-lg-6 whitebackground">
                        <div>
                            <h2>Relax while your warranties are recorded.</h2>
                            <p>
                                BillScribe is a tool for logging your purchases with
                                warranties. Be it a phone, a laptop, a luxury watch
                                or even a suitcase, if it has a warranty, add it
                                in.<br />
                                The app will keep you informed of when the warranty
                                is about to expire and what it covers. You will
                                never need to worry about hunting for old reciepts
                                again.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 triangle"></div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex">
                    <div>
                        <FontAwesomeIcon icon="mobile-alt" />
                        <h3 class="mt-2"><strong> Always Accessible </strong></h3>
                        <p>Get all the details on any device. Supported on iOS and Android.</p>
                    </div>
                    <div>
                        <FontAwesomeIcon icon="user-tie" />
                        <h3 class="mt-2"><strong> Go Premium </strong></h3>
                        <p>Add upto 20 devices for free! Or go Premium and add as many as you'd like.</p>
                    </div>
                    <div>
                        <FontAwesomeIcon icon="map-marked-alt" />
                        <h3 class="mt-2"><strong> Find Support, Fast </strong></h3>
                        <p>View all available support resources closest to you, right on the app.</p>
                    </div>
                </div>
            </div>    
            <div class="container-fluid redbackground"></div>
        </div>    
    </div>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

export default {
    components: {
        FontAwesomeIcon
    }
};
</script>

<style scoped>
 .navbar-nav .nav-item,.navbar-light
{
    font-weight: 700;
    padding-top: 10px;
    margin-right: 25px;
    font-size: 18px;
}
.nav-item:last-child
{
    margin-right: 0px;
}
.logo, .navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .nav-link.show, 
.navbar-light .navbar-nav .nav-link.active{
    color:white;
}
.front-splash-background {
    background: linear-gradient(290deg,#F48A23, #F15A24)
}

.front-splash {
    min-height: calc(100vh - 60px);
    display: flex;
    align-items: center;
    color: white;
}
.front-splash .row {
    border: 10px solid white;
    width: 100%;
}
.front-splash .row h1 {
    margin: 150px 20px;
    font-weight: 700;
    font-size: 50px;
    font-family: 'Raleway', sans-serif;
}
.focus {
    margin: 100px 0px;
}
.blackbackground {
    background-color: #503927;
    color: white;
}
.blackbackground div {
    padding: 150px 80px;
}

.whitebackground {
    background-color: white;
    color:#687077;
}
.whitebackground div {
    margin: 150px 20px;
}
.whitebackground h2,
.blackbackground h2 {
    font-size: 40px;
    font-family: "Montserrat Alternates", sans-serif;
    font-weight: 700;   
}
.whitebackground p,
.blackbackground p {
    font-weight: 600;
}
.triangle {
    background: linear-gradient(136deg, white 57%, #ffffff73 0%);
}
.d-flex div {
    width: 33%;
    text-align: center;
    color: white;
    padding: 10px;
    margin-bottom: 100px;
    font-weight: 700;
}
.d-flex svg {
    width: 75px;
    height: 85px;
}
.redbackground {
    background-color: #e23e3e;
    padding: 50px;
}
</style>
