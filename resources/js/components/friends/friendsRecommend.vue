<script setup>
import { defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";

defineProps(["friendsRecommend"]);

const sendToFriendRequest = (friend_id) => {
    Inertia.post(`/friend-request/send/${friend_id}`);
};
</script>

<template>
    <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">recommend friend</h2>
        </div>
        <!--cards-->
        <div class="space-y-4">
            <!--card-->
            <div
                class="flex items-center gap-4"
                v-for="recommend in friendsRecommend"
                :key="recommend.id"
            >
                <span
                    class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                >
                    <img
                        class="aspect-square h-full w-full"
                        alt="User Avatar"
                        :src="recommend.profile_photo_url"
                    />
                </span>
                <div>
                    <p
                        class="font-bold overflow-hidden w-[200px] truncate whitespace-nowrap"
                    >
                        {{ recommend.name }}
                    </p>
                    <p
                        class="text-sm overflow-hidden w-[200px] text-gray-500 truncate whitespace-nowrap"
                    >
                        {{ recommend.email }}
                    </p>
                </div>
                <button
                    class="bg-blue-600 text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 ml-auto"
                    @click="sendToFriendRequest(recommend.id)"
                >
                    send
                </button>
            </div>
        </div>
    </div>
</template>
