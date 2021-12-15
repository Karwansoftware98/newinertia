<template>

<div>

    <Component 
    :is="link.url ? 'Link' : 'span' "
    v-for="link in links" 
    :href="link.url" 
    v-html="link.label" 
    :key="link.label" 
    class="px-1 "
    :class="{'text-gray-400 cursor-not-allowed': !link.url , 'font-bold text-blue-600 underline' : link.active }"
    />
</div>

</template>

<script  setup>
defineProps({
    links:Array
});
</script>