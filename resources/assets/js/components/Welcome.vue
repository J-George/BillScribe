<template>
        <div class="wrapper container">
			<nav class="navbar navbar-expand-lg navbar-light"> 
				<a class="navbar-brand front-page-logo"  href="#">{{title}}</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"> <a class="nav-link" href="https://techno-junkie.ca/services">Register </a> </li>
						<li class="nav-item active"> <a class="nav-link" href="https://techno-junkie.ca/explore">Login </a> </li>
                    </ul>
				</div>
			</nav>
            <div class="container front-splash">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>All warranties, One location</h1>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div> 
</template>

<script>
        export default {
             props : ['title']
        }
</script>

<style scoped>
    .nav-item
    {
        margin-right: 25px;
        color: #eaeaea;
        font-weight: 700;
    }
    .nav-link,.navbar-light
    {
        color: #eaeaea !important;
        font-weight: 700;
        padding-top: 10px;
    }
    .front-splash
    {
        min-height: calc(100vh - 60px);
        display: flex;
        align-items: center;
        color: white;
    }  
    .front-splash .row
    {
        border: 10px solid white;
        width: 100%;
    }
    .front-splash .row h1
    {
        margin: 150px 20px;
        font-weight: 700;
        font-size: 50px;
    }  
</style>