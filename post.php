<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php if ($this->options->postshowthumb == 'able'): if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>" style="background-image:url(<?php parseFieldsThumb($this);?>);">
	<div class="post-header-thumb-op" style="background-image:url(<?php parseFieldsThumb($this);?>);"></div>
	<div class="post-header-thumb-cover">
		<div class="post-header-thumb-container">
			<div class="post-header-thumb-title">
				<?php $this->title() ?>
			</div>
			<div class="post-header-thumb-meta">
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">发表于 <?php $this->date('Y/m/d H:i'); ?></time>  分类 - <?php $this->category(''); ?> 共有 <a href="#comments"><?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
			</div>
			<div class="post-tags">
				<?php $this->tags(' ', true, ''); ?>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
<?php $thumb = showThumb($this,null,true);?>
<?php if(!empty($thumb)):?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
	<div class="post-header-thumb-op" style="background-image:url(<?php echo $thumb;?>);"></div>
	<div class="post-header-thumb-cover">
		<div class="post-header-thumb-container">
			<div class="post-header-thumb-title">
				<?php $this->title() ?>
			</div>
			<div class="post-header-thumb-meta">
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">发表于 <?php $this->date('Y/m/d H:i'); ?></time>  分类 - <?php $this->category(''); ?> 共有 <a href="#comments"><?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
			</div>
			<div class="post-tags">
				<?php $this->tags(' ', true, ''); ?>
			</div>
		</div>
	</div>
</div>
<?php else : ?>
<div class="post-header-thumb <?php if ($this->options->colorBgPosts == 'defaultColor'): ?> bg-deepgrey<?php elseif ($this->options->colorBgPosts == 'customColor'): ?><?php if (array_key_exists('green',unserialize($this->___fields()))): ?> bg-green<?php elseif (array_key_exists('red',unserialize($this->___fields()))): ?> bg-red<?php elseif (array_key_exists('yellow',unserialize($this->___fields()))): ?> bg-yellow<?php elseif (array_key_exists('blue',unserialize($this->___fields()))): ?> bg-blue<?php elseif (array_key_exists('purple',unserialize($this->___fields()))): ?> bg-purple<?php else : ?> bg-<?php echo randBgColor(); ?><?php endif; ?><?php endif; ?>">
	<div class="post-header-thumb-op" style="background-image:url(<?php $this->options->themeUrl('images/thumbs/'.mt_rand(0,9).'.jpg'); ?>);"></div>
	<div class="post-header-thumb-cover">
		<div class="post-header-thumb-container">
			<div class="post-header-thumb-title">
				<?php $this->title() ?>
			</div>
			<div class="post-header-thumb-meta">
				<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">发表于 <?php $this->date('Y/m/d H:i'); ?></time>  分类 - <?php $this->category(''); ?> 共有 <a href="#comments"><?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
			</div>
			<div class="post-tags">
				<?php $this->tags(' ', true, ''); ?>
			</div>
		</div>
	</div>
</div>
<?php endif;endif;endif; ?>

<article class="main-content <?php if ($this->options->postshowthumb == 'able'): ?>post-page<?php else: ?>page-page<?php endif; ?>" itemscope itemtype="http://schema.org/Article">
	<div class="post-header">
		<h1 class="post-title" itemprop="name headline">
			<?php $this->title() ?>
		</h1>
		<div class="post-data">
			<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">发表于 <?php $this->date('Y/m/d H:i'); ?></time>  分类 - <?php $this->category(''); ?> 共有 <a href="#comments"><?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
		</div>
	</div>
	<div id="post-content" class="post-content" itemprop="articleBody">
        <p class="post-tags">
            <?php $this->tags(' ', true, ''); ?>
        </p>
		<?php parseContent($this); ?>
		<p class="post-info">
			本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可<br>本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名<br>最后编辑时间为: <?php echo date('Y/m/d H:i' , $this->modified); ?>
		</p>
	</div>
</article>

<div id="post-bottom-bar" class="post-bottom-bar">
	<div class="bottom-bar-inner">
		<div class="bottom-bar-items social-share left">
			<span style="font-size:13px;color:#C0C4CC">🐶 A dog here</span>
			<!-- <span class="bottom-bar-item">分享: </span>
			<span class="bottom-bar-item bottom-bar-facebook"><a href="https://connect.qq.com/widget/shareqq/index.html?url=<?php echo urlencode($this->permalink()); ?>&title=<?php $this->title() ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow">QQ</a></span>
			<span class="bottom-bar-item bottom-bar-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($this->permalink()); ?>&text=<?php echo urlencode($this->title()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow">Twitter</a></span>
			<span class="bottom-bar-item bottom-bar-weibo"><a href="http://service.weibo.com/share/share.php?url=<?php echo urlencode($this->permalink()); ?>&amp;title=<?php echo urlencode($this->title()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow">Weibo</a></span>
			<span class="bottom-bar-item bottom-bar-qrcode"><a href="https://api.caoliao.net/api/qrcode/code?text=<?php echo urlencode($this->permalink()); ?>" target="_blank" rel="nofollow">QRcode</a></span> -->
		</div>
		<div class="bottom-bar-items right">
			<span class="bottom-bar-item"><?php theNext($this); ?></span>
			<span class="bottom-bar-item"><?php thePrev($this); ?></span>
			<span class="bottom-bar-item"><a href="#footer">↓</a></span>
			<span class="bottom-bar-item"><a href="#">↑</a></span>
		</div>
	</div>
</div>

<?php if ($this->options->relatedPosts == 'able'): ?>
<?php $this->related(6)->to($relatedPosts); ?>
<?php if($relatedPosts->have()): ?>
<div class="related-post-lists">
	<div class="post-lists">
		<div class="post-lists-body">
		<?php while($relatedPosts->next()): ?>
			<div class="post-list-item">
				<div class="post-list-item-container">
					<div class="item-label">
						<div class="item-title"><a href="<?php $relatedPosts->permalink() ?>"><?php $relatedPosts->title() ?></a></div>
						<div class="item-meta clearfix">
							<?php if (array_key_exists('book',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-book" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('game',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-game" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('note',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-note" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('chat',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-chat" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('code',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-code" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('image',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-image" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('web',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-web" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('link',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-link" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('design',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-design" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php elseif (array_key_exists('lock',unserialize($relatedPosts->___fields()))): ?>
							<div class="item-meta-ico bg-ico-lock" style="background: url(<?php $relatedPosts->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
							<?php else : ?>
							<div class="item-meta-ico bg-ico-<?php echo randBgIco(); ?>" style="background: url(<?php $this->options->themeUrl('images/bg-ico.png'); ?>) no-repeat;background-size: 40px auto;"></div>
	                        <?php endif; ?>
							<div class="item-meta-cat"><?php $relatedPosts->category(''); ?></div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>