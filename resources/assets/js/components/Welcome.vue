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
                    <font-awesome-icon icon="mobile-alt" />
                    <h3 class="mt-2"><strong> Always Accessible </strong></h3>
                    <p></p>
                </div>
                <div>
                    <font-awesome-icon icon="user-tie" />
                    <h3 class="mt-2"><strong> Go Premium </strong></h3>
                    <p></p>
                </div>
                <div>
                    <font-awesome-icon icon="recycle" />
                    <h3 class="mt-2"><strong> Be Responsible </strong></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container-fluid redbackground"></div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
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
