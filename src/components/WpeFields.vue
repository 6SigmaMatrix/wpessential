<template>
	<div class="field-wrapper">
		<el-form-item :class="field.fullwidth?'fullwidth':''" v-for="field in fields" v-if="fields" :key="field.id" :prop="field.id" class="field-wrapper-inner">
			<div v-show="field.title" :class="(field.type === 'info' || field.type === 'divider')?'wpessential-none':''" class="field-title">
				<label class="field-label">
					{{ field.title }}
					<wpe-note v-if="field.note.title || field.note.content" :class="(field.type === 'info' || field.type === 'divider')?'wpessential-none':''" v-bind="field.note"></wpe-note>
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
//import WpeLinkColor from "./controls/WpeLinkColor.vue";
import WpeBackground from "./controls/WpeBackground.vue";
import WpeSwitcher from "./controls/WpeSwitcher.vue";
import WpeButtonGroup from "./controls/WpeButtonGroup.vue";
import WpeButtonSet from "./controls/WpeButtonSet.vue";
import WpeCode from "./controls/WpeCode.vue";
import WpeColor from "./controls/WpeColor.vue";
import WpeDateTime from "./controls/WpeDateTime.vue";
import WpeDivider from "./controls/WpeDivider.vue";
import WpeImageSelect from "./controls/WpeImageSelect.vue";
import WpeInfo from "./controls/WpeInfo.vue";
import WpeMedia from "./controls/WpeMedia.vue";
import WpeNote from "./controls/WpeNote.vue";
import WpeNumber from "./controls/WpeNumber.vue";
import WpeRadio from "./controls/WpeRadio.vue";
import WpeSelect from "./controls/WpeSelect.vue";
import WpeSlider from "./controls/WpeSlider.vue";
import WpeText from "./controls/WpeText.vue";
import WpeTextarea from "./controls/WpeTextarea.vue";
import WpeTime from "./controls/WpeTime.vue";
import WpeTransfer from "./controls/WpeTransfer.vue";
import WpeUrl from "./controls/WpeUrl.vue";
import WpeWysiwyg from "./controls/WpeWysiwyg.vue";

export default {
	props      : { fields : Array },
	components : {
		WpeBackground,
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
		WpeSwitcher,
		WpeText,
		WpeTextarea,
		WpeTime,
		WpeTransfer,
		WpeUrl,
		WpeWysiwyg
	}
};
</script>
