<template>
    <div>
        <router-view></router-view>
    </div>
</template>
<script>
import chaild from "./components/login.vue";
export default {
    components: {
        chaild,
    },
};
</script>
