<script setup>
import { defineProps, ref } from "vue";
import createStory from "./createStory.vue";
import showStory from "./showStory.vue";
const isModalOpen = ref(false);
const isModalOpenShowStory = ref(false);
const dataOfStorySelected = ref("");

const closeOrOpenModal = () => {
    isModalOpen.value = isModalOpen.value ? false : true;
};
const closeOrOpenModalShowStory = (story) => {
    console.log(story);

    isModalOpenShowStory.value = isModalOpenShowStory.value ? false : true;
    dataOfStorySelected.value = handlImageUrl(story.media_path);
};
const props = defineProps(["user_stories", "friend_stories"]);

console.log(props.user_stories);
console.log(props.friend_stories);

const handlImageUrl = (url) => {
    return "http://localhost:8000/storage/" + url;
};
</script>
<template>
    <createStory v-if="isModalOpen" @close="closeOrOpenModal" />
    <showStory
        :story="dataOfStorySelected"
        v-if="isModalOpenShowStory"
        @close="closeOrOpenModalShowStory"
    />
    <div class="stories-container w-full">
        <div class="stories-scroll">
            <!--add story-->
            <div class="story">
                <div class="story-avatar">
                    <div class="story-add" @click="closeOrOpenModal">
                        <span class="story-add-icon">+</span>
                    </div>
                    <img
                        :src="handlImageUrl(user_stories.media_path)"
                        @click="closeOrOpenModalShowStory(user_stories)"
                        alt="Your Story"
                        class="story-img blur-sm"
                    />
                    <div class="story-border"></div>
                </div>
                <div class="story-name">
                    {{ user_stories.user.name }}
                </div>
            </div>
            <div
                class="story"
                v-for="story in friend_stories"
                :key="story"
                @click="closeOrOpenModalShowStory(story)"
            >
                <div class="story-avatar">
                    <div class="story-border"></div>
                    <img
                        src="https://i.pravatar.cc/150?img=1"
                        alt="Emily Johnson"
                        class="story-img"
                    />
                </div>
                <div class="story-name">{{ story.user.name }}</div>
            </div>
        </div>
    </div>
</template>

<style scoped>
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
        "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans",
        "Helvetica Neue", sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 20px;
}
.stories-container {
    width: 100%;
    margin: 0 auto;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.stories-scroll {
    display: flex;
    overflow-x: auto;
    padding: 16px;
    scrollbar-width: thin;
    scrollbar-color: #bcc0c4 transparent;
}
.stories-scroll::-webkit-scrollbar {
    height: 8px;
}
.stories-scroll::-webkit-scrollbar-thumb {
    background-color: #bcc0c4;
    border-radius: 4px;
}
.story {
    flex: 0 0 auto;
    width: 112px;
    margin-right: 16px;
    text-align: center;
    position: relative;
    cursor: pointer;
}
.story-avatar {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    position: relative;
}
.story-border {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 4px solid transparent;
    border-radius: 50%;
    background-image: linear-gradient(#fff, #fff),
        linear-gradient(to right, #00c6ff 0%, #0072ff 100%);
    background-origin: border-box;
    background-clip: content-box, border-box;
}
.story-img {
    width: 100%;
    height: 100%;
    position: absolute;
    -o-object-fit: cover;
    object-fit: cover;
    z-index: 999;
    padding: 7px;
    border-radius: 100px;
}
.story-add {
    position: absolute;
    bottom: 4px;
    right: 4px;
    background-color: #1877f2;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 4px solid white;
    z-index: 9999;
}
.story-add-icon {
    color: white;
    font-size: 24px;
    line-height: 1;
}
.story-name {
    margin-top: 8px;
    font-size: 12px;
    font-weight: 600;
    color: #1c1e21;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
@media screen and (max-width: 500px) {
    .story {
        width: 90px;
        margin-right: 10px;
    }
    .story-avatar {
        width: 85px;
        height: 85px;
    }
}
</style>
