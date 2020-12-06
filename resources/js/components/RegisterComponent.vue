<template>
<div>
    <form id="reg">
        <label for="1" >Ваш логин:</label>
        <input id="1" v-model="name" type="text" name="name" value="name">
        <br>
        <br>
        <label for="2">Ваш email:</label>
        <input id="2" v-model="email" type="text" name="email" value="email">
        <br>
        <br>
        <label for="3">Ваш пароль:</label>
        <input id="3" v-model="password" type="text" name="name" value="password">
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

          let data = {"name" : this.name, "email" : this.email, "password": this.password}
          let res =  await fetch('api/sanctum/register', {
              headers: {
                      'Content-Type': 'application/json'},
              method: "POST",
              body: JSON.stringify(data)
          })
        let response = await res.json()
        if (response.error == undefined) {
                let redirect = '/login'
            document.location.href = redirect
        } else {
            alert("Данные не валидны")
        }

      },



    },
name: "RegisterComponent",
    data() {
    return {
        activeButton:true,
        name: "",
        email: "",
        password: "",

    }
    }
}
</script>

<style scoped>
label {
    float:left;
    height: 20px;

}
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
button {
    margin-left: 300px;
}



</style>
