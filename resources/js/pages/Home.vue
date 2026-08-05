<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import Menu from '@/components/Menu.vue';
</script>

<template>
    <Head>
        <title>Home - YChat</title>
        <meta name="description" content="Main page of YChat">
    </Head>
    <div id="app" class="grid grid-cols-6 grid-rows-6">
        <Menu />
    </div>
</template>

<style scoped></style>
