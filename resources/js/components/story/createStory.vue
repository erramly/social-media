<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";

const emit = defineEmits(["close"]);
const hiddenCreateStory = ref(true);

let form = useForm({
    media: null,
});

const submit = () => {

    form.post("create-story", {
        onSuccess: () => {
           console.log("yes");

        },
    });
};

//this function for click input (type:file) for add new file
function activeinpute() {
    document.getElementById("fileInput").click();
}
//this function for show image upload and add file in useForm
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            let elemnt = document.querySelector(".story-creator");
            elemnt.style.backgroundImage = `url("${e.target.result}")`;
            elemnt.style.objectFit = "cover";

            hiddenCreateStory.value = false;
        };
        reader.readAsDataURL(file);
        form.media = file;
    }
}
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
            class="fixed rounded-lg bg-white left-[50%] top-[50%] z-50 grid w-[80%] max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background p-6 shadow-lg duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] sm:max-w-[425px]"
            data-id="36"
        >
            <div
                class="flex flex-col space-y-1.5 text-center sm:text-left"
                data-id="37"
            >
                <h2
                    id="radix-:rg:"
                    class="text-lg font-semibold leading-none tracking-tight"
                    data-id="38"
                >
                    create new story
                </h2>
            </div>
            <form class="space-y-4" data-id="39" @submit.prevent="submitForm">
                <!--story image-->
                <div class="flex items-center space-x-6 justify-center">
                    <div class="story-creator" @click="activeinpute">
                        <div class="icon-wrapper">
                            <svg
                                class="icon"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                        <p v-if="hiddenCreateStory" class="text">
                            create story
                        </p>
                    </div>
                    <label class="hidden">
                        <input
                            @change="previewImage"
                            id="fileInput"
                            type="file"
                            class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"
                        />
                    </label>
                </div>
                <!--input text-->
                <!-- <div class="space-y-2">
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                        for="story-text"
                        data-id="46"
                        >story text</label
                    ><textarea
                        class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="story-text"
                        placeholder="add story text here.."
                        data-id="47"
                    ></textarea>
                </div> -->
                <button
                    v-if="!hiddenCreateStory"
                    class="inline-flex bg-black text-white items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                    type="submit"
                    data-id="48"
                    @click="submit()"
                >
                    Post a story
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
                        class="lucide lucide-upload mr-2 h-4 w-4"
                        data-id="49"
                    >
                        <path
                            d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                        ></path>
                        <polyline points="17 8 12 3 7 8"></polyline>
                        <line x1="12" x2="12" y1="3" y2="15"></line>
                    </svg>
                </button>
            </form>
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
                    fill="none"
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
    height: 350px;
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
</style>
