<?php

namespace WPEssential\Plugins\Query;

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;

abstract class QueryBuilder extends Callback implements Arrayable, JsonSerializable
{
	/*
	 * Show posts associated with certain author.
	 * https://developer.wordpress.org/reference/classes/wp_query/#author-parameters
	 *
	 * author (int) – use author id.
	 * author_name (string) – use ‘user_nicename‘ – NOT name.
	 * author__in (array) – use author id (available since version 3.7).
	 * author__not_in (array) – use author id (available since version 3.7).
	 * */
	public $author;
	public $author_name;
	public $author__in;
	public $author__not_in;

	/*
	 * Show posts associated with certain categories.
	 * https://developer.wordpress.org/reference/classes/wp_query/#category-parameters
	 *
	 * cat (int) – use category id.
	 * category_name (string) – use category slug.
	 * category__and (array) – use category id.
	 * category__in (array) – use category id.
	 * category__not_in (array) – use category id.
	 * */
	public $cat;
	public $category_name;
	public $category__and;
	public $category__in;
	public $category__not_in;

	/*
	 * Show posts associated with certain tags.
	 * https://developer.wordpress.org/reference/classes/wp_query/#tag-parameters
	 *
	 * tag (string) – use tag slug.
	 * tag_id (int) – use tag id.
	 * tag__and (array) – use tag ids.
	 * tag__in (array) – use tag ids.
	 * tag__not_in (array) – use tag ids.
	 * tag_slug__and (array) – use tag slugs.
	 * tag_slug__in (array) – use tag slugs.
	 * */
	public $tag;
	public $tag_id;
	public $tag__and;
	public $tag__in;
	public $tag__not_in;
	public $tag_slug__and;
	public $tag_slug__in;

	/*
	 * Show posts associated with certain taxonomy.
	 * https://developer.wordpress.org/reference/classes/wp_query/#taxonomy-parameters
	 *
	 * {tax} (string) – use taxonomy slug. (Deprecated since version 3.1 in favor of ‘tax_query‘).
	 * tax_query (array) – use taxonomy parameters (available since version 3.1).
	 * 		relation (string) – The logical relationship between each inner taxonomy array when there is more than one. Possible values are ‘AND’, ‘OR’. Do not use with a single inner taxonomy array.
	 * 		taxonomy (string) – Taxonomy.
	 * 		field (string) – Select taxonomy term by. Possible values are ‘term_id’, ‘name’, ‘slug’ or ‘term_taxonomy_id’. Default value is ‘term_id’.
	 * 		terms (int/string/array) – Taxonomy term(s).
	 * 		include_children (boolean) – Whether or not to include children for hierarchical taxonomies. Defaults to true.
	 * 		operator (string) – Operator to test. Possible values are ‘IN’, ‘NOT IN’, ‘AND’, ‘EXISTS’ and ‘NOT EXISTS’. Default value is ‘IN’.
	 * Important Note: tax_query takes an array of tax query arguments arrays (it takes an array of arrays).
	 * This construct allows you to query multiple taxonomies by using the relation parameter in the first (outer) array to describe the boolean relationship between the taxonomy arrays.
	 * */
	public $tax_query;

	/*
	 * Show posts based on a keyword search.
	 * https://developer.wordpress.org/reference/classes/wp_query/#search-parameters
	 *
	 * s (string) – Search keyword.
	 * */
	public $s;

	/*
	 * Display content based on post and page parameters. Remember that default post_type is only set to display posts but not pages.
	 * https://developer.wordpress.org/reference/classes/wp_query/#post-page-parameters
	 *
	 * p (int) – use post id.
	 * name (string) – use post slug.
	 * page_id (int) – use page id.
	 * pagename (string) – use page slug.
	 * post_parent (int) – use page id to return only child pages. Set to 0 to return only top-level entries.
	 * post_parent__in (array) – use post ids. Specify posts whose parent is in an array. (available since version 3.6)
	 * post_parent__not_in (array) – use post ids. Specify posts whose parent is not in an array. (available since version 3.6)
	 * post__in (array) – use post ids. Specify posts to retrieve. ATTENTION If you use sticky posts, they will be included (prepended!) in the posts you retrieve whether you want it or not. To suppress this behaviour use ignore_sticky_posts.
	 * post__not_in (array) – use post ids. Specify post NOT to retrieve.
	 * post_name__in (array) – use post slugs. Specify posts to retrieve. (Will be available in version 4.4)
	 * */
	public $p;
	public $name;
	public $page_id;
	public $pagename;
	public $post_parent;
	public $post_parent__in;
	public $post_parent__not_in;
	public $post__in;
	public $post__not_in;
	public $post_name__in;

	/*
	 * Show posts associated with certain
	 * https://developer.wordpress.org/reference/classes/wp_query/#post-type-parameters
	 *
	 * post_type (string / array) – use post types. Retrieves posts by post types, default value is ‘post‘. If ‘tax_query‘ is set for a query, the default value becomes ‘any‘;
	 * ‘post‘ – a post.
	 * ‘page‘ – a page.
	 * ‘revision‘ – a revision.
	 * ‘attachment‘ – an attachment. Whilst the default WP_Query post_status is ‘publish’, attachments have a default post_status of ‘inherit’. This means no attachments will be returned unless you also explicitly set post_status to ‘inherit’ or ‘any’. See Status parameters section below.
	 * ‘nav_menu_item‘ – a navigation menu item
	 * ‘any‘ – retrieves any type except revisions and types with ‘exclude_from_search’ set to true.
	 * ** Custom Post Types (e.g. movies)
	 * */
	public $post_type;

	/*
	 * Show posts associated with certain
	 * https://developer.wordpress.org/reference/classes/wp_query/#status-parameters
	 *
	 * post_status (string / array) – use post status. Retrieves posts by post status. Default value is ‘publish‘, but if the user is logged in, ‘private‘ is added. Public custom post statuses are also included by default. And if the query is run in an admin context (administration area or AJAX call), public statuses are added too. By default public statuses are ‘future‘, ‘draft‘ and ‘pending‘.
	 * ‘publish‘ – a published post or page.
	 * ‘pending‘ – post is pending review.
	 * ‘draft‘ – a post in draft status.
	 * ‘auto-draft‘ – a newly created post, with no content.
	 * ‘future‘ – a post to publish in the future.
	 * ‘private‘ – not visible to users who are not logged in.
	 * ‘inherit‘ – a revision. see get_children().
	 * ‘trash‘ – post is in trashbin (available since version 2.9).
	 * ‘any‘ – retrieves any status except for ‘inherit’, ‘trash’ and ‘auto-draft’. Custom post statuses with ‘exclude_from_search’ set to true are also excluded.
	 * */
	public $post_status;

	/*
	 * Show content based on post and page parameters. Remember that default post_type is only set to display posts but not pages.
	 * https://developer.wordpress.org/reference/classes/wp_query/#password-parameters
	 *
	 * has_password (bool) – true for posts with passwords ; false for posts without passwords ; null for all posts with and without passwords (available since version 3.9).
	 * post_password (string) – show posts with a particular password (available since version 3.9)
	 * */
	public $has_password;
	public $post_password;

	/*
	 * Since Version 4.9 Introduced the `$comment_count` parameter. It can be either an Integer or an Array.
	 * https://developer.wordpress.org/reference/classes/wp_query/#comment-parameters
	 *
	 * comment_count (int) – The amount of comments your CPT has to have ( Search operator will do a ‘=’ operation )
	 * comment_count (Array) – If comment_count is an array, it should have two arguments:
	 * 		‘value‘ – The amount of comments your post has to have when comparing
	 * 		‘compare‘ – The search operator. Possible values are ‘=’, ‘!=’, ‘>’, ‘>=’, ‘<‘, ‘<=’. Default value is ‘=’.
	 * */
	public $comment_count;

	/*
	 * Pagination Parameters
	 * https://developer.wordpress.org/reference/classes/wp_query/#pagination-parameters
	 *
	 * nopaging (boolean) – show all posts or use pagination. Default value is ‘false’, use paging.
	 * posts_per_page (int) – number of post to show per page (available since version 2.1, replaced showposts parameter). Use 'posts_per_page'=>-1 to show all posts (the 'offset' parameter is ignored with a -1 value). Set the ‘paged’ parameter if pagination is off after using this parameter. Note: if the query is in a feed, wordpress overwrites this parameter with the stored ‘posts_per_rss’ option. To reimpose the limit, try using the ‘post_limits’ filter, or filter ‘pre_option_posts_per_rss’ and return -1
	 * posts_per_archive_page (int) – number of posts to show per page – on archive pages only. Over-rides posts_per_page and showposts on pages where is_archive() or is_search() would be true.
	 * offset (int) – number of post to displace or pass over. Warning: Setting the offset parameter overrides/ignores the paged parameter and breaks pagination. The 'offset' parameter is ignored when 'posts_per_page'=>-1 (show all posts) is used.
	 * paged (int) – number of page. Show the posts that would normally show up just on page X when using the “Older Entries” link.
	 * page (int) – number of page for a static front page. Show the posts that would normally show up just on page X of a Static Front Page.
	 * ignore_sticky_posts (boolean) – ignore post stickiness (available since version 3.1, replaced caller_get_posts parameter). false (default): move sticky posts to the start of the set. true: do not move sticky posts to the start of the set.
	 * */
	public $nopaging;
	public $posts_per_page;
	public $posts_per_archive_page;
	public $offset;
	public $paged;
	public $page;
	public $ignore_sticky_posts;

	/*
	 * Sort retrieved posts.
	 * https://developer.wordpress.org/reference/classes/wp_query/#order-orderby-parameters
	 *
	 * order (string | array) – Designates the ascending or descending order of the ‘orderby‘ parameter. Defaults to ‘DESC’. An array can be used for multiple order/orderby sets.
	 * 		‘ASC‘ – ascending order from lowest to highest values (1, 2, 3; a, b, c).
	 * 		‘DESC‘ – descending order from highest to lowest values (3, 2, 1; c, b, a).
	 * orderby (string | array) – Sort retrieved posts by parameter. Defaults to ‘date (post_date)’. One or more options can be passed.
	 * 		‘none‘ – No order (available since version 2.8).
	 * 		‘ID‘ – Order by post id. Note the capitalization.
	 * 		‘author‘ – Order by author.
	 * 		‘title‘ – Order by title.
	 * 		‘name‘ – Order by post name (post slug).
	 * 		‘type‘ – Order by post type (available since version 4.0).
	 * 		‘date‘ – Order by date.
	 * 		‘modified‘ – Order by last modified date.
	 * 		‘parent‘ – Order by post/page parent id.
	 * 		‘rand‘ – Random order.
	 * 		‘comment_count‘ – Order by number of comments (available since version 2.9).
	 * 		‘relevance‘ – Order by search terms in the following order: First, whether the entire sentence is matched. Second, if all the search terms are within the titles. Third, if any of the search terms appear in the titles. And, fourth, if the full sentence appears in the contents.
	 * 		‘menu_order‘ – Order by Page Order. Used most often for pages (Order field in the Edit Page Attributes box) and for attachments (the integer fields in the Insert / Upload Media Gallery dialog), but could be used for any post type with distinct ‘menu_order‘ values (they all default to 0).
	 * 		‘meta_value‘ – Note that a ‘meta_key=keyname‘ must also be present in the query. Note also that the sorting will be alphabetical which is fine for strings (i.e. words), but can be unexpected for numbers (e.g. 1, 3, 34, 4, 56, 6, etc, rather than 1, 3, 4, 6, 34, 56 as you might naturally expect). Use ‘meta_value_num‘ instead for numeric values. You may also specify ‘meta_type‘ if you want to cast the meta value as a specific type. Possible values are ‘NUMERIC’, ‘BINARY’, ‘CHAR’, ‘DATE’, ‘DATETIME’, ‘DECIMAL’, ‘SIGNED’, ‘TIME’, ‘UNSIGNED’, same as in ‘$meta_query‘. When using ‘meta_type’ you can also use ‘meta_value_*’ accordingly. For example, when using DATETIME as ‘meta_type’ you can use ‘meta_value_datetime’ to define order structure.
	 * 		‘meta_value_num‘ – Order by numeric meta value (available since version 2.8). Also note that a ‘meta_key=keyname‘ must also be present in the query. This value allows for numerical sorting as noted above in ‘meta_value‘.
	 * 		‘post__in‘ – Preserve post ID order given in the post__in array (available since version 3.5). Note – the value of the order parameter does not change the resulting sort order.
	 * 		‘post_name__in‘ – Preserve post slug order given in the ‘post_name__in’ array (available since Version 4.6). Note – the value of the order parameter does not change the resulting sort order.
	 * 		‘post_parent__in‘ -Preserve post parent order given in the ‘post_parent__in’ array (available since Version 4.6). Note – the value of the order parameter does not change the resulting sort order.
	 * */
	public $order;
	public $orderby;

	/*
	 * Show posts associated with a certain time and date period.
	 * https://developer.wordpress.org/reference/classes/wp_query/#date-parameters
	 *
	 * year (int) – 4 digit year (e.g. 2011).
	 * monthnum (int) – Month number (from 1 to 12).
	 * w (int) – Week of the year (from 0 to 53). Uses MySQL WEEK command. The mode is dependent on the “start_of_week” option.
	 * day (int) – Day of the month (from 1 to 31).
	 * hour (int) – Hour (from 0 to 23).
	 * minute (int) – Minute (from 0 to 60).
	 * second (int) – Second (0 to 60).
	 * m (int) – YearMonth (For e.g.: 201307).
	 * date_query (array) – Date parameters (available since version 3.7).
	 * 		year (int) – 4 digit year (e.g. 2011).
	 * 		month (int) – Month number (from 1 to 12).
	 * 		week (int) – Week of the year (from 0 to 53).
	 * 		day (int) – Day of the month (from 1 to 31).
	 * 		hour (int) – Hour (from 0 to 23).
	 * 		minute (int) – Minute (from 0 to 59).
	 * 		second (int) – Second (0 to 59).
	 * 		after (string/array) – Date to retrieve posts after. Accepts strtotime()-compatible string, or array of ‘year’, ‘month’, ‘day’ values:
	 * 			year (string) Accepts any four-digit year. Default is empty.
	 * 			month (string) The month of the year. Accepts numbers 1-12. Default: 12.
	 * 			day (string) The day of the month. Accepts numbers 1-31. Default: last day of month.
	 * 		before (string/array) – Date to retrieve posts before. Accepts strtotime()-compatible string, or array of ‘year’, ‘month’, ‘day’ values:
	 * 			year (string) Accepts any four-digit year. Default is empty.
	 * 			month (string) The month of the year. Accepts numbers 1-12. Default: 1.
	 * 			day (string) The day of the month. Accepts numbers 1-31. Default: 1.
	 * 		inclusive (boolean) – For after/before, whether exact value should be matched or not’.
	 * 		compare (string) – See WP_Date_Query::get_compare().
	 * 		column (string) – Posts column to query against. Default: ‘post_date’.
	 * 		relation (string) – OR or AND, how the sub-arrays should be compared. Default: AND.
	 * */
	public $year;
	public $monthnum;
	public $w;
	public $day;
	public $hour;
	public $minute;
	public $second;
	public $m;
	public $date_query;

	/*
	 * Show posts associated with a certain custom field.
	 * This part of the query is parsed by WP_Meta_Query, so check the docs for it as well in case this list of arguments isn’t up to date.
	 * https://developer.wordpress.org/reference/classes/wp_query/#custom-field-post-meta-parameters
	 * meta_key (string) – Custom field key.
	 * meta_value (string) – Custom field value.
	 * meta_value_num (number) – Custom field value.
	 * meta_compare (string) – Operator to test the ‘meta_value‘. Possible values are ‘=’, ‘!=’, ‘>’, ‘>=’, ‘<‘, ‘<=’, ‘LIKE’, ‘NOT LIKE’, ‘IN’, ‘NOT IN’, ‘BETWEEN’, ‘NOT BETWEEN’, ‘NOT EXISTS’, ‘REGEXP’, ‘NOT REGEXP’ or ‘RLIKE’. Default value is ‘=’.
	 * meta_query (array) – Custom field parameters (available since version 3.1).
	 * 		relation (string) – The logical relationship between each inner meta_query array when there is more than one. Possible values are ‘AND’, ‘OR’. Do not use with a single inner meta_query array.
	 *
	 * meta_query also contains one or more arrays with the following keys:
	 *
	 * key (string) – Custom field key.
	 * value (string|array) – Custom field value. It can be an array only when compare is 'IN', 'NOT IN', 'BETWEEN', or 'NOT BETWEEN'. You don’t have to specify a value when using the 'EXISTS' or 'NOT EXISTS' comparisons in WordPress 3.9 and up.
	 * (Note: Due to bug #23268, value is required for NOT EXISTS comparisons to work correctly prior to 3.9. You must supply some string for the value parameter. An empty string or NULL will NOT work. However, any other string will do the trick and will NOT show up in your SQL when using NOT EXISTS. Need inspiration? How about 'bug #23268'.)
	 * compare (string) – Operator to test. Possible values are ‘=’, ‘!=’, ‘>’, ‘>=’, ‘<‘, ‘<=’, ‘LIKE’, ‘NOT LIKE’, ‘IN’, ‘NOT IN’, ‘BETWEEN’, ‘NOT BETWEEN’, ‘EXISTS’ and ‘NOT EXISTS’. Default value is ‘=’.
	 * type (string) – Custom field type. Possible values are ‘NUMERIC’, ‘BINARY’, ‘CHAR’, ‘DATE’, ‘DATETIME’, ‘DECIMAL’, ‘SIGNED’, ‘TIME’, ‘UNSIGNED’. Default value is ‘CHAR’.
	 * The ‘type’ DATE works with the ‘compare’ value BETWEEN only if the date is stored at the format YYYY-MM-DD and tested with this format.
	 * Important Note: meta_query takes an array of meta query arguments arrays (it takes an array of arrays) – you can see this in the examples below.
	 * This construct allows you to query multiple metadatas by using the relation parameter in the first (outer) array to describe the boolean relationship between the meta queries. Accepted arguments are ‘AND’, ‘OR’. The default is ‘AND’.
	 * */
	public $meta_key;
	public $meta_value;
	public $meta_value_num;
	public $meta_compare;
	public $meta_query;

	/*
	 * Show posts if user has the appropriate capability
	 * https://developer.wordpress.org/reference/classes/wp_query/#permission-parameters
	 *
	 * perm (string) – User permission.
	 * */
	public $perm;

	/*
	 * Used with the attachments post type.
	 * https://developer.wordpress.org/reference/classes/wp_query/#mime-type-parameters
	 *
	 * post_mime_type (string/array) – Allowed mime types.
	 * */
	public $post_mime_type;

	/*
	 * Stop the data retrieved from being added to the cache.
	 * https://developer.wordpress.org/reference/classes/wp_query/#caching-parameters
	 *
	 * cache_results (boolean) – Post information cache.
	 * update_post_meta_cache (boolean) – Post meta information cache.
	 * update_post_term_cache (boolean) – Post term information cache.
	 * */
	public $cache_results;
	public $update_post_meta_cache;
	public $update_post_term_cache;

	/*
	 * Set return values.
	 * https://developer.wordpress.org/reference/classes/wp_query/#return-fields-parameter
	 *
	 * fields (string) – Which fields to return. There are three options:
	 * 		'all' – Return all fields (default).
	 * 		'ids' – Return an array of post IDs.
	 * 		'id=>parent' – Return an array of stdClass objects with ID and post_parent properties.
	 * Passing anything else will return all fields (default) – an array of post objects.
	*/
	public $fields;

	/**
	 * Call the class construct.
	 *
	 * @param mixed ...$arguments
	 * @return static
	 */
	public static function make ( ...$arguments )
	{
		return new static( $arguments );
	}

	/**
	 * Call the WP_Query
	 *
	 * @param array $post_type
	 */

	public function __construct ( $post_type )
	{
		if ( $post_type ) {
			$this->post_type( $post_type );
		} else {
			$this->post_type( 'post' );
		}

		return $this;

	}

	/**
	 * Prepare the query fields in json.
	 *
	 * @return json
	 */
	public function jsonSerialize ()
	{
		return $this;
	}

	/**
	 * Prepare the query fields in array.
	 *
	 * @return array
	 */
	public function toArray ()
	{
		$return = (array) $this;
		return array_filter( $return );
	}
}
