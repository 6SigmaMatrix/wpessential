<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <el-col class="wpessential-field" :span="24">
                <slot v-if="title">{{title}}</slot>
                <el-divider class="wpessential-form-divider" :content-position="position">
                    <slot v-if="content">{{content}}</slot>
                </el-divider>
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
                title: '',
                content: '',
                position: 'left'
            }
        },
        mounted() {
            this.field_args_check();
            if (this.field.settings !== undefined) {
                if (this.field.settings.content !== undefined) {
                    this.content = this.field.settings.content;
                }
                if (this.field.settings.position !== undefined) {
                    this.position = this.field.settings.position;
                }
            }

            if (this.field.title !== undefined) {
                this.title = this.field.title;
            }
        }
    }
</script>
