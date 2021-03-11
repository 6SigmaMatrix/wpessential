<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
            <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
                <div class="wpessential-form-background-media el-col el-col-24">
                    <span class="wpessential-field-heading el-col el-col-24">Background Image</span>
                    <input type="hidden" v-model="value.image">
                    <div class="image" v-if="attachment.sizes">
                        <img :src="attachment.sizes.thumbnail.url" :alt="attachment.title">
                    </div>
                    <el-button type="primary" icon="fas fa-image" plain @click.prevent="add_media($event)" :loading="loading">
                        {{btnText()}}
                    </el-button>
                </div>

                <div class="wpessential-form-background-preset el-col el-col-24" v-if="value.image">
                    <span class="wpessential-field-heading el-col el-col-24">Preset</span>
                    <el-select @change="select_change" v-bind="attr" :name="field_id+'_perset'" class="wpessential-form-background-preset-select" v-model="value.perset">
                        <el-option v-for="(label, key) in preset_set()" :key="key" :value="key" :label="label"></el-option>
                    </el-select>
                </div>

                <div class="wpessential-form-background-position el-col el-col-24" v-if="value.perset !== 'default'">
                    <span class="wpessential-field-heading el-col el-col-24">Image Position</span>
                    <div class="el-col el-col-8">
                        <el-radio-group @change="select_change" class="wpessential-form-background-position-radio" v-model="value.position">
                            <el-radio-button v-bind="attr" v-for="option in position_set()" :key="option.key" :label="field_id+'_position_'+option.key" :name="field_id+'_position_'+option.key" :class="option.class">
                                <i :class="option.label"></i>
                            </el-radio-button>
                        </el-radio-group>
                    </div>
                </div>

                <div class="wpessential-form-background-size el-col el-col-24" v-if="value.perset == 'custom'">
                    <span class="wpessential-field-heading el-col el-col-24">Image Size</span>
                    <el-select @change="select_change" v-bind="attr" :name="field_id+'_size'" class="wpessential-form-background-select" v-model="value.size">
                        <el-option v-for="(label, key) in size_set()" :key="key" :value="key" :label="label"></el-option>
                    </el-select>
                </div>

                <div class="wpessential-form-background-repeat el-col el-col-24" v-if="value.perset == 'custom' || value.perset == 'fit'">
                    <span class="wpessential-field-heading el-col el-col-24">Repeat</span>
                    <el-switch @change="select_change" v-bind="attr" :name="field_id+'_repeat'" v-model="value.repeat" class="wpessential-form-background-repeat-toggle"></el-switch>
                </div>

                <div class="wpessential-form-background-scroll el-col el-col-24" v-if="value.perset == 'custom'">
                    <span class="wpessential-field-heading el-col el-col-24">Scroll with Page</span>
                    <el-switch @change="select_change" v-bind="attr" :name="field_id+'_attachment'" v-model="value.attachment" class="wpessential-form-background-scroll-toggle"></el-switch>
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
                value: {},
                attachment: {},
                loading: false,
                field_id: this.field.id,
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
                let get_data = {
                    nonce: WPEssential.nonce,
                    action: "get_image_from_url"
                };
                axios.post(WPEssential.ajaxshort, Qs.stringify(get_data)).catch(error => {
                    this.loader = false;
                    this.notify_error(error);
                }).then(response => {
                    this.loader = false;
                    if (response.data.success == true) {
                        this.attachment = response.data.data;
                    } else {
                        this.error_message = "No data founded";
                        this.notify_error();
                    }
                });
            },
            add_media(event) {
                let button = jQuery(event.target);
                let id = button.prev();
                wp.media.editor.send.attachment = (props, attachment) => {
                    this.value.image = attachment.sizes.full.url
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
            },
            preset_set() {
                return {
                    default: 'Default',
                    fill: 'Fill Screen',
                    fit: 'Fit to Screen',
                    repeat: 'Repeat',
                    custom: 'Custom',
                }
            },
            position_set() {
                return [
                    {
                        key: 'left top',
                        label: 'fas fa-arrow-left',
                        class: 'left top'
                    },
                    {
                        key: 'center top',
                        label: 'fas fa-arrow-left',
                        class: 'center top'
                    },
                    {
                        key: 'right top',
                        label: 'fas fa-arrow-right',
                        class: 'right top'
                    },
                    {
                        key: 'left center',
                        label: 'fas fa-arrow-left',
                        class: 'left center'
                    },
                    {
                        key: 'center center',
                        label: 'fas fa-circle',
                        class: 'center center'
                    },
                    {
                        key: 'right center',
                        label: 'fas fa-arrow-right',
                        class: 'right center'
                    },
                    {
                        key: 'left bottom',
                        label: 'fas fa-arrow-left',
                        class: 'left bottom'
                    },
                    {
                        key: 'center bottom',
                        label: 'fas fa-arrow-left',
                        class: 'center bottom'
                    },
                    {
                        key: 'right bottom',
                        label: 'fas fa-arrow-right',
                        class: 'right bottom'
                    },
                ]
            },
            size_set() {
                return {
                    auto: 'Original',
                    contain: 'Fit to Screen',
                    cover: 'Fill Screen',
                }
            }
        }
    }
</script>
