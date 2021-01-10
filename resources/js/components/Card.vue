<template>
<div>
    <div class="text">
        <br>
        <h1 class="title">{{ title }}</h1>
        <br>
        <div v-html="preview"></div>
        <br>
        <router-link class="articleLink" v-bind:to="'/articles/' +id">Читать полностью</router-link>
        <br>
        <br>

    </div>
    <img src="/img/picas.png">
</div>

</template>

<script>
export default {
    name: "card",
    methods: {
      formatBody() {
          this.preview = this.preview.split('\n').join('<br>')
      }
    },
    props: {
        id: String,
        title: String,
        body: String,
        preview: String
    },
    created: function() {
        this.formatBody()
    }

}
</script>

<style scoped>
.text {

    width: 650px;
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
