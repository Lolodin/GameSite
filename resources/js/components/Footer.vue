<template>
    <div class="footer">
        <router-link class="string" to="/home">Главная</router-link>
        <span id="pol">Все права защищены ©</span> <br>
        <router-link class="string" to="/news">Новости</router-link>
        <span id="pol2">По всем вопросам пишите на <a href="mailto:ilii4@yandex.ru">ilii4@yandex.ru</a></span>
        <br>
        <router-link class="string" to="/login">Войти</router-link>
    </div>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
.footer {
    margin-left: auto;
    margin-right: auto;

    width: 710px;
    margin-top: 5px;
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
#pol2 {
    padding-left: 250px;
    color: #b05610;
}
span a{
    color: #b05610;
}
</style>
