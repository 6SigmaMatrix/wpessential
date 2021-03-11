<template>
    <el-col :lg="18">
        <el-form-item>
            <el-form-item label="Activity name" prop="name">
                <el-input v-model="form.name"></el-input>
            </el-form-item>
        </el-form-item>
    </el-col>
</template>

<script>
import WpeText from './WpeText.vue';

export default {
    name: "wpe-form",
    components: { WpeText },
    data () {
        return {
            form: {
                name: "test"
            },
        }
    },
    mounted () {
    }
}
</script>
