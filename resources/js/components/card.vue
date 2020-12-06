<template>

    <div class="text">
        <br>
    <h1 class="title">{{title}}</h1>
    <br>
    {{
        text
    }}
        <br>
        <br>
        <img src="/img/picas.png" style="margin-right: 120px">
    </div>


</template>

<script>
export default {
name: "card",
    props: {
    title : String,
    text: String
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
    display: inline;
    padding-left: 270px;

}

</style>
