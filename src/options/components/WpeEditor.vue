<template>
    <transition name="fade">
        <el-row :gutter="15" type="flex">
            <wpe-heading v-if="field.heading" :heading="field.heading" :subtitle="field.subtitle"></wpe-heading>
            <el-col class="wpessential-field" :span="v_if_single(field.help,13,16 )">
                <div class="wpessential-form-editor">
                    <textarea :id="'wp_editor_'+field.id" v-model="value"></textarea>
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
        mounted() {
            this.get_value();
            this.field_args_check();
            let field_id = 'wp_editor_' + this.field.id;
            setTimeout(() => {
                // text editor
                wp.editor.remove(field_id);
                let mydef = wp.editor.getDefaultSettings().tinymce;

                mydef.setup = function (ed) {
                    ed.on('keyup', function (e) {
                        this.value = ed.getContent();
                    })
                }

                wp.editor.initialize(field_id, {
                    tinymce: mydef,
                    mediaButtons: true,
                    quicktags: true,
                });

            }, 500)

        },
    }
</script>
