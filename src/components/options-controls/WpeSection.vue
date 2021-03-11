<!--
  - Copyright (c) 2020. This file is copyright by WPEssential.
  -->

<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <el-col class="wpessential-field" :span="24">
                <h2 class="wpessential-field-heading el-col el-col-24" v-if="field.heading">{{field.heading}}</h2>
                <el-divider class="wpessential-form-divider" content-position="left">
                    <slot v-if="field.desc">{{field.desc}}</slot>
                </el-divider>
            </el-col>
        </el-row>
    </transition>
</template>

<script>

    import {WpeMixins} from "../mixins";

    export default {
        mixins: [WpeMixins],
        mounted() {
            this.field_args_check();
        }
    }
</script>
