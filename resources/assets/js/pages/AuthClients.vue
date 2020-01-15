<template>
    <div>
        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
</template>

<script>
import PassportClients from "../../../js/components/passport/Clients";
import PassportAuthClients from "../../../js/components/passport/AuthorizedClients";
import PassportPersonalAccessTokens from "../../../js/components/passport/PersonalAccessTokens";
import axios from 'axios';
export default {
    components:{
        'passport-clients' : PassportClients,
        'passport-authorized-clients' : PassportAuthClients,
        'passport-personal-access-tokens' : PassportPersonalAccessTokens,
    }
    
}
</script>

<style>

</style>