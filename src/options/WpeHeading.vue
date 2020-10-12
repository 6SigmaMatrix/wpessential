<template>
    <el-col :span="8" class="wpessential-field-label">
        <span class="wpessential-field-heading el-col el-col-24">{{heading}}</span>
        <span class="wpessential-field-subtitle el-col el-col-24" v-if="subtitle">{{subtitle}}</span>
    </el-col>
</template>

<script>
    export default {
        props: {
            heading: String,
            subtitle: String,
        }
    }
</script>
