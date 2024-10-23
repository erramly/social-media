<script setup>
import { usePage } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

const page = usePage();

const notifications = ref([]);
const fetchNotifications = async () => {
    notifications.value = page.props.auth.notifications;

    console.log(page.props.auth.notifications);
};

onMounted(() => {
    fetchNotifications();
});
</script>
<template>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
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
                    class="notification-icon"
                >
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                </svg>
                Notifications
            </h2>
            <p class="card-description">
                You have {{ notifications.length }} unread notifications
            </p>
        </div>
        <div class="card-content">
            <div
                class="notification"
                v-for="notification in notifications"
                :key="item"
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
                    class="notification-icon"
                >
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                </svg>
                <div class="notification-content">
                    <h3 class="notification-title">New message</h3>
                    <p class="notification-description">
                        {{ notification.data.message }}
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="view-all-button">mark all notifications</button>
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
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 380px;
    overflow: hidden;
    position: absolute;
    z-index: 99999;
    width: 80%;
    top: 50px;
    right: 5%;
    max-width: 400px;
}

.card-header {
    padding: 16px;
    border-bottom: 1px solid #e0e0e0;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.card-description {
    font-size: 14px;
    color: #666;
    margin: 8px 0 0;
}

.card-content {
    padding: 16px;
}

.notification {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    margin-bottom: 12px;
}

.notification.read {
    background-color: #f5f5f5;
}

.notification-icon {
    width: 20px;
    height: 20px;
}

.notification-content {
    flex-grow: 1;
}

.notification-title {
    font-size: 14px;
    font-weight: bold;
    margin: 0 0 4px;
}

.notification-description {
    font-size: 14px;
    color: #666;
    margin: 0;
}

.card-footer {
    padding: 16px;
    border-top: 1px solid #e0e0e0;
}

.view-all-button {
    display: block;
    width: 100%;
    padding: 8px;
    background-color: transparent;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    text-align: center;
}

.view-all-button:hover {
    background-color: #f0f0f0;
}
</style>
