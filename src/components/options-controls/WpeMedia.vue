<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
            <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
                <div class="wpessential-form-media">
                    <input type="hidden" v-model="value">
                    <div class="image" v-if="attachment.sizes">
                        <img :src="attachment.sizes.thumbnail.url" :alt="attachment.title">
                    </div>
                    <el-button type="primary" icon="fas fa-image" plain @click.prevent="add_media($event)" :loading="loading">
                        {{btnText()}}
                    </el-button>
                </div>
                <div class="wpessential-field-desc el-col el-col-24" v-if="field.desc">{{field.desc}}</div>
            </el-col>
            <wpe-help v-if="field.help" :help="field.help"></wpe-help>
        </el-row>
    </transition>
</template>

<script>
    import {WpeMixins} from "../mixins";

    export default {
        mixins: [WpeMixins],
        data() {
            return {
                attachment: {},
                loading: false,
                is_done: false,
            }
        },
        mounted() {
            this.get_value();
            this.field_args_check();
            if (this.value >= 1) {
                this.get_media();
            }
        },
        methods: {
            get_media() {
                this.loading = true;
                jQuery.ajax({
                    url: url,
                    type: 'post',
                    data: {action: 'get-attachment', id: this.value},
                    success: (res) => {
                        if (res.success === true) {
                            this.attachment = res.data;
                        }
                    },
                    complete: (res) => {
                        this.loading = false;
                        this.is_done = true;
                    }
                })
            },
            add_media(event) {
                let button = jQuery(event.target);
                let id = button.prev();
                wp.media.editor.send.attachment = (props, attachment) => {
                    this.value = attachment.id
                    this.attachment = attachment
                };
                wp.media.editor.open(button);
                return false;
            },
            btnText() {
                if (this.field.settings !== undefined) {
                    if (this.attachment.sizes) {
                        return this.field.settings.update;
                    } else {
                        return this.field.settings.new;
                    }
                }
            }
        }
    }
</script>
