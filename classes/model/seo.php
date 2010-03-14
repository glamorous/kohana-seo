<?php defined('SYSPATH') or die ('No direct script access.');
/**
  * Jelly Model: Seo
  * @author Jonas De Smet | Glamorous.be
  */
class Model_Seo extends Jelly_Model
{
	public static function initialize(Jelly_Meta $meta)
	{
		$meta>table('seo')->fields(array(
			'id' => new Field_Primary,
			'keywords' => new Field_String,
			'description' => new Field_String,
			'robots' => new Field_Enum(array(
				'choices' => array('all','noindex','nofollow','noindex,nofollow'),
				'default' => 'all',
			)),
		));
	}
}
?>