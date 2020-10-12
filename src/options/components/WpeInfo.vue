<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <el-col class="wpessential-field" :span="24">
                <el-alert v-bind="attr" class="wpessential-form-info" :name="field.id" :description="description" :title="title"></el-alert>
            </el-col>
        </el-row>
    </transition>
</template>

<script>

    import {WpeMixins} from "../mixins";

    export default {
        mixins: [WpeMixins],
        data() {
            return {
                description: '',
                title: ''
            }
        },
        mounted() {
            this.field_args_check();
            this.description = this.field.desc;
            this.title = this.field.heading;
            this.attributes();
        }
    }
</script>
