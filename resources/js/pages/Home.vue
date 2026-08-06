<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import GroupChat from '@/components/GroupChat.vue';
import Menu from '@/components/Menu.vue';
</script>

<template>
    <Head>
        <title>Home - YChat</title>
        <meta name="description" content="Main page of YChat">
    </Head>
    <div id="app" class="flex">
        <Menu />
        <div id="content" class="flex flex-1">
            <GroupChat />
        </div>
    </div>
</template>

<style scoped></style>
