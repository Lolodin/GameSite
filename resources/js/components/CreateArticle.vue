<template>
    <div class="form">
        <label style="padding-left: 190px">Заголовок</label>
        <br>
        <input v-model="title" type="text">
        <br>
        <label>Текст</label>
        <br>
        <textarea @select="selectOn" id="area" v-model="body"></textarea>
        <h1 @click="insertBold" @>/B/</h1>
        <div v-html="body"></div>
        <img @click="sendData" src="/svg/sendButton.svg">
    </div>
</template>

<script>
import Header from "../header.js"

export default {
    name: "CreateArticle",
    methods: {
        sendData() {
            let token = window.localStorage.getItem('token')
            let headers = Header(token).headers
            let link = 'api/articles'
            let body = {title: this.title, body: this.body}
            let request = fetch(link, {
                headers: headers,
                method: 'POST',
                body: JSON.stringify(body)
            })
            request.then((result) => {
                if (result.status === 201) {
                    alert('Статья добавлена')
                }
            })


        },
        selectOn() {
           let s = area.selectionStart
           let e = area.selectionEnd
            this.selectEnd = e
            this.selectStart = s
        },
        insertBold() {
            let selected = area.value.slice(this.selectStart, this.selectEnd)
            area.setRangeText(`<div class="bold">${selected}</div>`)
        }
    },
    data() {
        return {
            title: "",
            body: "",
            selectStart:0,
            selectEnd:0
        }
    }
}
</script>

<style scoped>
label {
    padding-left: 200px;


}

.form {
    width: 400px;
    margin-left: auto;
    margin-right: auto;
}

input {
    width: 400px;
}

textarea {
    width: 400px;
    height: 600px;
}
.bold {
    font-weight: bolder;
    display: inline;
}

</style>
