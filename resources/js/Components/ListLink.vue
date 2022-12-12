<script>
// normal <script>, executed in module scope (only once)
// runSideEffectOnce();

// declare additional options
export default {
    inheritAttrs: false,
};
</script>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps(["href", "classes"]);
</script>

<template>
    <Link :href="href">
        <div :class="classes" v-bind="$attrs">
            <slot />
        </div>
    </Link>
</template>
