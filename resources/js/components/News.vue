<template>
    <div>
    <div v-for="(article, index) in articles">

    <card v-bind="article"></card>
    </div>
    </div>

</template>

<script>
import Card from "./Card.vue";
export default {
name: "News",
    components: {Card},
   methods: {

    //return obj
      getArticles() {
    let link = '/api/articles'
    let request = fetch(link, {
        headers: {
            'Content-Type': 'application/json'
        },
        method: "GET"
    })
    request.then((result) =>{
            result.json().then((ar)=> {

                this.articles =  ar
            })

        }
    )

}
   },
    data() {
    return {
        articles: []
    }
    },
    created: function () {
    this.getArticles()
    }



}

</script>

<style>
.articleLink {
    color: #814a21;

}

</style>
