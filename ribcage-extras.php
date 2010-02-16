<?php
/**
 * Additional functions to make Events Manager play nicely with Ribcage.
 *
 * Adds
 * - Categories in RSS feeds
 * - Slugs for categories
 * - Support for at /?dbem_ical=main
 *
 * @author Alex Andrews (alex@recordsonribs.com)
 **/

/**
 * The following additions expand categories to allow them to be used more
 * easily as 'artists' as on the Records On Ribs website.
 **/

/**
 * Creates a slug from a category name.
 *
 * @author Alex Andrews (alex@recordsonribs.com)
 * @param int $id The ID of the category.
 * @return string The slug of the category.
 */
function dbem_categories_slug( $id ) {
	
}

/**
 * Converts a category slug into its numerical category ID for lookup.
 *
 * @author Alex Andrews (alex@recordsonribs.com)
 * @param string $slug The slug of the category.
 * @return int ID of category.
 **/
function dbem_category_slug_to_id( $slug ) {
	$categories =  dbem_get_categories();
	
	foreach ($categories as $category){
		if (ribcage_slugize($category['category_name']) == $slug) {
			return $category['category_id'];
		}
	}
	
	return null;
}

/**
 * Automatically populates categories with artist names.
 *
 * @author Alex Andrews (alex@recordsonribs.com)
 */
function dbem_populate_categories_with_bands() {
	
}

function dbem_is_category_page() {
	return (dbem_is_events_page () && (isset ( $_REQUEST ['category'] ) && $_REQUEST ['category'] != ''));
}
?>