<script setup lang="ts">
import { Form } from '@inertiajs/vue3';
</script>

<template>
    <div id="chat" class="m-2">
        <div id="messages-container">
        </div>
        <div id="sending-form">
            <Form class="flex">
                <input placeholder="Say something..." type="text" name="password" required autocomplete="off" class="mx-2 flex-1 rounded-[3px] px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                <button type="submit" class="mx-2 cursor-pointer rounded-[3px] px-6 py-5 text-2xl text-black bg-[#a8d06f] hover:bg-[#8db05b]"><span>Continue </span><i class="pi pi-sign-in"></i></button>
            </Form>
        </div>
    </div>
</template>
