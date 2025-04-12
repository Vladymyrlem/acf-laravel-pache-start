<template>
  <div>
    <div v-for="(field, key) in fields" :key="key" class="mb-4">
      <label class="block font-semibold mb-1">{{ field.label ?? key }}</label>
      <textarea v-if="field.type === 'textarea'" :name="`custom_fields[${key}]`" v-model="model[key]" class="w-full border rounded p-2" />
      <input v-else :type="field.type || 'text'" :name="`custom_fields[${key}]`" v-model="model[key]" class="w-full border rounded p-2" />
    </div>
  </div>
</template>

<script setup>
defineProps({
  model: Object,
  fields: Object
});
</script>