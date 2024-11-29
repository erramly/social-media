<script setup>
import { defineProps, ref } from "vue";

const emit = defineEmits(["close"]);
const props = defineProps(["story"]);
// close modal
const close = () => {
    emit("close");
};
</script>
<template>
    <div
        class="fixed z-[99999] bg-[#333333bd] inset-0 flex justify-center items-center"
    >
        <div
            class="bg-story fixed h-[90%] my-6 rounded-lg bg-white left-[50%] top-[50%] z-50 grid w-[80%] max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background shadow-lg duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] sm:max-w-[425px]"
            data-id="36"
        >
            <button
                @click="close()"
                type="button"
                class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-accent data-[state=open]:text-muted-foreground"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="#fff"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-x h-4 w-4"
                >
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                <span class="sr-only">Close</span>
            </button>
            <!--story image-->
            <div
                class="bg-story flex items-center space-x-6 justify-center my-8"
            >
                <img
                    :src="story"
                    alt="story image"
                    class="object-cover h-full w-full"
                />
            </div>
        </div>
    </div>
</template>
<style scoped>
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
    background-color: #1877f2;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 4px solid white;
    z-index: 9999;
    left: 50%;
    right: 50%;
    top: 50%;
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

.story-creator {
    width: 100%;
    background: linear-gradient(135deg, #8b5cf6 0%, #3b82f6 100%);

    border-radius: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: transform 0.2s;
    color: white;
    text-decoration: none;
}

.story-creator:hover {
    transform: scale(1.02);
}

.icon-wrapper {
    width: 48px;
    height: 48px;
    background-color: rgba(0, 0, 0, 0.4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
}

.icon {
    width: 24px;
    height: 24px;
}

.text {
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    margin: 0;
    padding: 0 16px;
}

.bg-story {
    background-color: #333;
    background-clip: content-box, border-box;
}
svg {
    color: white;
    font-size: 2rem;
}
</style>
