<template>
    <el-col :lg="6">
        <el-radio-group v-model="global_tabs_args.main.collapse">
            <el-radio-button :label="false">expand</el-radio-button>
            <el-radio-button :label="true">collapse</el-radio-button>
        </el-radio-group>
        <el-menu default-active="2" class="el-menu-vertical-demo" v-bind="global_tabs_args.main">
            <template v-if="options_tabs" v-for="(tabs, index) in options_tabs">
                <el-submenu v-if="tabs.children" :index="tabs.id" v-bind="global_tabs_args.children">
                    <template slot="title">
                        <i :class="tabs.icon" v-if="tabs.icon"></i>
                        <i class="img-icon" v-else-if="tabs.img_icon">
                            <img :src="tabs.img_icon" :alt="tabs.img_icon">
                        </i>
                        <span slot="title">
                            {{ tabs.title }}
                            <wpe-note v-if="tabs.note" :icon="tabs.note_icon" :content="tabs.note" :title="tabs.title"></wpe-note>
                        </span>
                    </template>
                    <template v-for="(_tabs, _index) in tabs.children">
                        <el-menu-item :index="options_routes[_tabs.id]">
                            <i :class="_tabs.icon" v-if="_tabs.icon"></i>
                            <i class="img-icon" v-else-if="_tabs.img_icon">
                                <img :src="_tabs.img_icon" :alt="_tabs.img_icon">
                            </i>
                            <span slot="title" v-if="_tabs.title">
                                {{ _tabs.title }}
                                <wpe-note v-if="_tabs.note" :icon="_tabs.note_icon" :content="_tabs.note" :title="_tabs.title"></wpe-note>
                            </span>
                        </el-menu-item>
                    </template>
                </el-submenu>
                <template v-else>
                    <el-menu-item :index="options_routes[tabs.id]">
                        <i :class="tabs.icon" v-if="tabs.icon"></i>
                        <i class="img-icon" v-else-if="tabs.img_icon">
                            <img :src="tabs.img_icon" :alt="tabs.img_icon">
                        </i>
                        <span slot="title" v-if="tabs.title">
                            {{ tabs.title }}
                            <wpe-note v-if="tabs.note" :icon="tabs.note_icon" :content="tabs.note" :title="tabs.title"></wpe-note>
                        </span>
                    </el-menu-item>
                </template>
            </template>
        </el-menu>
    </el-col>
</template>

<script>
import WpeNote from "./WpeNote";
import WpeForm from "./WpeForm";
import Mixin from "../../wpessential-mixin";

export default {
    mixins: [ Mixin ],
    name: "wpe-tab",
    components: { WpeNote },
    data () {
        return {
            global_tabs_args: this.$WPEssential.global_tabs_args,
            options_tabs: {},
            options_routes: [],
        }
    },
    mounted () {
        this.wpe_tab();
    },
    methods: {
        wpe_tab () {
            let find_in = this.$WPEssential.tabs;
            if ( find_in[ this.wpe_get_route_id() ] ) {
                this.options_tabs = find_in[ this.wpe_get_route_id() ];
                this.wpe_tab_children( find_in[ this.wpe_get_route_id() ] );
            }
            this.$WPEssential.options_routes = this.options_routes;
            console.log( find_in[ this.wpe_get_route_id() ] );
        },
        wpe_tab_children ( tabs ) {
            $.each( tabs, ( index, tab ) => {
                if ( tab.children ) {
                    this.options_routes[ tab.id ] = {
                        path: this.wpe_get_route_id() + "/" + tab.id,
                        name: tab.title,
                        componente: WpeForm
                    };
                    $.each( tab.children, ( index, tab_child ) => {
                        this.options_routes[ tab_child.id ] = {
                            path: this.wpe_get_route_id() + "/" + tab.id + "/" + tab_child.id,
                            name: tab.title,
                            componente: WpeForm
                        };
                    } );
                } else {
                    this.options_routes[ tab.id ] = {
                        path: this.wpe_get_route_id() + "/" + tab.id,
                        name: tab.title,
                        componente: WpeForm
                    };
                }
            } );
        }
    }
}
</script>
