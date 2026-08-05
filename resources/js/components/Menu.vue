<script setup lang="ts">
import { Form, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const user = computed(() => page.props.auth.user);
</script>

<template>
    <div id="menu" class="row-span-6 flex bg-[#a8d06f] p-5 max-lg:col-span-2">
        <div id="user-block" class="mx-auto text-2xl">
            <p>Welcome {{ user.name }}!</p>
            <Form method="post" action="/logout">
                <button
                    type="submit"
                    class="block w-full cursor-pointer rounded-[3px] bg-[#a8d06f] px-6 py-5 text-2xl text-black hover:bg-[#8db05b]"
                >
                    <span>Logout </span><i class="pi pi-sign-out"></i>
                </button>
            </Form>
        </div>
    </div>
</template>
