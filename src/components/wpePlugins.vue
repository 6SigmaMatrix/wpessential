<template>
    <el-tabs tab-position="left" type="card">
        <el-tab-pane label="Free" :lazy="true">
            <el-row :gutter="30" type="flex">
                <el-col :span="8" v-for="plugin in plugins.plugins" :key="plugin.id">
                    <el-card shadow="hover">
                        <div class="wpe-plugin">
                            <h2>{{plugin.name}}</h2>
                            <div class="wpe-plugin-info">
                                <el-image :src="plugin.image" fit="fit"></el-image>
                                <div class="wpe-plugin-desc">{{plugin.desc}}</div>
                                <div class="wpe-bar">
                                    <div class="wpe-plugin-bages">{{plugin.ver}}</div>
                                    <div class="wpe-plugin-price">{{plugin.price}}</div>
                                </div>
                            </div>
                        </div>
                    </el-card>
                </el-col>
            </el-row>
        </el-tab-pane>
        <el-tab-pane label="Premium" :lazy="true">
            <el-row :gutter="30" type="flex">
                <el-col :span="8" v-for="plugin in plugins.plugins" :key="plugin.id">
                    <el-card shadow="hover">
                        <div class="wpe-plugin">
                            <h2>{{plugin.name}}</h2>
                            <div class="wpe-plugin-info">
                                <el-image :src="plugin.image" fit="fit"></el-image>
                                <div class="wpe-plugin-desc">{{plugin.desc}}</div>
                                <div class="wpe-bar">
                                    <div class="wpe-plugin-bages">{{plugin.ver}}</div>
                                    <div class="wpe-plugin-price">{{plugin.price}}</div>
                                </div>
                            </div>
                        </div>
                    </el-card>
                </el-col>
            </el-row>
        </el-tab-pane>
        <el-tab-pane label="Premium Pro" :lazy="true">
            <el-row :gutter="30" type="flex">
                <el-col :span="8" v-for="plugin in plugins.plugins" :key="plugin.id">
                    <el-card shadow="hover">
                        <div class="wpe-plugin">
                            <h2>{{plugin.name}}</h2>
                            <div class="wpe-plugin-info">
                                <el-image :src="plugin.image" fit="fit"></el-image>
                                <div class="wpe-plugin-desc">{{plugin.desc}}</div>
                                <div class="wpe-bar">
                                    <div class="wpe-plugin-bages">{{plugin.ver}}</div>
                                    <div class="wpe-plugin-price">{{plugin.price}}</div>
                                </div>
                            </div>
                        </div>
                    </el-card>
                </el-col>
            </el-row>
        </el-tab-pane>
    </el-tabs>
</template>
<script>
    export default {
        name: "wpe-plugins",
        data() {
            return {
                classID: ["tac", "el-menu-vertical-demo"],
                plugins: {
                    "names": ["wpessential", "wpessential blog post", "wpessential team", "wpessential portfolio", "wpessential contact", "wpessential social kit"],
                    "plugins": {
                        "wpessential": {
                            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
                            "name": "WPEssential",
                            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                            "ver": "1.0.0",
                            "price": "$30"
                        },
                        "wpessential-blog-post": {
                            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
                            "name": "WPEssential Blog Post",
                            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                            "ver": "1.0.0",
                            "price": "$30"
                        },
                        "wpessential-team": {
                            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
                            "name": "WPEssential Team",
                            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                            "ver": "1.0.0",
                            "price": "$30"
                        },
                        "wpessential-portfolio": {
                            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
                            "name": "WPEssential Portfolio",
                            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                            "ver": "1.0.0",
                            "price": "$30"
                        },
                        "wpessential-contact": {
                            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
                            "name": "WPEssential Contact",
                            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                            "ver": "1.0.0",
                            "price": "$30"
                        },
                        "wpessential-social-kit": {
                            "image": "http://wpe/wp-content/plugins/wpessential/assets/images/plugin.jpg",
                            "name": "WPEssential Social Kit",
                            "desc": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
                            "ver": "1.0.0",
                            "price": "$30"
                        }
                    }
                }
            }
        }
    }
</script>
