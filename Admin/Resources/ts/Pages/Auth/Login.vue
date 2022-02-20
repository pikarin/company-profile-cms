<script lang="ts" setup>
import BreezeButton from '@admin/Components/AppButton.vue'
import BreezeCheckbox from '@admin/Components/AppCheckbox.vue'
import BreezeGuestLayout from '@admin/Layouts/Guest.vue'
import BreezeInput from '@admin/Components/AppInput.vue'
import BreezeLabel from '@admin/Components/AppLabel.vue'
import BreezeValidationErrors from '@admin/Components/ValidationErrors.vue'
import { Head, Link, useForm } from '@inertiajs/inertia-vue3'

defineProps({
    canResetPassword: Boolean,
    status: String,
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    })
}
</script>

<script lang="ts">
export default {
    layout: BreezeGuestLayout,
}
</script>

<template>
    <Head title="Log in" />

    <BreezeValidationErrors class="mb-4" />

    <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
        {{ status }}
    </div>

    <form @submit.prevent="submit">
        <div>
            <BreezeLabel for="email" value="Email" />
            <BreezeInput
                id="email"
                v-model="form.email"
                type="email"
                class="mt-1 block w-full"
                required
                autofocus
                autocomplete="username"
            />
        </div>

        <div class="mt-4">
            <BreezeLabel for="password" value="Password" />
            <BreezeInput
                id="password"
                v-model="form.password"
                type="password"
                class="mt-1 block w-full"
                required
                autocomplete="current-password"
            />
        </div>

        <div class="mt-4 block">
            <label class="flex items-center">
                <BreezeCheckbox v-model:checked="form.remember" name="remember" />
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <div class="mt-4 flex items-center justify-end">
            <Link
                v-if="canResetPassword"
                :href="route('password.request')"
                class="text-sm text-gray-600 underline hover:text-gray-900"
            >
                Forgot your password?
            </Link>

            <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </BreezeButton>
        </div>
    </form>
</template>
