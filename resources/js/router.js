import RegisterComponent from "./components/RegisterComponent.vue";
import LoginComponent from "./components/LoginComponent.vue";
import card from "./components/card.vue";

export default {
    mode: 'history',
    routes: [
        {
            path: '/news',
            component: card,
        },
        {
            path: '/login',
            component: LoginComponent
        },
        {
            path: '/registration',
            component: RegisterComponent
        }
    ]
}
