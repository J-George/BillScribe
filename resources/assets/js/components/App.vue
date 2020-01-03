<template>
    <div>
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
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
    export default {}
</script>

<style>
.logo{
    color:grey;
}
.nav-link,.navbar-light
{
    /* color: #eaeaea !important; */
    font-weight: 700;
    padding-top: 10px;
    margin-right: 25px;
    font-size: 18px;
}
.nav-link:last-child
{
    margin-right: 0px;
}
</style>