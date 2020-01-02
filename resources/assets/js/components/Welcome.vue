<template>
        <div>
            <div class="container">
                <div class="container front-splash">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>All warranties, One location</h1>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid whitebackground">
                <h2 class="text-center">Available now on Android and iOS.</h2>
            </div>
            <div class="container">
                <div class="row focus">
                    <div class="col-lg-6 whitebackground">
                        <div>
                            <h2>Relax while your warranties are recorded.</h2>
                            <p>Great products come with warranties. Log them on BillScribe and rest easy knowing that you are covered for as long you enjoy your purchase.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 triangle"></div>
                </div>
            </div>
        </div>
</template>

<script>
        export default {
             
        }
</script>

<style scoped>
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
    .focus
    {
        margin: 50px 0px;
    }
    .whitebackground
    {
        background-color: white;
    }
    .whitebackground div
    {
        margin: 150px 20px;
    }
    .whitebackground h2
    {
        font-size: 40px;
        font-family: 'Montserrat Alternates', sans-serif;
        font-weight: 700;
    }
    .whitebackground p
    {
        font-weight: 600;
    }
    .triangle
    {
        background: linear-gradient(136deg, white 57%, #ffffff73 0% );   
    } 
</style>