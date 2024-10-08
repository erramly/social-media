<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useFriendRequest } from "@/composables/useFriendRequest";

import { onMounted, defineProps } from "vue";

const props = defineProps(["friends_request"]);

onMounted(() => {
    console.log(props.friends_request);
});


const { acceptFriendRequest } = useFriendRequest();

const handleAcceptFriend = (friend_id, status) => {
    acceptFriendRequest(friend_id, status);
};
</script>

<template>
    <AppLayout>
        <div class="container">
            <h1>friends request</h1>
            <div class="recommendations">
                <div
                    class="friend-card"
                    v-for="(friend, index) in friends_request"
                    :key="index"
                >
                    <img
                        :src="friend.info_friend.profile_photo_url"
                        alt="Alex Johnson"
                    />
                    <div class="friend-info">
                        <h2 class="friend-name">
                            {{ friend.info_friend.name }}
                        </h2>
                        <p class="friend-username">
                            {{ friend.info_friend.email }}
                        </p>
                        <div class="button-group">
                            <button class="button add-friend" @click="handleAcceptFriend(friend.info_friend.id,'accepted')">
                                Add Friend
                            </button>
                            <button class="button decline" @click="handleAcceptFriend(friend.info_friend.id,'declined')">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped>
body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 2rem;
    font-weight: bold;
}
.recommendations {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}
.friend-card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}
.friend-card:hover {
    transform: translateY(-5px);
}
.friend-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.friend-info {
    padding: 20px;
}
.friend-name {
    font-size: 18px;
    font-weight: bold;
    margin: 0 0 5px 0;
}
.friend-username {
    color: #65676b;
    font-size: 14px;
    margin: 0 0 15px 0;
}
.button-group {
    display: flex;
    gap: 10px;
}
.button {
    flex: 1;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.add-friend {
    background-color: #1877f2;
    color: white;
}
.add-friend:hover {
    background-color: #166fe5;
}
.decline {
    background-color: #e4e6eb;
    color: #050505;
}
.decline:hover {
    background-color: #d8dadf;
}
</style>
