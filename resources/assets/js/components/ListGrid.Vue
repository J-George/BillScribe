<template>
    <div>
        <button id="listButton" v-bind:class="{ darken:listView }" @click="switchList(listView)">
            <FontAwesomeIcon icon="list" />
        </button>
        <button id="gridButton" v-bind:class="{ darken:gridView }" @click="switchGrid(gridView)">
            <FontAwesomeIcon icon="th" />
        </button>
    </div>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

export default {
    components: {
        FontAwesomeIcon,
        
    },
    data(){
        return{
            gridView:true,
            listView:false,
        }
    },
    methods:{
        switchList(status){
            this.$emit('switchList', status);
            this.gridView = false;
            this.listView = true;
        },
        switchGrid(status){
            this.$emit('switchGrid', status);
            this.gridView = true;
            this.istView = false;
        },
    },
}
</script>

<style scoped>
#listButton,#gridButton{
    color: white;
}
#listButton:focus,#gridButton:focus{
    outline: orange;
}

#listButton:active,#gridButton:active{
    background-color: #f5965e75;
}
.darken{
    background-color: #f5965e75 !important;
}
#listButton:active svg{
    margin-left: 2px;
}
#gridButton:active svg{
    margin-right: 2px;
}
#listButton{
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    margin-right: -3px;
    border: none;
    padding: 4px 8px;
    background-color: #f5965e;    
}
#gridButton{
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    border: none;
    padding: 4px 8px;
    background-color: #f5965e;
}
#listButton svg,#gridButton svg{
    width: 15px;
    height: 15px;
    margin-left: 1px;
}
#listButton svg{
    margin-left: 1px;
    margin-top: 3px;
}
#gridButton svg{
    margin-right: 1px;
    margin-top: 3px;
}
#listButton:active svg,#gridButton:active svg, .darken svg{
    width: 14px;
    height: 14px;
    color:#d65205;
}
#listButton:hover svg,#gridButton:hover svg{
    color:#d65205;
}
</style>