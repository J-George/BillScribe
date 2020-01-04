<template>
    <div>
        <div id="mainBar">
            <h4 class="my-1 mx-2">BillScribe</h4>
            <div class="functions">
                <button>list</button>
                <button>Grid</button>
                <input type="text">
            </div>
            <div class="profile">
                <p class="my-1 mx-2">Profile</p>
            </div>
        </div>
        <div id="contents">

        </div>
    </div>    
</template>

<script>
export default {
    
}
</script>

<style>
#mainBar{
    width:100vw;
    height:40px;
    background-color: rgb(214, 82, 5);
    box-shadow: 0px 6px 7px #c1c1c1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#mainBar h4{
    color:white;
}
#contents{
    height: calc(100vh - 40px);
    background: linear-gradient(0deg, #bdbdbd, transparent)
}
</style>