<template>
    <el-col :span="3" class="wpessential-field-info-box">
        <el-popover placement="left" title="Help" width="200" trigger="click" :content="help">
            <el-button slot="reference"><i class="fas fa-question-circle"></i></el-button>
        </el-popover>
    </el-col>
</template>

<script>
    export default {
        props: {
            help: String
        }
    }
</script>
