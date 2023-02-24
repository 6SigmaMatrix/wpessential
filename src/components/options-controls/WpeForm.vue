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
import WpeNote from "./WpeNote";
import WpeText from "./WpeText";
import WpeTextarea from "./WpeTextarea";
import WpeUrl from "./WpeUrl";
import WpeNumber from "./WpeNumber";
import WpeButtonGroup from "./WpeButtonGroup";
import WpeButtonSet from "./WpeButtonSet";
import WpeColor from "./WpeColor";
import WpeDateTime from "./WpeDateTime";
import WpeDivider from "./WpeDivider";
import WpeWysiwyg from "./WpeWysiwyg";
import WpeCode from "./WpeCode";
import WpeImageSelect from "./WpeImageSelect";
import WpeInfo from "./WpeInfo";
//import WpeLinkColor from "./WpeLinkColor";
import WpeMedia from "./WpeMedia";
import WpeRadio from "./WpeRadio";
import WpeSelect from "./WpeSelect";
import WpeSlider from "./WpeSlider";
import WpeTime from "./WpeTime";
//import WpeToggle from "./WpeToggle";
import WpeTransfer from "./WpeTransfer";

export default {
	props     : [ 'fields' ],
	name      : "wpe-form",
	components: {
		WpeNote,
		WpeText,
		WpeTextarea,
		WpeUrl,
		WpeNumber,
		WpeButtonGroup,
		WpeButtonSet,
		WpeColor,
		WpeDateTime,
		WpeDivider,
		WpeWysiwyg,
		WpeCode,
		WpeImageSelect,
		WpeInfo,
		WpeMedia,
		WpeRadio,
		WpeSelect,
		WpeSlider,
		WpeTime,
		//WpeToggle,
		WpeTransfer
	}
};
</script>
