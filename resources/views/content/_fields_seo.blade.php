<div class="ui segments">

	<div class="ui padded segment">

		<h3 class="ui centered header"><i class="sitemap icon"></i> SEO</h3>

		<div class="field">
			<label for="seo_title">Title</label>
			<input type="text" name="seo_title" value="{{ old('seo_title', @$content->seo_title) }}">
		</div>

		<div class="field">
			<label for="seo_description">Description</label>
			<textarea name="seo_description" rows="2">{{ old('seo_description', @$content->seo_description) }}</textarea>
		</div>

		<div class="inline field">
		  <div class="ui toggle checkbox">
			<input name="seo_index" type="checkbox" value="1" tabindex="0" class="hidden" {{ old('seo_index', @$content->seo_index) == '1' ? 'checked' : '' }}>
				<label>Indexed by search enginges</label>
		  </div>
		</div>

	</div>
</div>
