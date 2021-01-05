<template>
    <div class="main">
<div id="intro">Endor - является идеей создания бесконечного и бесшовного мира, каждый уголок которого можно будет посетить без каких либо ограничений </div>

    </div>
</template>

<script>

import ScrollCard from "./ScrollCard.vue";
export default {
name: "Home",
components: {ScrollCard},
data() {
return {

}
}
}
</script>

<style scoped>
h1 {
    display: inline;
    margin-left: auto;
    margin-right: auto;
}
.main {
    margin-left: auto;
    margin-right: auto;
}
#intro {
width: 600px;
    margin-left: auto;
    margin-right: auto;
}
</style>
