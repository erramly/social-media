import login from "../components/logingggggg.vue";
import signup from "../components/signupgggggggggg.vue";
import HomeView from "../views/homeView.vue";
import messagesView from "../views/messagesView.vue";
import profileView from "../views/profile/profileView.vue";
const routes = [
    { path: "/login", component: login },
    { path: "/signup", component: signup },
    { path: "/", component: HomeView },
    { path: "/messages", component: messagesView },
    { path: "/user/:id", component: profileView },
];

export default routes;
