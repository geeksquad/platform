<div class="ui horizontal divider">
<i class="sitemap icon"></i>
SEO
</div>

<div class="ui segments">
	<div class="ui padded segment">

	<div class="field">
		<label for="seo_title">Title</label>
		<input type="text" name="seo_title" value="{{ old('seo_title', @$content->seo_title) }}">
	</div>

	<div class="field">
		<label for="seo_description">Description</label>
		<textarea name="seo_description" rows="2">{{ old('seo_description', @$content->seo_description) }}</textarea>
	</div>

	</div>
</div>