<template>
    <div
        class="fixed z-[99999] bg-[#333333bd] inset-0 flex justify-center items-center absolute"
    >
        <div class="card">
            <div class="card-header">
                <span class="card-title">Exciting Features</span>
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
                >
                    <path
                        d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"
                    />
                    <path d="M5 3v4" />
                    <path d="M19 17v4" />
                    <path d="M3 5h4" />
                    <path d="M17 19h4" />
                </svg>
            </div>
            <div class="card-content">
                <h3>Coming Soon!</h3>
                <p>
                    We're working hard to bring you amazing new features. Stay
                    tuned for updates that will enhance your experience.
                </p>
                <ul>
                    <li>
                        <span class="bullet bullet-purple"></span>Advanced
                        Analytics
                    </li>
                    <li>
                        <span class="bullet bullet-pink"></span>Customizable
                        Dashboards
                    </li>
                    <li>
                        <span class="bullet bullet-indigo"></span>AI-Powered
                        Insights
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<style scoped>
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}
.card {
    width: 100%;
    max-width: 400px;
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.card-header {
    background: linear-gradient(to right, #8b5cf6, #ec4899);
    color: white;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}
.card-content {
    padding: 20px;
}
h3 {
    font-size: 1.5rem;
    margin-top: 0;
    margin-bottom: 10px;
}
p {
    color: #6b7280;
    margin-bottom: 20px;
}
ul {
    list-style-type: none;
    padding: 0;
}
li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}
.bullet {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    margin-right: 10px;
}
.bullet-purple {
    background-color: #8b5cf6;
}
.bullet-pink {
    background-color: #ec4899;
}
.bullet-indigo {
    background-color: #6366f1;
}
</style>
