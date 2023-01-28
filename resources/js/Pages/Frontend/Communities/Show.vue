<template>
    <GuestLayout>
        <h1>Community {{ community.name }}</h1>
    </GuestLayout>

</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue"

defineProps({
    community: Object(),
});
</script>