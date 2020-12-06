<template>
<div class = "footer">
    <router-link class="string" to="/">Главная</router-link> <span id = "pol">Все права защищены ©</span> <br>
    <router-link class="string" to="/news">Новости</router-link><br>
    <router-link class="string" to="/registration">Регистрация</router-link>
</div>
</template>

<script>
export default {
name: "Footer"
}
</script>

<style scoped >
.footer {
    margin-left: auto;
    margin-right: auto;

    width: 710px;
    margin-top:5px;
    border-top: 1px solid #a59144;
}
.string {
padding-left: 50px;
font-palette: dark;
color: #b05610;

}
#pol {
padding-left: 400px;
color: #b05610;
}
</style>
