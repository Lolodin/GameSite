<template>
    <div >
        <br>
        <div class="scrolls">
            <img class="headscrolls" src="img/content_header.png">
            <div class="content">
                <router-view></router-view>




            </div>
            <img class="footerscrolls2" src="img/content_bot.png">



        </div>


    </div>
</template>

<script>
import card from "./card.vue";
export default {
name: "ScrollCard",
components: {
    card
},
data() {
    return {
        post: {
            title: 'Post',
            text: 'Content'
        }
    }
}
}
</script>


<style scoped>
body{
    background-color: #f2e4bf;
}
h1 {
    padding-left: 45%;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;


}
.headscrolls {
    margin-left: auto;
    margin-right: auto;
    width: 700px;
    height: 49px;

}

/*.scrolls {*/

/*    border: 2px solid #000;*/
/*    border-collapse: collapsed;*/
/*}*/



.footerscrolls2 {
    margin-left: auto;
    margin-right: auto;
    width: 700px;

}
.content {
    background-image: url("/img/content_bg.png");
    background-position: 50%, 0%;
    background-repeat: repeat-y;
    width: 700px;
    margin-left: auto;
    margin-right: auto;


}

</style>

