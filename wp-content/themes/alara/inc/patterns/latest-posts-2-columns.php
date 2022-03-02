<?php
return array(
			'title'         => __( 'Latest Posts 2 Columns', 'alara' ),
			'blockTypes'	=> array( 'core/query' ),
			'categories'    => array( 'alara-blog' ),
			'keywords'		=> array( 'query' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:query {"queryId":1,"query":{"offset":0,"perPage":6,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":""} -->
		<div class="wp-block-query">

			<!-- wp:post-template -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"white"} -->
				<div class="wp-block-group has-white-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">

					<!-- wp:post-featured-image /-->

					<!-- wp:group {"backgroundColor":"white","className":"is-style-no-block-gap"} -->
					<div class="wp-block-group has-white-background-color has-background is-style-no-block-gap">

						<!-- wp:post-title {"isLink":true,"className":"is-style-links-underline-on-hover"} /-->

						<!-- wp:post-excerpt /-->

						<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
						<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false} /-->

							<!-- wp:post-date /-->

						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"className":"is-style-links-underline-on-hover"} /-->

				<!-- wp:query-pagination-numbers {"className":"is-style-links-underline-on-hover"} /-->

				<!-- wp:query-pagination-next {"className":"is-style-links-underline-on-hover"} /-->
			<!-- /wp:query-pagination -->

		</div>
		<!-- /wp:query -->',
);
