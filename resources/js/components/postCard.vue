<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref } from "vue";

let comment = ref([]);
defineProps(["posts", "user"]);

function timeAgo(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffInSeconds = Math.floor((now - date) / 1000);

    const intervals = {
        year: 31536000, // 60 * 60 * 24 * 365
        month: 2592000, // 60 * 60 * 24 * 30
        week: 604800, // 60 * 60 * 24 * 7
        day: 86400, // 60 * 60 * 24
        hour: 3600, // 60 * 60
        minute: 60, // 60
        second: 1,
    };

    for (let key in intervals) {
        const interval = Math.floor(diffInSeconds / intervals[key]);
        if (interval >= 1) {
            return interval === 1 ? `1 ${key} ago` : `${interval} ${key}s ago`;
        }
    }

    return "just now"; // إذا كان الوقت الآن هو نفس التاريخ أو قريب جداً
}
function handlimg(url) {
    if (url) {
        if (url.startsWith("http://") || url.startsWith("https://")) {
            return url;
        }
        return "http://localhost:8000/storage/" + url;
    }
    return url;
}

const formatDate = (dateString) => {
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    };

    const date = new Date(dateString);
    return date.toLocaleString("en-MA", options);
};
const addLike = (post_id) => {
    Inertia.post(
        "/like/add",
        { post_id: post_id },
        {
            preserveScroll: true, // للحفاظ على التمرير الحالي
            only: ["posts"], // يقوم بتحديث البيانات الخاصة بالمنشورات فقط
            onSuccess: () => {
                console.log("تمت العملية بنجاح!");
            },
        }
    );
};
const addComment = (user_id, post_id, comment) => {
    console.warn(user_id, post_id, comment);

    Inertia.post(
        "/comment/add",
        {
            user_id: user_id,
            post_id: post_id,
            content: comment,
        },
        {
            preserveScroll: true,
            only: ["posts"],
            onSuccess: () => {
                console.log("تمت العملية بنجاح!");
            },
        }
    );
};

const removeComment = (comment_id) => {
    Inertia.post(
        "/comment/delete",
        {
            comment_id: comment_id,
        },
        {
            preserveScroll: true,
            onSuccess: () => {
                console.log("تمت العملية بنجاح!");
            },
        }
    );
};

const removePost = (Post_id) => {
    Inertia.post(
        "/post/remove",
        {
            Post_id: Post_id,
        },
        {
            preserveScroll: true,
            onSuccess: () => {
                console.log("تمت العملية بنجاح!");
            },
        }
    );
};

const showCommetsCards = (index) => {
    console.log(index);

    let commetEle = document.querySelectorAll(".comments-cards")[index];
    console.log(commetEle);
    commetEle.classList.toggle("comments-show");
};
</script>
<template>
    <div v-for="(post, index) in posts" :key="index">
        <div
            class="flex gap-2 p-4 bg-white rounded-md shadow mt-3"
            data-id="42"
        >
            <div class="flex-1" data-id="46">
                <div class="flex gap-4 mb-3 justify-between">
                    <div class="flex gap-4 mb-3">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                            data-id="43"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                data-id="44"
                                alt="User Avatar"
                                :src="post.user.profile_photo_url"
                            />
                        </span>
                        <div>
                            <a :href="`/profileshow/${post.user.id}`">
                                <p class="font-bold" data-id="47">
                                    {{ post.user.name }}
                                </p></a
                            >

                            <p
                                class="text-sm text-muted-foreground"
                                data-id="48"
                            >
                                {{ formatDate(post.updated_at) }}
                            </p>
                        </div>
                    </div>
                    <button
                        v-if="$page.props.auth.user.id == post.user.id"
                        @click="removePost(post.id)"
                        class="rounded-full group flex items-center justify-center focus-within:outline-red-500 float-end ml-2"
                    >
                        <svg
                            width="34"
                            height="34"
                            viewBox="0 0 34 34"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <circle
                                class="fill-red-50 transition-all duration-500 group-hover:fill-red-400"
                                cx="17"
                                cy="17"
                                r="17"
                                fill=""
                            />
                            <path
                                class="stroke-red-500 transition-all duration-500 group-hover:stroke-white"
                                d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z"
                                stroke="#EF4444"
                                stroke-width="1.6"
                                stroke-linecap="round"
                            />
                        </svg>
                    </button>
                </div>
                <p data-id="49">
                    {{ post.title }}
                </p>
                <p class="text-blue-500">{{ post.content }}</p>
                <img
                    v-if="post.image"
                    data-id="50"
                    :src="handlimg(post.image)"
                    class="w-full h-auto mt-2 rounded-md"
                    alt="Post Image"
                    width="400"
                    height="200"
                    style="aspect-ratio: 400 / 200; object-fit: cover"
                />
                <div
                    class="flex items-center justify-between mt-6 mb-4 text-sm text-muted-foreground"
                    data-id="51"
                >
                    <div
                        @click="addLike(post.id)"
                        class="flex items-center gap-2 cursor-pointer"
                        data-id="52"
                    >
                        <svg
                            id="Layer_1"
                            style="width: 20px; height: 20px"
                            data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 122.88 105.01"
                        >
                            <defs></defs>
                            <title>like</title>
                            <path
                                class="cls-1"
                                d="M4,43.36H32.37a4,4,0,0,1,4,4V101a4,4,0,0,1-4,4H4a4,4,0,0,1-4-4V47.39a4,4,0,0,1,4-4ZM62.16,6.3A7.36,7.36,0,0,1,66.23.65,8.14,8.14,0,0,1,71.79.34a15.36,15.36,0,0,1,5.3,2.71A26.21,26.21,0,0,1,86.81,21.9a57.41,57.41,0,0,1-.12,8.35q-.25,2.94-.76,6.15h20.2a21.58,21.58,0,0,1,9.1,2.33,14.7,14.7,0,0,1,5.6,4.92,12.55,12.55,0,0,1,2,7.51,18.1,18.1,0,0,1-1.82,6.93,21.82,21.82,0,0,1,.54,8.38,9.7,9.7,0,0,1-2.78,5.68,25.22,25.22,0,0,1-1.4,9.43,19.81,19.81,0,0,1-4.5,7,28.37,28.37,0,0,1-.9,5A17.3,17.3,0,0,1,109.5,99h0c-3.43,4.84-6.17,4.73-10.51,4.55-.61,0-1.26,0-2.26,0H57.39a19.08,19.08,0,0,1-8.86-1.78,21.13,21.13,0,0,1-7-6.06L41,94V48.15l2-.53c5.08-1.37,9.07-5.71,12.16-10.9a75.8,75.8,0,0,0,7-16.64V6.82l.06-.52Zm6.32-.78a2.15,2.15,0,0,0-1,1.57V20.46l-.12.77a82.31,82.31,0,0,1-7.61,18.24C56.4,45.09,52,49.91,46.37,52.14V93.07A14.6,14.6,0,0,0,50.93,97a14.14,14.14,0,0,0,6.46,1.21H96.73c.7,0,1.61,0,2.47.08,2.57.1,4.2.17,5.94-2.29h0a12.34,12.34,0,0,0,1.71-3.74,24.86,24.86,0,0,0,.79-5l.83-1.77a14.89,14.89,0,0,0,3.9-5.75,21.18,21.18,0,0,0,1-8.67l-.1-1.6,1.36-.84a4.09,4.09,0,0,0,1.64-3,17.44,17.44,0,0,0-.68-7.12l.21-1.94A13.12,13.12,0,0,0,117.51,51a7.29,7.29,0,0,0-1.17-4.38,9.53,9.53,0,0,0-3.59-3.12A16,16,0,0,0,106,41.77H79.51l.6-3.18a85.93,85.93,0,0,0,1.22-8.79,51,51,0,0,0,.13-7.55,20.76,20.76,0,0,0-7.62-15,10.15,10.15,0,0,0-3.41-1.79,3,3,0,0,0-2,0ZM22.64,85.3a5.13,5.13,0,1,1-5.13,5.13,5.13,5.13,0,0,1,5.13-5.13Z"
                            />
                        </svg>

                        {{ post.likes.length }} Likes
                    </div>
                    <div
                        @click="showCommetsCards(index)"
                        class="flex items-center gap-2 cursor-pointer"
                        data-id="54"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            x="0px"
                            y="0px"
                            width="24"
                            height="24"
                            viewBox="0 0 32 32"
                            fill="black"
                        >
                            <path
                                d="M 16 3 C 12.210938 3 8.765625 4.113281 6.21875 5.976563 C 3.667969 7.835938 2 10.507813 2 13.5 C 2 17.128906 4.472656 20.199219 8 22.050781 L 8 29 L 14.746094 23.9375 C 15.15625 23.96875 15.570313 24 16 24 C 19.789063 24 23.234375 22.886719 25.78125 21.027344 C 28.332031 19.164063 30 16.492188 30 13.5 C 30 10.507813 28.332031 7.835938 25.78125 5.976563 C 23.234375 4.113281 19.789063 3 16 3 Z M 16 5 C 19.390625 5 22.445313 6.015625 24.601563 7.589844 C 26.757813 9.164063 28 11.246094 28 13.5 C 28 15.753906 26.757813 17.835938 24.601563 19.410156 C 22.445313 20.984375 19.390625 22 16 22 C 15.507813 22 15.015625 21.972656 14.523438 21.925781 L 14.140625 21.894531 L 10 25 L 10 20.859375 L 9.421875 20.59375 C 6.070313 19.019531 4 16.386719 4 13.5 C 4 11.246094 5.242188 9.164063 7.398438 7.589844 C 9.554688 6.015625 12.609375 5 16 5 Z"
                            ></path>
                        </svg>
                        {{ post.comments.length }}
                    </div>
                    <div class="flex items-center gap-2" data-id="56">
                        <svg
                            data-id="57"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4"
                        >
                            <path
                                d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"
                            ></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share
                    </div>
                </div>
                <div class="flex items-center gap-3 mt-2">
                    <input
                        v-model="comment[index]"
                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        placeholder="Write your comment..."
                        data-id="60"
                    />
                    <div
                        @click="addComment(user.id, post.id, comment[index])"
                        class="bg-blue-700 rounded-md border p-2 cursor-pointer h-full"
                    >
                        <svg
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
                            <g id="XMLID_51_">
                                <path
                                    id="XMLID_53_"
                                    d="M164.711,456.687c0,2.966,1.647,5.686,4.266,7.072c2.617,1.385,5.799,1.207,8.245-0.468l55.09-37.616   l-67.6-32.22V456.687z"
                                />
                                <path
                                    id="XMLID_52_"
                                    d="M492.431,32.443c-1.513-1.395-3.466-2.125-5.44-2.125c-1.19,0-2.377,0.264-3.5,0.816L7.905,264.422   c-4.861,2.389-7.937,7.353-7.904,12.783c0.033,5.423,3.161,10.353,8.057,12.689l125.342,59.724l250.62-205.99L164.455,364.414   l156.145,74.4c1.918,0.919,4.012,1.376,6.084,1.376c1.768,0,3.519-0.322,5.186-0.977c3.637-1.438,6.527-4.318,7.97-7.956   L494.436,41.257C495.66,38.188,494.862,34.679,492.431,32.443z"
                                />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!--commetns-->
        <div
            class="comments-cards p-5 bg-gray-300 comments-show"
            v-if="post.comments.length > 0"
        >
            <div
                v-for="(comment, index) in post.comments"
                :key="index"
                class="text-card-foreground shadow-sm bg-white border border-muted rounded-lg p-4 mb-2 h-fit"
                data-v0-t="card"
            >
                <button
                    v-if="$page.props.auth.user.id == comment.user.id"
                    @click="removeComment(comment.id)"
                    class="rounded-full group flex items-center justify-center focus-within:outline-red-500 float-end ml-2"
                >
                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <circle
                            class="fill-red-50 transition-all duration-500 group-hover:fill-red-400"
                            cx="17"
                            cy="17"
                            r="17"
                            fill=""
                        />
                        <path
                            class="stroke-red-500 transition-all duration-500 group-hover:stroke-white"
                            d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z"
                            stroke="#EF4444"
                            stroke-width="1.6"
                            stroke-linecap="round"
                        />
                    </svg>
                </button>
                <div class="flex items-start gap-4">
                    <span
                        class="relative flex shrink-0 overflow-hidden rounded-full h-10 w-10"
                    >
                        <span
                            class="flex h-full w-full items-center justify-center rounded-full bg-muted"
                            ><img
                                :src="handlimg(comment.user.profile_photo_url)"
                                alt="photo"
                        /></span>
                    </span>
                    <div class="flex-1 space-y-2">
                        <div class="flex items-center justify-between">
                            <div class="font-medium">
                                {{ comment.user.name }}
                            </div>
                        </div>
                        <div
                            class="text-muted-foreground text-gray-500 text-content overflow-hidden"
                        >
                            {{ comment.content }}
                        </div>
                    </div>
                </div>
                <div class="text-xs text-muted-foreground float-end pb-6">
                    {{ timeAgo(comment.created_at) }}
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.comments-show {
    display: none;
}
</style>
