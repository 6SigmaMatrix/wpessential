<template>
    <el-popover :title="title" :content="content" v-bind="args">
        <el-button slot="reference">
            <i :class="icon"></i>
        </el-button>
    </el-popover>
</template>

<script>

export default {
    props: [ 'content', 'title', 'icon' ],
    data () {
        return {
            args: this.$WPEssential.tab_args.note,
        }
    }
}
</script>
