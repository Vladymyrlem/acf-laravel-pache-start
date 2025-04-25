<template>
    <div>
        <div v-for="(field, index) in fields" :key="field.id" class="mb-3">
            <label :for="'field_' + field.id">{{ field.label }}</label>
            <input
                type="text"
                class="form-control"
                :name="'custom_fields[' + field.id + '][value]'"
                v-model="model[field.id].value"
            />
            <input
                type="hidden"
                :name="'custom_fields[' + field.id + '][field_definition_id]'"
                :value="field.id"
            />
        </div>
    </div>
</template>

<script setup>
import {reactive, watch, onMounted} from 'vue'
import {toRaw} from 'vue'

const props = defineProps({
    fields: Array,
    model: Object
})

let model = reactive({})

// Ініціалізуємо model з даними
onMounted(() => {
    props.fields.forEach(field => {
        if (!model[field.id]) {
            model[field.id] = {
                value: props.model[field.id]?.value || ''
            }
        }
    })
})
</script>
