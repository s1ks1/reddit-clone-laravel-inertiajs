<template>
<h1>Subreddit {{ subreddit.name }}</h1>
</template>

<script setup>
defineProps({
    subreddit: Object(),
});
</script>