<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-6"></div>
            <div class="col-lg-5 col-md-6 orangeBackground d-flex">
                <router-link :to="{ name: 'welcome' }" class="nav-link logo"><FontAwesomeIcon icon="arrow-circle-left" /></router-link>
                <div class="d-flex formBox">
                    <img src="/images/Logo Concept.png" alt="logo">
                    <h2>Register</h2>
                    <form action="">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Email ID</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            
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
.container-fluid{
    height:100vh;
    min-height: 500px;
}
.row,.orangeBackground{
    height:100%;
    
}
.orangeBackground{
    background: linear-gradient(290deg,#F48A23, #F15A24);
    box-shadow: 3px 0px 12px 0px #d47950;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.formBox{
    background-color: #ffffff;
    flex-direction: column;
    align-items: center; 
    width:500px;
    max-width: 100%;
    padding: 25px 0px;
    margin: 30px 5px;
    border-radius: 4px;

}
.formBox img{
    max-width: 215px;
    margin: 25px;
}
.formBox h2{
    font-family: 'Montserrat Alternates', sans-serif;
    font-weight: 600;
    color:#687077;
    letter-spacing: 3px;
    margin-bottom: 25px;
}
form{
    width:90%;
    margin-bottom: 50px;
}

.btn-primary{
    color: #fff;
    background-color: #f27923;
    border-color: #f38323;
}
.btn-primary:hover, .btn-primary:not(:disabled):not(.disabled):active {
    color: #fff;
    background-color: #f48823;
    border-color: #f37624;
}
.btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(245, 121, 52, 0.3);
}
.btn-link{
    color: #f27923;
}
.btn-link:hover{
    color:#f48823;
}
svg{
    position: absolute;
    left: 20px;
    top: 20px;
    width: 30px !important;
    height: 30px;
    color: white;
}
</style>