<template>
    <div>
        <div id="mainBar">
            <div>
                <router-link :to="{ name: 'welcome' }"><h4 class="my-1 mx-2">BillScribe</h4></router-link>
                <div class="functions">
                     <switchview :listView="listView" :gridView="gridView" @switchList="listView = true;gridView=false" @switchGrid="gridView=true;listView=false" />   
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
                <div v-if="listView" class=" d-flex flex-row">
                </div>    
                <div v-for="item in contents" :key="item.id" v-bind:class="[{itemsGrid:gridView},{itemsList:listView}]" class="items"  @click="viewDetails(item.id)">
                    <div v-bind:class="[{itemCategory:gridView},{itemCategoryList:listView}]"></div>
                    <p class="mb-0 text-center">{{ item.title }}</p>
                </div>
            </div>
            <hr>
        </div>
        <div class="addItemBox" v-if="displayed">
            <div class="addItem">
                <div>
                    <FontAwesomeIcon icon="arrow-circle-left" class="backButton" @click="displayed = !displayed"/>
                    <h3 class="mt-5">Add Item</h3>
                    <hr>
                </div>
                
                    <div class="d-flex">
                        <div class="catPicture mt-2"></div>
                        <div>
                            <input type="text" placeholder="Title" class="my-2" name="inputTitle"><br>
                            <input type="text" placeholder="Brand" name="inputBrand">
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex mb-1">
                        <div class="mr-5">
                        <label>Category</label>  
                        <select>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                        </select><br>         
                        <label for="">Price :</label><input type="text" placeholder="Price" name="inputPrice"><br> 
                        <label for="">Purchase Date :</label><input type="text" placeholder="Date" name="inputDate"><br> 
                        <label for="">Purchase Location :</label><input type="text" placeholder="Location" name="inputLocation"><br> 
                        </div>
                        <div>
                            <label for="">Serial No :</label><input type="text" placeholder="Serial" name="inputSerial"><br>  
                            <label for="">Warranty :</label><input type="text" placeholder="Warranty" name="inputWarranty"><br> 
                            <label for="">Duration :</label><input type="text" placeholder="Duration" name="inputDuration"><br> 
                        </div>
                    </div>
                    <button class="btn btn-success" @click="addtoList">Add Item</button>
                
            </div>
        </div>
        <div class="viewItemBox" v-if="viewItem">
            <div class="viewItem">
                <FontAwesomeIcon icon="arrow-circle-left" class="backButton" @click="viewItem = !viewItem"/>
                <FontAwesomeIcon icon="trash-alt" class="deleteButton" @click="deleteItem(viewID)" />
                <FontAwesomeIcon icon="edit" class="editButton" @click="addDetails(viewID)" />
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
import ListGrid from "../components/ListGrid";
import axios from 'axios';

export default {
    components: {
        FontAwesomeIcon,
        Settings,
        'switchview':ListGrid,
    },
    data(){
        return{
            displayed:false,
            viewItem:false,
            gridView:true,
            listView:false,            
            settings: '',
            result:'',
            viewID:'',
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
            //    {
            //         'id':0,
            //         'title': 'Apple Watch',
            //         'category': 'electronics',
            //         'subCategory':'Smartwatch',
            //         'brand': 'Apple',
            //         'picture': '',
            //         'cost':'$600',
            //         'dop': '12-02-2019',
            //         'PPurchase': 'Halifax Shopping Center',
            //         'SerialNumbers': 'Dg2751235s',
            //         'WarrantyType': 'Aciidental Damage',
            //         'Duration': '1 year',
            //         'AddWarranty': 'none',
            //         'ServiceL': 'HSP',
            //         'RPicture': '',
            //     },
                
            //     {
            //         'id':1,
            //         'title': 'iPad',
            //         'category': 'electronics',
            //         'subCategory':'Tablet',
            //         'brand': 'Apple',
            //         'picture': '',
            //         'cost':'$900',
            //         'dop': '12-02-2019',
            //         'PPurchase': 'Halifax Shopping Center',
            //         'SerialNumbers': 'Dgsdfsd235s',
            //         'WarrantyType': 'Aciidental Damage',
            //         'Duration': '1 year',
            //         'AddWarranty': 'none',
            //         'ServiceL': 'HSP',
            //         'RPicture': '',
            //     },
            //     {
            //         'id':2,
            //         'title': 'Macbook',
            //         'category': 'electronics',
            //         'subCategory':'Laptop',
            //         'brand': 'Apple',
            //         'picture': '',
            //         'cost':'',
            //         'dop': '12-02-2019',
            //         'PPurchase': 'Halifax Shopping Center',
            //         'SerialNumbers': 'Dg3451235s',
            //         'WarrantyType': 'Accidental Damage',
            //         'Duration': '1 year',
            //         'AddWarranty': 'none',
            //         'ServiceL': 'HSP',
            //         'RPicture': '',
            //     },
            //     {
            //         'id':3,
            //         'title': 'iPhone',
            //         'category': 'electronics',
            //         'subCategory':'Phone',
            //         'brand': 'Apple',
            //         'picture': '',
            //         'cost':'$900',
            //         'dop': '12-02-2019',
            //         'PPurchase': 'Halifax Shopping Center',
            //         'SerialNumbers': 'Dg2751235s',
            //         'WarrantyType': 'Accidental Damage',
            //         'Duration': '1 year',
            //         'AddWarranty': 'Apple Care 3 years',
            //         'ServiceL': 'HSP',
            //         'RPicture': '',
            //     }
             ]
        }
    },
    created(){
        axios.get('/warranties')
            .then(response=>{
                this.contents = response.data
            }) 
            .catch(error=>{
                console.log(error)
            })    
    },
    methods:{
        viewDetails(id){
            console.log(id);
            axios.get('/warranties/'+ id)
                .then(response=>{
                    console.log(response)
                    this.result = response.data[0]
                    this.viewID = this.result.id;
                    this.viewTitle = this.result.title;
                    this.viewCat = this.result.category;
                    this.viewdop = this.result.dop;
                    this.viewSubCat = this.result.subCategory;
                    this.viewCost = this.result.cost;
                    this.viewWarranty = this.result.WarrantyType;
                    this.viewWarrantyDuration = this.result.Duration;
                    this.viewSerial = this.result.SerialNumbers;
                    this.viewBrand = this.result.brand;
                    this.viewItem=true;
                })
                .catch(error=>{
                    console.log(error)
                }) 
        },
        addDetails(id){
            alert('editing ' + id + '.' );
        },
        addtoList(){
            this.contents.push({
                id: this.newID,
                brand:'Microsoft',
                title: 'Surface',
                category:'Electronics',
                subCategory: 'laptops',
                cost:'$900',
                dop: '12-02-2019',
                PPurchase: 'Halifax Shopping Center',
                SerialNumbers: 'Dg2751235s',
                WarrantyType: 'Accidental Damage',
                Duration: '1 year',
                AddWarranty: 'Apple Care 3 years',
                ServiceL: 'HSP',
                RPicture: '',                
            })
            this.newID++;
            this.displayed = false; 
        },
        deleteItem(id)
        {
            axios.get('/warranties')
                .then(response => {
                    console.log(response)
                })
               .catch(error=> {
                    console.log(error)
                })
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
    flex-wrap: wrap;
    justify-content: center;
}
#contents hr
{
    margin-top:2rem;
    width:40%;
    border-top: 2px solid rgba(0, 0, 0, 0.1)
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
    margin-bottom: 30px; 
    font-family: "Roboto", sans-serif;
    box-shadow: 3px 3px 3px #dedede, -3px -3px 3px white;
    overflow: hidden;
    width:100px; 
    height:150px; 
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
    right: 60px;
    top: 15px;
    width: 30px !important;
    height: 30px;
    color: #397dd6;
    cursor: pointer;  
}
.deleteButton{
    position: absolute;
    right: 20px;
    top: 19px;
    width: 25px !important;
    height: 25px;
    color: #ca353d;
    cursor: pointer; 
}
.catPicture{
    height: 100px;
    width: 100px;
    background-color: antiquewhite;
    margin-right: 10px;
    border-radius: 50%;
}
form input{
    border:none;
    border-bottom: 1px solid rgb(187, 187, 187);
    transition: all .3s;
}
form input:focus{
    outline:none;
    border-bottom: 1px solid rgb(87, 87, 87);
}
form input:hover{
    border-bottom: 1px solid grey;
}
form select{
    font-family:'Roboto', sans-serif;
    padding: 5px;
}
</style>