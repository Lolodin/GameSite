<template>
<scroll-card ></scroll-card>
</template>

<script>

import ScrollCard from "./ScrollCard.vue";
export default {
name: "Home",
components: {ScrollCard},
data() {
return {
    post: {
        title: "Endor",
        text: "Это игра с динамично расширяемым миром с средневековым сеттингом, которая погрузит"
    }
}
}
}
</script>

<style scoped>

</style>
