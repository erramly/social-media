<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { defineProps } from "vue";
import postCard from "@/components/postCard.vue";
let props = defineProps(["posts", "user", "frindsCount"]);

console.log(props.posts);
console.log(props.user);
console.log(props.frindsCount);

let handlimgae = (e) => {
    return "http://localhost:8000/storage/" + e;
};
</script>
<template>
    <AppLayout>
        <section class="profile-content">
            <div class="cover-photo">
                <div class="profile-photo">
                    <img :src="user.profile_photo_url" alt="" />
                </div>
            </div>
            <div class="profile-info">
                <h1 class="profile-name">{{ user.name }}</h1>
                <p class="friend-count">{{ frindsCount }} friends</p>
                <div class="profile-actions">
                    <button
                        class="add-friend"
                        v-if="!user.id != $page.props.auth.user.id"
                    >
                        Add Friend
                    </button>
                    <a :href="`/chatify/${user.id}`">
                        <button
                            class="message"
                            v-if="user.id != $page.props.auth.user.id"
                        >
                            Message
                        </button>
                    </a>
                    <button
                        class="more"
                        v-if="!user.id == $page.props.auth.user.id"
                    >
                        •••
                    </button>
                </div>
                <nav class="profile-nav">
                    <a href="#"
                        >Posts</a
                    >
                </nav>
            </div>
            <!--posts card-->
            <postCard :posts="posts" :user="user" />
        </section>
    </AppLayout>
</template>

<style>
/* Reset and base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    line-height: 1.6;
}
/* Header styles */
header {
    background-color: #ffffff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
}
.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 8px 16px;
}
.logo {
    font-size: 24px;
    font-weight: bold;
    color: #1877f2;
}
.search-bar {
    flex-grow: 1;
    margin: 0 16px;
}
.search-bar input {
    width: 100%;
    max-width: 240px;
    padding: 8px;
    border: none;
    border-radius: 20px;
    background-color: #f0f2f5;
}
.nav-icons a {
    color: #65676b;
    text-decoration: none;
    padding: 8px;
    margin-left: 8px;
}
/* Main content styles */
main {
    display: flex;
    max-width: 1200px;
    margin: 0 auto 0;
    padding: 20px;
}
.left-sidebar,
.right-sidebar {
    width: 250px;
    background-color: #ffffff;
    border-radius: 8px;
    padding: 16px;
    margin-top: 20px;
}
.profile-content {
    flex-grow: 1;
    margin: 0 20px;
}
.cover-photo {
    height: 300px;
    background-color: #1877f2;
    border-radius: 8px 8px 0 0;
    position: relative;
}
.profile-photo {
    width: 168px;
    height: 168px;
    border-radius: 50%;
    border: 4px solid #ffffff;
    position: absolute;
    bottom: -22px;
    left: 20px;
    background-color: #e4e6eb;
    overflow: hidden;
}
.profile-info {
    background-color: #ffffff;
    border-radius: 0 0 8px 8px;
    padding: 20px;
    padding-top: 60px;
}
.profile-name {
    font-size: 32px;
    font-weight: bold;
}
.friend-count {
    color: #65676b;
    margin-bottom: 16px;
}
.profile-actions {
    display: flex;
    gap: 8px;
    margin-bottom: 16px;
}
.profile-actions button {
    padding: 8px 16px;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
}
.add-friend {
    background-color: #1877f2;
    color: #ffffff;
}
.message {
    background-color: #e4e6eb;
    color: #050505;
}
.profile-nav {
    border-top: 1px solid #e4e6eb;
    padding-top: 16px;
}
.profile-nav a {
    color: #65676b;
    text-decoration: none;
    margin-right: 16px;
    font-weight: bold;
}
/* Responsive styles */
@media (max-width: 1024px) {
    .left-sidebar,
    .right-sidebar {
        display: none;
    }
    .profile-content {
        margin: 0;
    }
}
@media (max-width: 768px) {
    .search-bar {
        display: none;
    }
    .profile-photo {
        width: 128px;
        height: 128px;
    }
    .profile-name {
        font-size: 24px;
    }
}
</style>
