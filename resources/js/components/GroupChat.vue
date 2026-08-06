<script setup lang="ts">
import { Form } from '@inertiajs/vue3';
</script>

<template>
    <div id="chat" class="flex flex-col m-5 w-full space-y-6">
        <div id="messages-container" class="h-full mx-2 bg-[#94a8af] rounded-[3px]">
            <div class="messages">

            </div>
        </div>
        <div id="sending-form">
            <Form class="flex">
                <input placeholder="Say something..." type="text" name="password" required autocomplete="off" class="mx-2 flex-1 rounded-[3px] px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                <button type="submit" class="mx-2 cursor-pointer rounded-[3px] px-6 py-5 text-2xl text-black bg-[#a8d06f] hover:bg-[#8db05b]"><span>Send </span><i class="pi pi-send"></i></button>
            </Form>
        </div>
    </div>
</template>
