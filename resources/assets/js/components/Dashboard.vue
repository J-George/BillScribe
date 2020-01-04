<template>
    <div>
        <div id="mainBar">
            <h4 class="my-1 mx-2">BillScribe</h4>
            <div class="functions">
                <div>
                    <button id="listButton"><FontAwesomeIcon icon="list" /></button>
                    <button id="gridButton"><FontAwesomeIcon icon="th" /></button>
                </div>
                <input type="text" class="searchBar" placeholder="Search here...">
                <div>
                    <button id="addButton" class="btn btn-primary" @click="addItem"><FontAwesomeIcon icon="plus" /> add</button>
                </div>
            </div>
            <div class="profile mx-2">
                <div class="my-1 mx-1 photo">                   
                </div>
                <font-awesome-icon icon="caret-down"/>
            </div>
        </div>
        <div id="contents">
            <div class="container d-flex pt-5">
                <div v-for="item in contents" :key="item.id" class="items">
                    <div class="itemCategory"></div>
                    {{ item.title }}
                </div>
            </div>
            <div class="addItemBox">
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
            contents:[
                {
                    'id':1,
                    'title': 'Apple Watch',
                    'category': 'smartwatch',
                },
                {
                    'id':2,
                    'title': 'iPad',
                    'category': 'tablet',
                },
                {
                    'id':3,
                    'title': 'Macbook',
                    'category': 'laptop',
                },
                {
                    'id':4,
                    'title': 'iPhone',
                    'category': 'phone',
                }
            ]
        }
    },
    methods:{
        addItem(){
            alert('you clicked the add button');
        }
    },
};
</script>

<style>
#mainBar{
    width:100vw;
    height:50px;
    background-color: rgb(214, 82, 5);
    box-shadow: 0px 6px 7px #c1c1c1;
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
    height: calc(100vh - 50px);
    background: linear-gradient(0deg, #bdbdbd, transparent)
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
#listButton:active svg,#gridButton:active svg{
    width: 14px;
    height: 14px;
    color:#d65205;
}
.profile{
    display:flex;
    align-items: center;
}
.profile svg{
    color:white;
}
.photo{
    background-color: white;
    border-radius:25px;
    width:40px;
    height: 40px;
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

.items:hover{
  box-shadow: 5px 5px 5px #dedede, -5px -5px 5px white;  
}

.itemCategory{
    width:75px;
    height:75px;
    margin-bottom:5px;
}

</style>