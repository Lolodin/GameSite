<template>
    <div>
        <form id="reg">
            <label>email</label>
            <input v-model="email" type="text" name="email" value="email">
            <br>
            <br>
            <label>password</label>
            <input v-model="password" type="text" name="name" value="password">
        </form>
        <img v-if="activeButton" @click="sendRegData" src="/svg/sendButton.svg">
        <img v-else @click="sendRegData" src="/svg/sendButton2.svg">

    </div>
</template>

<script>
export default {
    methods: {
        async  sendRegData() {
            if (this.activeButton) {
                this.activeButton = false
                setTimeout(()=>this.activeButton = true, 500)
            }
            if (localStorage.getItem("token") != null) {
                alert("Вы уже авторизованы на сайте")
                return
            }

            let data = {"email" : this.email, "password": this.password}

            let res =  await fetch('api/sanctum/token', {
                headers: {
                    'Content-Type': 'application/json'},
                method: "POST",
                body: JSON.stringify(data)
            })
            let response = await res.json()
            localStorage.setItem("token", response.token)
            console.log( localStorage.getItem("token"), "local")

        },



    },
    name: "LoginComponent",
    data() {
        return {
            activeButton:true,
            email: "Ваш email",
            password: "Ваш пароль",

        }
    }
}
</script>

<style scoped>

input {
    display: block;
    float: right;
}
form {

    margin-left: auto;
    margin-right: auto;
    width: 270px;
    color: #b05610;
    margin-bottom: 50px;
}

</style>
