<template>
	<div class="field-wrapper">
		<el-form-item :class="field.fullwidth?'fullwidth':''" v-for="field in fields" v-if="fields" :key="field.id" :prop="field.id" class="field-wrapper-inner">
			<div v-show="field.title" :class="(field.type === 'info' || field.type === 'divider')?'wpessential-none':''" class="field-title">
				<label slot="label" class="field-label">
					{{ field.title }}
					<wpe-note v-show="field.note.title || field.note.content" :class="(field.type === 'info' || field.type === 'divider')?'wpessential-none':''" v-bind="field.note"></wpe-note>
				</label>
				<p v-show="field.subtitle" class="field-shot-description" v-html="field.subtitle"></p>
			</div>
			<div class="field">
				<component :is="'wpe-'+field.type" :field="field"></component>
				<p v-show="field.desc" :class="(field.type === 'info' || field.type === 'divider')?'wpessential-none':''" class="field-description" v-html="field.desc"></p>
			</div>
		</el-form-item>
	</div>
</template>

<script>
//import WpeLinkColor from "./WpeLinkColor.vue";
//import WpeToggle from "./WpeToggle.vue";
import WpeButtonGroup from "./WpeButtonGroup.vue";
import WpeButtonSet from "./WpeButtonSet.vue";
import WpeCode from "./WpeCode.vue";
import WpeColor from "./WpeColor.vue";
import WpeDateTime from "./WpeDateTime.vue";
import WpeDivider from "./WpeDivider.vue";
import WpeImageSelect from "./WpeImageSelect.vue";
import WpeInfo from "./WpeInfo.vue";
import WpeMedia from "./WpeMedia.vue";
import WpeNote from "./WpeNote.vue";
import WpeNumber from "./WpeNumber.vue";
import WpeRadio from "./WpeRadio.vue";
import WpeSelect from "./WpeSelect.vue";
import WpeSlider from "./WpeSlider.vue";
import WpeText from "./WpeText.vue";
import WpeTextarea from "./WpeTextarea.vue";
import WpeTime from "./WpeTime.vue";
import WpeTransfer from "./WpeTransfer.vue";
import WpeUrl from "./WpeUrl.vue";
import WpeWysiwyg from "./WpeWysiwyg.vue";

export default {
	props     : { fields: Array },
	name      : "wpe-form",
	components: {
		//WpeToggle,
		WpeButtonGroup,
		WpeButtonSet,
		WpeCode,
		WpeColor,
		WpeDateTime,
		WpeDivider,
		WpeImageSelect,
		WpeInfo,
		WpeMedia,
		WpeNote,
		WpeNumber,
		WpeRadio,
		WpeSelect,
		WpeSlider,
		WpeText,
		WpeTextarea,
		WpeTime,
		WpeTransfer,
		WpeUrl,
		WpeWysiwyg,
	}
};
</script>
