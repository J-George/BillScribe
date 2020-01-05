<template>
    <div>
        <div id="mainBar">
            <div>
                <h4 class="my-1 mx-2">BillScribe</h4>
                <div class="functions">
                    <div>
                        <button id="listButton" v-bind:class="{ darken:listView }" @click="listView = true;gridView = false">
                            <FontAwesomeIcon icon="list" />
                        </button>
                        <button id="gridButton" v-bind:class="{ darken:gridView }" @click="listView = false;gridView = true">
                            <FontAwesomeIcon icon="th" />
                        </button>
                    </div>
                    <input type="text" class="searchBar" placeholder="Search here...">
                    <div>
                        <button id="addButton" class="btn btn-primary" @click="displayed = !displayed"><FontAwesomeIcon icon="plus" /> add</button>
                    </div>
                </div>
                <Settings></Settings>
            </div>    
        </div>
        <div id="contents">
            <div class="container d-flex pt-5" v-bind:class="{ 'flex-column' : listView }">
                <div v-for="item in contents" :key="item.id" v-bind:class="[{items:gridView},{itemsList:listView}]"  @click="viewDetails(item.id)">
                    <div v-bind:class="[{itemCategory:gridView},{itemCategoryList:listView}]"></div>
                    {{ item.title }}
                </div>
            </div>
        </div>
        <div class="addItemBox" v-if="displayed">
                <div class="addItem">
                    <FontAwesomeIcon icon="arrow-circle-left" @click="displayed = !displayed"/>
                    <h3 class="mt-5">Add Item</h3>
                </div>
        </div>
        <div class="viewItemBox" v-if="viewItem">
            <div class="viewItem">
                <FontAwesomeIcon icon="arrow-circle-left" @click="viewItem = !viewItem"/>
                <h3 class="mt-5">{{ viewTitle }}</h3>
                <p>{{ viewCat }}</p>
            </div>
        </div>
    </div>    
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import Settings from "../components/Settings";
export default {
    components: {
        FontAwesomeIcon,
        Settings,
    },
    data(){
        return{
            displayed:false,
            viewItem:false,
            gridView:true,
            listView:false,
            viewTitle:'',
            viewCat:'',
            contents:[
                {
                    'id':0,
                    'title': 'Apple Watch',
                    'category': 'smartwatch',
                },
                {
                    'id':1,
                    'title': 'iPad',
                    'category': 'tablet',
                },
                {
                    'id':2,
                    'title': 'Macbook',
                    'category': 'laptop',
                },
                {
                    'id':3,
                    'title': 'iPhone',
                    'category': 'phone',
                }
            ]
        }
    },
    methods:{
        viewDetails(id){
            this.viewTitle=this.contents[id].title;
            this.viewCat=this.contents[id].category;
            this.viewItem=true;
        }
    },
};
</script>

<style>
#mainBar{
    width:100vw;
    background-color: rgb(214, 82, 5);
    box-shadow: 0px 6px 7px #c1c1c1;
    position: fixed;
    top:0;
    z-index: 1;
}
#mainBar > div{
    max-width: 1900px;
    height:50px;
    margin:0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: "Montserrat Alternates", sans-serif;

}
#mainBar h4{
    color:white;
    font-weight: 600;
}
#contents{
    min-height: calc(100vh - 50px);
    background: linear-gradient(0deg, #bdbdbd, transparent);
    position: relative;
    z-index: 0;
}
#contents .container
{
    margin-top:50px;
}
.functions{
    display: flex;
    width:40%;
    min-width: 425px;
    justify-content: space-between;
    
}
.searchBar{
    width:60%;
    border-radius: 10px;
    border: 1px #d65205;
    background: #f59f6ec4;
    border: 1px solid #f59f6ec4;
    color: white;
    padding: 1px 5px;
    transition: all .2s;
    font-family: 'Raleway', sans-serif;
    font-weight: 600;
    letter-spacing: -1px;
    padding: 4px;

}
.searchBar:focus{
    border: 1px solid rgb(245, 189, 153);
    border-radius: 10px;
    outline: white;
    color: white;
}
.searchBar::placeholder{
    color: rgba(255, 255, 255, 0.39);
}
#addButton{
    width: 81px;
    border:none;
    border-radius: 6px;
    padding: 4px;
    background: #227200;
    color: white;
    font-weight: 600;
}
#addButton svg{
    margin-top: 5px;
}
#addButton:focus{
    outline: rgb(255, 255, 255);    
}
#addButton:active{
    font-size:13px;
    padding: 5px;   
}
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
.items{
    background-color: whitesmoke;
    padding: 10px;
    margin-right: 30px;
    border-radius: 10px;
    font-family: "Montserrat Alternates", sans-serif;
    box-shadow: 3px 3px 3px #dedede, -3px -3px 3px white;
    overflow: hidden;
    width:100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all .2s;
}
.itemsList{
    background-color: #f5f5f580;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 10px;
    font-family: "Montserrat Alternates", sans-serif; 
    box-shadow: 3px 3px 3px #dedede, -3px -3px 3px white;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: all .2s;
}
.items:hover, .itemsList:hover{
  box-shadow: 5px 5px 5px #dedede, -5px -5px 5px white;  
}

.itemCategory{
    width:75px;
    height:75px;
    margin-bottom:5px;
}
.itemCategoryList{
    width:30px;
    height:30px;
    margin-right:5px;
}

.addItemBox,.viewItemBox{
    width:100vw;
    height:100vh;
    position: absolute;   
    top: 0px;
    z-index:2;
    background: radial-gradient(transparent, #4e4e4ead);
    display:flex;
    align-items: center;
    justify-content: center;
    transition: all .5s;
}
.addItem,.viewItem{
    width:300px;
    height:250px;
    background-color: white;
    position: relative;
    padding:20px;
}
.addItem svg, .viewItem svg{
    position: absolute;
    left: 20px;
    top: 20px;
    width: 30px !important;
    height: 30px;
    color: black;
    cursor: pointer;
}

</style>