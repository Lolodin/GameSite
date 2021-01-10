<template>
<div>
    <div class="text">
        <br>
        <h1 class="title">{{ articles.title }}</h1>
        <br>
        <div v-html="articles.body"></div>
        <br>


    </div>
</div>
</template>

<script>
export default {
    name: "ArticlePage",
    methods: {

        //return obj
        getArticles() {
            let link = '/api/articles/'+ this.$route.params.id
            let request = fetch(link, {
                headers: {
                    'Content-Type': 'application/json'
                },
                method: "GET"
            })
            request.then((result) => {
                    result.json().then((ar) => {
                        this.articles = ar
                    })

                }
            )

        }
    },
    data() {
        return {articles: undefined}
    },
    created() {
        this.getArticles()
    }
}
</script>

<style scoped>
.text {

    width: 550px;
    padding-left: 80px;
    margin-left: 27.4px;


}

.title {
    text-align: center;
    width: 490px;



}

img {



}
</style>
