<template>


    <div class="main">
        <div id="intro">⠀<div class="bold">Endor</div> - задумывается как 2D Top-Down MMO с бесшовным бесконечно-генерируемым миром в средневековом сеттинге.
      <br>
    ⠀На данный момент идет работа над боевой системой, подробности будут в новостном разделе сайта.
            <br>
            ⠀По технической части: сервер разрабатывается на <div class="bold">Golang</div>, клиент на js, в дальнейшем, клиент возможно будет переписан на Go.


            <br>
    <div><img class="absolut" src="/img/monk.gif"></div>
    <br>
    <div><img class="absolut" src="/img/sc.png"></div>
    <br>
    <div><img class="absolut" src="/img/sc2.png"></div>
    ⠀Изначально планировалось создать изометрический клиент, но в итоге я остановился на top-down варианте т.к. изометрию трудно поддерживать, если у тебя нет бесплатного художника, в будущем возможно будет
    два клиента, для изометрии и для top-down.
            <br>
            ⠀Что уже реализовано:
           <div class="list"> <ul>
                <li>Генератор мира на основе шума Перлина</li>
                <li>Регистрация\Авторизация игроков</li>
                <li>Передвижение игрока</li>
                <li>Система коллизий</li>
                <li>Генератор игровых объектов</li>
            </ul>
            Скоро попробую выкатить полноценный RoadMap
           </div>
</div>



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
img.absolut {
    width: 500px;
    left: 50%;


}
.bold {
    font-weight: bold;
    display: inline;
}
.list{
    display: inline;
}
</style>
