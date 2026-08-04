<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import ChatComponent from '@/components/ChatComponent.vue';
import SideMenuComponent from '@/components/SideMenuComponent.vue';
</script>

<template>
    <Head>
        <title>Home - YChat</title>
        <meta name="description" content="Main page of YChat">
    </Head>
    <div id="app" class="flex flex-row">
        <side-menu-component/>
        <ChatComponent/>
    </div>
</template>

<style scoped></style>
