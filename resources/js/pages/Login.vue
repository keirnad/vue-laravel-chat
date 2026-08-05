<script setup lang="ts">
    import { Form } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3';
    import { Head } from '@inertiajs/vue3';
    import { ref } from 'vue';

    const inputValue = ref({
        login: '',
        password: ''
    });


</script>

<template>
    <Head>
        <title>Login - YChat</title>
        <meta name="description" content="login page of YChat">
    </Head>
        <div class="flex flex-col justify-center px-6 py-12 lg:px-8">
            <h1 class="text-5xl self-center">Sign in</h1>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <Form method="post" action="/login" id="login-form" class="space-y-6 p-4">
                    <input v-model="inputValue.login" placeholder="E-Mail" type="text" name="email" required autocomplete="on" class="block w-full rounded-[3px] text px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <input v-model="inputValue.password" placeholder="Password" type="password" name="password" required autocomplete="off" class="block w-full rounded-[3px] px-6 py-5 text-2xl outline-0 text-white bg-[#94a8af] border-2 border-[#94a8af] focus:border-[#a8d06f]">
                    <button type="submit" class="block w-full cursor-pointer rounded-[3px] px-6 py-5 text-2xl text-black bg-[#a8d06f] hover:bg-[#8db05b]"><span>Continue </span><i class="pi pi-sign-in"></i></button>
                </Form>
            </div>
            <p class="self-center">Not registered yet? <Link href="/register" view-transition class="hover:text-[#d7e5d2]">Registration</Link></p>
        </div>
</template>
