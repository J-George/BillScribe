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
        margin-top: 5px;
    }    
</style>