<script setup lang="ts">
    import { ref } from 'vue';

    const inputValue = ref({
        login: '',
        password: ''
    });


</script>

<template>
    <p>{{ inputValue }}</p>
        <div class="flex flex-1 flex-col items-center mt-10 sm:mx-auto sm:w-full sm:max-w-sm min-h-full px-6 py-12 lg:px-8">
            <h1 class="text-5xl">Sign in</h1>
            <form method="post" id="login-form" class="flex flex-1 flex-col space-y-6 p-4">
                    <input v-model="inputValue.login" placeholder="E-Mail" type="text" name="username" required autocomplete="on" class="rounded-[3px] text px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <input v-model="inputValue.password" placeholder="Password" type="password" name="password" required autocomplete="off" class="rounded-[3px] px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <button class="cursor-pointer rounded-[3px] px-6 py-5 text-2xl text-black bg-[#a8d06f]"><span>Continue </span><i class="pi pi-sign-in"></i></button>
            </form>
            <p>Not registered yet? <a href="#" class="hover:text-[#d7e5d2]">Registration</a></p>
        </div>
</template>
