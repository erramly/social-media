<template>
    <div class="stories-container w-full">
        <div class="stories-scroll">
            <!--add story-->
            <div class="story">
                <div class="story-avatar">
                    <div class="story-add">
                        <span class="story-add-icon">+</span>
                    </div>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJA32WU4rBpx7maglqeEtt3ot1tPIRWptxA&s"
                        alt="Your Story"
                        class="story-img"
                    />
                    <div class="story-border"></div>
                </div>
                <div class="story-name">Your Story</div>
            </div>
            <div class="story" v-for="story in 10" :key="story">
                <div class="story-avatar">
                    <div class="story-border"></div>
                    <img
                        src="https://i.pravatar.cc/150?img=1"
                        alt="Emily Johnson"
                        class="story-img"
                    />
                </div>
                <div class="story-name">Emily Johnson</div>
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
</style>
