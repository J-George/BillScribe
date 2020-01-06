<template>
    <div>
        <div class="profile mx-2" @click="profilemenu = !profilemenu">
            <div class="my-1 mx-1 photo">                   
            </div>
            <font-awesome-icon icon="caret-down"/>
        </div>
        <div class="profileOptions" v-if="profilemenu">
            <div @click="settings = !settings; profilemenu = !profilemenu"><font-awesome-icon icon="user-cog" />Settings</div>
            <hr>
            <div><font-awesome-icon icon="sign-out-alt" />Exit</div>          
        </div>
        <div class="profilemask" v-if="profilemenu" @click="profilemenu = !profilemenu"></div>
        <div class="settings" v-if="settings">
            <FontAwesomeIcon icon="arrow-circle-left" @click="settings = !settings"/>
            <h3 class="mt-5"><FontAwesomeIcon icon="user-cog" class="mr-2"/>Settings</h3>
            <div>

            </div>
        </div>    
    </div>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

export default {
    components: {
        FontAwesomeIcon
    },
    data(){
        return{
            profilemenu:false,
            settings:false,
        }
    },
}
</script>

<style scoped>
.profile{
    display:flex;
    align-items: center;
    cursor: pointer;
}
.profile svg{
    color:white;
}
.profilemask{
    position: absolute;
    z-index: 1;
    top:0;
    right:0;
    width:100vw;
    height: 100vh;
    background-color: transparent;   
}
.photo{
    background-color: white;
    border-radius:25px;
    width:40px;
    height: 40px;
}
.profileOptions{
    position: absolute;
    z-index: 2;
    right:0;
    top:65px;
    background-color: rgb(250, 250, 250);
    box-shadow: 3px 3px 6px rgba(128, 128, 128, 0.473);
}
.profileOptions hr{
    margin: 0;
}
.profileOptions div{
    padding: 10px 25px;
    cursor: pointer;
    color: grey;
}
.profileOptions div:hover{
    background-color: #bdbdbd;
    color:white;
}
.profileOptions svg{
    margin-right: 5px;
}
.settings{
    position: absolute;
    z-index: 3;
    right:0;
    top:0px;
    height: 100vh;
    width:300px;
    background-color: grey;
    padding: 20px;
    color:white;
}
.settings > svg{
    position: absolute;
    left: 20px;
    top: 20px;
    width: 30px !important;
    height: 30px;
    color: white;
    cursor: pointer;
}
</style>