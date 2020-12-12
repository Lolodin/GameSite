<template>
    <div>
        <img id="hd" src="/svg/logov2.svg">

    <div class="up_menu">

        <router-link to="/news"> <img  class="menubutton" src="/svg/buttonmenuNews.svg"></router-link>
        <router-link v-if="name==undefined" to="/login"><img  class="menubutton" src="/svg/buttonmenuLogin.svg"></router-link>
        <router-link to="/plans"> <img  class="menubutton" src="/svg/buttonmenumain.svg"></router-link>
        <router-link v-if="name!=undefined" to="" > <img  @click="Logout" class="menubutton" src="/svg/buttonmenuExit.svg"></router-link>

    </div>

        <div v-if="name!=undefined"  v-model="name"  id="hello">Добро пожаловать {{name}}</div>
    </div>
</template>
<script>



export default {
    created:
         function () {
            let link = '/api/name';
            let token = window.localStorage.getItem('token')
            let response = fetch(link, {
                headers: {
                    "Authorization": "Bearer "+token,
                    'Content-Type': 'application/json'},
                method: "GET",
            })
            response.then((res)=>{
                if (res.error != undefined) {
                    this.name= undefined
                }
                let r = res.json().then((result)=> {
                    this.name = result.name
                    console.log(this.name, result)
                })

                console.log(this.name, r)
            })

        },


    methods: {
        Logout() {
            let link = '/api/log';
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
                    alert(result.user)
                })
            })
        }
    },
        props: {},
        data() {
            return {
                name: undefined
            }
        }
    }
</script>

<style scoped>
.menubutton {
    height: 100px;
    width: 200px;
    /*border: 2px solid #000;*/
    /*border-collapse: collapsed;*/
}
.up_menu {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;

}
#hd {
    width: 900px;
    height: 400px;
    border-radius: 50em;
}
#hello {
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 550px;



}


</style>
