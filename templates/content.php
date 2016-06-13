<?php $this->layout('theme::layout/05_page') ?>
<article>
    <?php if ($params['html']['date_modified']) { ?>
        <div class="page-header sub-header clearfix">
            <h1><?php
                if ($page['breadcrumbs']) {
                    echo $this->get_breadcrumb_title($page, $base_page);
                } else {
                    echo $page['title'];
                }
                ?>
            </h1>
        </div>
    <?php } else { ?>
        <div class="page-header">
            <h1><?php
                if ($page['breadcrumbs']) {
                    echo $this->get_breadcrumb_title($page, $base_page);
                } else {
                    echo $page['title'];
                }
                ?>
            </h1>
        </div>
    <?php } ?>

    <?= $page['content']; ?>

    <?php if(!empty($page['prev']) || !empty($page['next'])) { ?>

    <nav>
	<span style="float: left; font-size: 13px; line-height: 16px; color: gray;">
		Last Updated <?= date("l, F j, Y", $page['modified_time']); ?>
	</span>
        <ul class="pager">
            <?php if(!empty($page['prev'])) { ?><li><a href="<?= $base_url . $page['prev']->getUrl() ?>">Previous</a></li><?php } ?>
            <?php if(!empty($page['next'])) { ?><li><a href="<?= $base_url . $page['next']->getUrl() ?>">Next</a></li><?php } ?>
        </ul>
    </nav>
    <?php } ?>
</article>

