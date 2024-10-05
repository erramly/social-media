<script setup>
import { defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";

defineProps(["frinds"]);

const acceptFriendRequest = (friend_id, status) => {
    Inertia.post("/friend-request/accept", {
        friend_id: friend_id,
        status: status,
    });
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
                class="flex items-center gap-4"
                v-for="friend_request in frinds"
                :key="friend_request.id"
            >
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
                    <p class="font-bold">
                        {{ friend_request.info_friend.name }}
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ friend_request.info_friend.email }}
                    </p>
                </div>
                <button
                    class="bg-red-600 text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                    @click="
                        acceptFriendRequest(
                            friend_request.info_friend.id,
                            'declined'
                        )
                    "
                >
                    declined
                </button>
                <button
                    class="bg-blue-600 text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
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
</template>
