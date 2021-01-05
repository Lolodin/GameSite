<template>
    <div>
        <form id="reg">
            <label>Email</label>
            <input @change="checkLoginData" v-model="email" type="email" name="email" value="">
            <br>
            <span class="error" v-if="validEmail!= ''">{{ validEmail }}</span>
            <br>
            <br>
            <label>Password</label>
            <input @change="checkLoginData" v-model="password" type="password" name="name" value="">
            <span class="error" v-if="validPassword!= ''">{{ validPassword }}</span>

        </form>
        <img v-if="activeButton" @click="sendRegData" src="/svg/sendButton.svg">
        <img v-else @click="sendRegData" src="/svg/sendButton2.svg">

    </div>
</template>

<script>
export default {
    methods: {
        async sendRegData() {
            if (this.activeButton) {
                this.activeButton = false
                setTimeout(() => this.activeButton = true, 500)
            }
            let ch = this.checkLoginData()
            if (ch == false) {
                return
            }

            if (localStorage.getItem("token") != null) {

                localStorage.clear()


            }

            let data = {"email": this.email, "password": this.password}

            let res = await fetch('api/sanctum/token', {
                headers: {
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(data)
            })
            let response = await res.json()
            localStorage.setItem("token", response.token)
            let redirect = '/login'
            document.location.href = redirect

        },
        //return bull
        checkLoginData() {
            let re = new RegExp("[a-zA-Z0-9]+@[a-zA-Z0-9]+\\.[a-zA-Z0-9]+")
            let result = true
            if (!re.test(this.email)) {
                this.validEmail = "Email некорректный, проверьте правильность заполнения"
                result = false
            } else {
                this.validEmail = ""
            }
            if (this.password.length < 5) {
                this.validPassword = "Пароль слишком короткий"
                result = false
            } else {
                this.validPassword = ""
            }
            return result

        },
        Logout() {
            let link = '/api/logout';
            let token = window.localStorage.getItem('token')
            let response = fetch(link, {
                headers: {
                    "Authorization": "Bearer " + token,
                    'Content-Type': 'application/json'
                },
                method: "GET",
            })
            response.then((res) => {
                res.json().then((result) => {

                })
            })

    }


    },
    name: "LoginComponent",
    data() {
        return {
            validPassword: '',
            validEmail: '',
            activeButton: true,
            email: "",
            password: "",

        }
    },
}
</script>

<style scoped>

input {
    display: block;
    float: right;
}

.error {
    float: left;
    color: red;

}

form {

    margin-left: auto;
    margin-right: auto;
    width: 270px;
    color: #b05610;
    margin-bottom: 50px;
}

</style>
