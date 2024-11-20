<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useFriendRequest } from "@/composables/useFriendRequest";

import { onMounted, defineProps } from "vue";

const props = defineProps([
    "friends_request",
    "friendsRecommend",
    "userFriends",
]);

const { acceptFriendRequest, sendToFriendRequest } = useFriendRequest();

const handleAcceptFriend = (friend_id, status) => {
    acceptFriendRequest(friend_id, status);
};
//send frend id

const handlesendToFriend = (friend_id) => {
    sendToFriendRequest(friend_id);
};
</script>

<template>
    <AppLayout>
        <div class="container">
            <h1>your frinds</h1>
            <div class="recommendations">
                <div
                    class="friend-card"
                    v-for="(friend, index) in userFriends"
                    :key="index"
                >
                    <img :src="friend.profile_photo_url" alt="Alex Johnson" />
                    <div class="friend-info">
                        <h2 class="friend-name">
                            {{ friend.name }}
                        </h2>
                        <p class="friend-username">
                            {{ friend.email }}
                        </p>
                        <a
                            :href="'/messages/' + friend.id"
                            class="button-group"
                        >
                            <button
                                class="button add-friend flex justify-center gap-2"
                            >
                                message
                                <svg
                                    data-v-aa4f01fa=""
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="#fff"
                                    height="20px"
                                    width="20px"
                                    version="1.1"
                                    id="Capa_1"
                                    viewBox="0 0 495.003 495.003"
                                    xml:space="preserve"
                                >
                                    <g data-v-aa4f01fa="" id="XMLID_51_">
                                        <path
                                            data-v-aa4f01fa=""
                                            id="XMLID_53_"
                                            d="M164.711,456.687c0,2.966,1.647,5.686,4.266,7.072c2.617,1.385,5.799,1.207,8.245-0.468l55.09-37.616   l-67.6-32.22V456.687z"
                                        ></path>
                                        <path
                                            data-v-aa4f01fa=""
                                            id="XMLID_52_"
                                            d="M492.431,32.443c-1.513-1.395-3.466-2.125-5.44-2.125c-1.19,0-2.377,0.264-3.5,0.816L7.905,264.422   c-4.861,2.389-7.937,7.353-7.904,12.783c0.033,5.423,3.161,10.353,8.057,12.689l125.342,59.724l250.62-205.99L164.455,364.414   l156.145,74.4c1.918,0.919,4.012,1.376,6.084,1.376c1.768,0,3.519-0.322,5.186-0.977c3.637-1.438,6.527-4.318,7.97-7.956   L494.436,41.257C495.66,38.188,494.862,34.679,492.431,32.443z"
                                        ></path>
                                    </g>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" v-if="friends_request.length > 0">
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
                            <button
                                class="button add-friend"
                                @click="
                                    handleAcceptFriend(
                                        friend.info_friend.id,
                                        'accepted'
                                    )
                                "
                            >
                                Add Friend
                            </button>
                            <button
                                class="button decline"
                                @click="
                                    handleAcceptFriend(
                                        friend.info_friend.id,
                                        'declined'
                                    )
                                "
                            >
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" v-if="friendsRecommend.length > 0">
            <h1>friends Recommend</h1>
            <div class="recommendations">
                <div
                    class="friend-card"
                    v-for="(friend, index) in friendsRecommend"
                    :key="index"
                >
                    <img :src="friend.profile_photo_url" alt="Alex Johnson" />
                    <div class="friend-info">
                        <h2 class="friend-name">
                            {{ friend.name }}
                        </h2>
                        <p class="friend-username">
                            {{ friend.email }}
                        </p>
                        <div class="button-group">
                            <button
                                class="button add-friend"
                                @click="handlesendToFriend(friend.id)"
                            >
                                send
                            </button>
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
