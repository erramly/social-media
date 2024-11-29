<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label
        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-gray-600 mb-1 block"
    >
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
