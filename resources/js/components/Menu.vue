<script setup lang="ts">
import { Form, usePage } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const isOpen = ref(false)

const toggleVariant = () => {
    isOpen.value = !isOpen.value
}

const page = usePage();

const user = computed(() => page.props.auth.user);
</script>

<template>
    <div id="menu" class="flex p-5">
        <nav :class="{'sidebar-active': isOpen, 'sidebar-inactive': !isOpen}">
            <div :class="{'menu-element-active': isOpen, 'menu-element-inactive': !isOpen}" id="user-block" class="mx-auto text-2xl">
                <p class="text-2xl mb-4 text-center">Welcome, {{ user.name }}!</p>
                <Form method="post" action="/logout">
                    <button type="submit" class="block w-full cursor-pointer rounded-[3px] bg-[#a8d06f] px-6 py-5 text-2xl text-black hover:bg-[#8db05b]">
                        <span>Logout </span><i class="pi pi-sign-out"></i>
                    </button>
                </Form>
            </div>
        </nav>
        <div class="open ml-2" @click="toggleVariant">
            <i :class="{'pi-arrow-left': isOpen, 'pi-arrow-right': !isOpen}" class="pi text-2xl cursor-pointer"></i>
        </div>
    </div>
</template>

<style scoped>

    .sidebar-active {
        width: 250px;
        height: 100%;
        -webkit-transition: width 0.5s ease-in-out;
        -moz-transition: width 0.5s ease-in-out;
        -o-transition: width 0.5s ease-in-out;
        transition: width 0.5s ease-in-out;
    }

    .sidebar-inactive {
        width: 0;
        -webkit-transition: width 0.5s ease-in-out;
        -moz-transition: width 0.5s ease-in-out;
        -o-transition: width 0.5s ease-in-out;
        transition: width 0.5s ease-in-out;
    }

    .menu-element-active {
        position: relative;
        right: 0;
        -webkit-transition: right 0.7s ease-in-out;
        -moz-transition: right 0.7s ease-in-out;
        -o-transition: right 0.7s ease-in-out;
        transition: right 0.7s ease-in-out;
    }

    .menu-element-inactive {
        position: relative;
        right: 300px;
        -webkit-transition: right 0.1s ease-in-out;
        -moz-transition: right 0.1s ease-in-out;
        -o-transition: right 0.1s ease-in-out;
        transition: right 0.1s ease-in-out;
    }
</style>
