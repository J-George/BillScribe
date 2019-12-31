<template>
        <div class="wrapper">
			<nav class="navbar navbar-expand-lg navbar-light"> 
				<a class="navbar-brand front-page-logo"  href="#">{{title}}
                </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"> <a class="nav-link" href="https://techno-junkie.ca/services">Services </a> </li>
						<li class="nav-item active"> <a class="nav-link" href="https://techno-junkie.ca/explore">Explore </a> </li>
						<li class="nav-item active"> <a class="nav-link" href="https://techno-junkie.ca/contact">Contact </a> </li>
						<li class="nav-item active"> <a class="nav-link" href="https://techno-junkie.ca/login"><i class="fas fa-lock"></i><span>&nbsp;Portal Login</span> </a> </li>
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
        html, body {
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background: linear-gradient(45deg,#F48A23, #F15A24)
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
        }

        .links > a {
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
</style>