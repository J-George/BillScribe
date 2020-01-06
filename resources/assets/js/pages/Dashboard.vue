<template>
    <div>
        <div id="mainBar">
            <div>
                <router-link :to="{ name: 'welcome' }"><h4 class="my-1 mx-2">BillScribe</h4></router-link>
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
                        <button id="addButton" class="btn btn-success" @click="displayed = !displayed"><FontAwesomeIcon icon="plus" /> ADD</button>
                    </div>
                </div>
                <Settings />
            </div>    
        </div>
        <div id="contents">
            <div class="container d-flex pt-5" v-bind:class="{ 'flex-column' : listView }">
                <div v-for="item in contents" :key="item.id" v-bind:class="[{itemsGrid:gridView},{itemsList:listView}]" class="items"  @click="viewDetails(item.id)">
                    <div v-bind:class="[{itemCategory:gridView},{itemCategoryList:listView}]"></div>
                    <p class="mb-0 text-center">{{ item.title }}</p>
                </div>
            </div>
        </div>
        <div class="addItemBox" v-if="displayed">
                <div class="addItem">
                    <FontAwesomeIcon icon="arrow-circle-left" class="backButton" @click="displayed = !displayed"/>
                    <h3 class="mt-5">Add Item</h3>
                </div>
        </div>
        <div class="viewItemBox" v-if="viewItem">
            <div class="viewItem">
                <FontAwesomeIcon icon="arrow-circle-left" class="backButton" @click="viewItem = !viewItem"/>
                 <FontAwesomeIcon icon="edit" class="editButton" />
                <div class="d-flex">
                    <div>
                        <div class="catPicture mt-5"></div>
                    </div>
                    <div>
                        <h3 class="mt-5">{{ viewTitle }}</h3>
                        <p>{{ viewBrand }}</p>
                    </div>
                </div>                
                <hr>
                <div class="d-flex">
                    <div class="mr-5">
                       <p>Category: {{ viewCat }} |&nbsp; Subcategory:{{ viewSubCat }} </p> 
                       <p>Price: {{ viewCost }}</p>
                       <p>Purchase Date: {{ viewdop }}</p>
                       <p>Purchase Location: {{ viewPOP }}</p>
                    </div>
                    <div>
                        <p>Serial No: {{ viewSerial }}</p> 
                        <p>Warranty: {{ viewWarranty }}</p>
                        <p>Warranty Duration: {{ viewWarrantyDuration }}</p>
                    </div>
                </div>
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
            settings: '',
            viewTitle:'',
            viewCat:'',
            viewBrand:'',
            viewSerial:'',
            viewWarranty:'',
            viewWarrantyDuration:'',
            viewPOP:'',
            viewdop:'',
            viewCost:'',
            viewSubCat:'',
            contents:[
                {
                    'id':0,
                    'title': 'Apple Watch',
                    'category': 'electronics',
                    'subCategory':'Smartwatch',
                    'brand': 'Apple',
                    'picture': '',
                    'cost':'$600',
                    'dop': '12-02-2019',
                    'PPurchase': 'Halifax Shopping Center',
                    'SerialNumbers': 'Dg2751235s',
                    'WarrantyType': 'Aciidental Damage',
                    'Duration': '1 year',
                    'Add-Warranty': 'none',
                    'ServiceL': 'HSP',
                    'RPicture': '',
                },
                
                {
                    'id':1,
                    'title': 'iPad',
                    'category': 'electronics',
                    'subCategory':'Tablet',
                    'brand': 'Apple',
                    'picture': '',
                    'cost':'$900',
                    'dop': '12-02-2019',
                    'PPurchase': 'Halifax Shopping Center',
                    'SerialNumbers': 'Dgsdfsd235s',
                    'WarrantyType': 'Aciidental Damage',
                    'Duration': '1 year',
                    'Add-Warranty': 'none',
                    'ServiceL': 'HSP',
                    'RPicture': '',
                },
                {
                    'id':2,
                    'title': 'Macbook',
                    'category': 'electronics',
                    'subCategory':'Laptop',
                    'brand': 'Apple',
                    'picture': '',
                    'cost':'$1600',
                    'dop': '12-02-2019',
                    'PPurchase': 'Halifax Shopping Center',
                    'SerialNumbers': 'Dg3451235s',
                    'WarrantyType': 'Accidental Damage',
                    'Duration': '1 year',
                    'Add-Warranty': 'none',
                    'ServiceL': 'HSP',
                    'RPicture': '',
                },
                {
                    'id':3,
                    'title': 'iPhone',
                    'category': 'electronics',
                    'subCategory':'Phone',
                    'brand': 'Apple',
                    'picture': '',
                    'cost':'$900',
                    'dop': '12-02-2019',
                    'PPurchase': 'Halifax Shopping Center',
                    'SerialNumbers': 'Dg2751235s',
                    'WarrantyType': 'Accidental Damage',
                    'Duration': '1 year',
                    'Add-Warranty': 'Apple Care 3 years',
                    'ServiceL': 'HSP',
                    'RPicture': '',
                }
            ]
        }
    },
    methods:{
        viewDetails(id){
            this.viewTitle=this.contents[id].title;
            this.viewCat=this.contents[id].category;
            this.viewdop=this.contents[id].dop;
            this.viewSubCat=this.contents[id].subCategory;
            this.viewCost=this.contents[id].cost;
            this.viewWarranty=this.contents[id].WarrantyType;
            this.viewWarrantyDuration=this.contents[id].Duration;
            this.viewSerial=this.contents[id].SerialNumbers;
            this.viewBrand=this.contents[id].brand;
            this.viewItem=true;
        },
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
    height:65px;
    margin:0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: "Roboto", sans-serif;
    font-weight: 500;

}
#mainBar h4{
    color:white;
    font-weight: 600;
}
#contents{
    min-height: calc(100vh - 65px);
    background: #fafafa;
    position: relative;
    z-index: 0;
}
#contents .container
{
    margin-top:65px;
}
.functions{
    display: flex;
    width:40%;
    min-width: 425px;
    justify-content: space-between;
    
}
.searchBar{
    width:60%;
    border-radius: 5px;
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
    transition: all .3s;

}
.searchBar:focus{
    border: 1px solid rgb(245, 189, 153);
    border-radius: 5px;
    outline: white;
    color: rgb(116, 116, 116);
    background: #fcf7f4c4;
}
.searchBar:focus::placeholder{
    color: rgba(78, 78, 78, 0.637);
}
.searchBar::placeholder{
    color: rgba(219, 219, 219, 0.774);
}
#addButton{
    width: 81px;
    border:none;
    border-radius: 6px;
    padding: 4px;
    background: #227200;
    color: white;
    font-weight: 300;
}
#addButton svg{
    margin-top: 5px;
    margin-right: 5px;
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
#listButton:hover svg,#gridButton:hover svg{
    color:#d65205;
}
.items{
    padding: 10px;
    border-radius: 10px;
    font-family: "Roboto", sans-serif;
    font-weight: 500;
    color: grey;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: all .2s;
}
.itemsGrid{
    background-color: #f9f9f9;   
    margin-right: 30px;  
    font-family: "Roboto", sans-serif;
    box-shadow: 3px 3px 3px #dedede, -3px -3px 3px white;
    overflow: hidden;
    width:100px;  
    flex-direction: column;
    justify-content: center;
}
.itemsList{
    background-color: #f9f9f9;   
    margin-bottom: 10px;   
    box-shadow: 3px 3px 3px #dedede, -3px -3px 3px white;   
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
}
.addItem,.viewItem{
    min-width:300px;
    min-height:250px;
    background-color: white;
    position: relative;
    padding:20px;
    font-family: 'Roboto', sans-serif;
}
.backButton{
    position: absolute;
    left: 20px;
    top: 20px;
    width: 30px !important;
    height: 30px;
    color: #d65205;
    cursor: pointer;
}
.editButton{
    position: absolute;
    right: 20px;
    top: 20px;
    width: 30px !important;
    height: 30px;
    color: #397dd6;
    cursor: pointer;  
}

.catPicture{
    height: 100px;
    width: 100px;
    background-color: antiquewhite;
    margin-right: 10px;
    border-radius: 50%;
}

</style>