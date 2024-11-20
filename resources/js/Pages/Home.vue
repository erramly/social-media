<script setup>
import { defineProps, ref } from "vue";

import AppLayout from "@/Layouts/AppLayout.vue";
import postCard from "@/components/postCard.vue";
import showFriendsRequest from "@/components/friends/showFriendsRequest.vue";
import friendsRecommendComponent from "@/components/friends/friendsRecommend.vue";
import CreatePost from "@/components/modals/CreatePost.vue";
import storycards from "@/components/story/storycards.vue";

const isModalOpen = ref(false);
const closeModal = () => {
    isModalOpen.value = isModalOpen.value ? false : true;
};
const props = defineProps([
    "posts",
    "friends_request",
    "user",
    "friendsRecommend",
    "user_stories",
    "friend_stories",
]);
</script>

<template>
    <AppLayout title="Home">
        <Transition name="slide-fade">
            <CreatePost v-if="isModalOpen" @close="closeModal"
        /></Transition>
        <div class="flex min-h-screen bg-gray-100">
            <main class="flex-1 p-6 w-full">
                <div class="2xl:grid 2xl:grid-cols-3 2xl:gap-6 w-full">
                    <div class="col-span-2 space-y-6">
                        <storycards :user_stories="user_stories" :friend_stories="friend_stories" />

                        <div
                            class="flex items-center w-full m-auto bg-white p-6 rounded-xl"
                        >
                            <img
                                :src="user.profile_photo_url"
                                alt="profile photo"
                                class="w-10 h-10 rounded-full mr-4 object-cover"
                            />
                            <input
                                @click="closeModal"
                                class="flex w-full mr-4 h-10 rounded-full border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                :placeholder="
                                    'What are you thinking ' +
                                    $page.props.auth.user.name +
                                    ' ?'
                                "
                                type="search"
                            />
                            <!--=================================================================================================================================================================================================================================================================================================================================================================================-->
                        </div>
                        <div style="margin-bottom: 3rem">
                            <!--posts card-->
                            <postCard :posts="posts" :user="user" />
                        </div>
                    </div>
                    <aside class="space-y-6 max-2xl:hidden">
                        <showFriendsRequest
                            :frinds="friends_request"
                        ></showFriendsRequest>
                        <friendsRecommendComponent
                            :friendsRecommend="friendsRecommend"
                        ></friendsRecommendComponent>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h2 class="text-lg font-bold mb-4">
                                Profile Activity
                            </h2>
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                                >
                                    <img
                                        class="aspect-square h-full w-full"
                                        alt="Profile"
                                        src="https://v0.dev/placeholder-user.jpg"
                                    />
                                </span>
                                <div>
                                    <p class="font-bold">+1,158 Followers</p>
                                    <p class="text-sm text-green-500">
                                        +23% vs last month
                                    </p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-500">
                                You gained a substantial amount of followers
                                this month!
                            </p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h2 class="text-lg font-bold mb-4">
                                Upcoming Events
                            </h2>
                            <div class="flex items-center gap-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-5 h-5 text-gray-500"
                                >
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect
                                        width="18"
                                        height="18"
                                        x="3"
                                        y="4"
                                        rx="2"
                                    ></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <div>
                                    <p class="font-bold">Friend's Birthday</p>
                                    <p class="text-sm text-gray-500">
                                        Jun 25, 2028
                                    </p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </main>
        </div>
    </AppLayout>
</template>
<style scoped>
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
:root {
    --background: 0 0% 100%;
    --foreground: 240 10% 3.9%;
    --card: 0 0% 100%;
    --card-foreground: 240 10% 3.9%;
    --popover: 0 0% 100%;
    --popover-foreground: 240 10% 3.9%;
    --primary: 240 5.9% 10%;
    --primary-foreground: 0 0% 98%;
    --secondary: 240 4.8% 95.9%;
    --secondary-foreground: 240 5.9% 10%;
    --muted: 240 4.8% 95.9%;
    --muted-foreground: 240 3.8% 45%;
    --accent: 240 4.8% 95.9%;
    --accent-foreground: 240 5.9% 10%;
    --destructive: 0 72% 51%;
    --destructive-foreground: 0 0% 98%;
    --border: 240 5.9% 90%;
    --input: 240 5.9% 90%;
    --ring: 240 5.9% 10%;
    --chart-1: 173 58% 39%;
    --chart-2: 12 76% 61%;
    --chart-3: 197 37% 24%;
    --chart-4: 43 74% 66%;
    --chart-5: 27 87% 67%;
    --radius: 0.5rem;
}
body {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
img[src="/placeholder.svg"],
img[src="/placeholder-user.jpg"] {
    filter: sepia(0.3) hue-rotate(-60deg) saturate(0.5) opacity(0.8);
}
</style>
