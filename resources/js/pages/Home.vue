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
    <div id="app" class="grid grid-cols-6 grid-rows-6">
        <Menu />
        <div id="content" class="col-span-5 row-span-6">
            <GroupChat />
        </div>
    </div>
</template>

<style scoped></style>
