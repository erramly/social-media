<script setup>
import { defineProps } from "vue";
import { useFriendRequest } from "@/composables/useFriendRequest";
defineProps(["frinds"]);

const { acceptFriendRequest } = useFriendRequest();

const handleAcceptFriend = (friend_id, status) => {
    acceptFriendRequest(friend_id, status);
};

</script>

<template>
    <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Friends request</h2>
        </div>
        <div v-if="frinds.length == 0">not friends request</div>
        <!--cards-->
        <div v-if="frinds.length > 0" class="space-y-4">
            <!--card-->
            <div
                class="grid grid-cols-[50%_50%] justify-between gap-4 w-full"
                v-for="friend_request in frinds"
                :key="friend_request.id"
            >
                <div class="flex gap-[8%]">
                    <span
                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                    >
                        <img
                            class="aspect-square h-full w-full"
                            alt="User Avatar"
                            :src="friend_request.info_friend.profile_photo_url"
                        />
                    </span>
                    <div>
                        <p class="font-bold truncate">
                            {{ friend_request.info_friend.name }}
                        </p>
                        <p class="text-sm text-gray-500 truncate w-[80%]">
                            {{ friend_request.info_friend.email }}
                        </p>
                    </div>
                </div>
                <!--two button-->
                <div class="flex items-center justify-center gap-4">
                    <button
                        class="button decline text-black bg-[#e4e6eb] inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                        @click="
                            handleAcceptFriend(
                                friend_request.info_friend.id,
                                'declined'
                            )
                        "
                    >
                        Declined
                    </button>
                    <button
                        class="bg-blue-600 text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2"
                        @click="
                            acceptFriendRequest(
                                friend_request.info_friend.id,
                                'accepted'
                            )
                        "
                    >
                        Accept
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
