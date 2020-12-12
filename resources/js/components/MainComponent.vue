<template>
    <div >
        <my-header></my-header>
        <scroll-card></scroll-card>
        <Footer></Footer>




    </div>
</template>

<script>
import header from "./header.vue"
import ScrollCard from "./ScrollCard.vue";
import Footer from "./Footer";
    export default {

        components: {
            Footer,
           "my-header": header,
           "scroll-card": ScrollCard


        },
        methods: {
        },
        mounted: function () {
            this.$on('login',function () {this.$forceUpdate()})
        },

    }
</script>
<!--/*background-color: #f2e4bf;*/-->
<style>
body{
    background-color: #f2e4bf;
    min-width: 775px;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;


}

</style>
