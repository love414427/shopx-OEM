<?php /*a:1:{s:86:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/warehousegoods/goods_search.html";i:1660808542;}*/ ?>
<?php if(!empty($data)): foreach($data as $v): ?>
        <li data-gid="<?php echo htmlentities($v['id']); ?>" data-add-html='<a href="javascript:;" class="am-icon-btn am-icon-plus am-success goods-add-submit" data-type="add"></a>' data-del-html='<a href="javascript:;" class="am-icon-btn am-icon-remove am-danger goods-del-submit" data-type="del"></a>'>
            <div class="am-gallery-item am-radius">
                <a href="<?php echo htmlentities($v['goods_url']); ?>" target="_blank" title="<?php echo htmlentities($v['title']); ?>">
                    <img src="<?php echo htmlentities($v['images']); ?>" alt="<?php echo htmlentities($v['title']); ?>" />
                </a>
                <h3 class="am-gallery-title"><?php echo htmlentities($v['title']); ?></h3>
                <div class="icon-submit-container">
                    <?php if(isset($v['is_exist']) and $v['is_exist'] == 1): ?>
                        <a href="javascript:;" class="am-icon-btn am-icon-remove am-danger goods-del-submit" data-type="del"></a>
                    <?php else: ?>
                        <a href="javascript:;" class="am-icon-btn am-icon-plus am-success goods-add-submit" data-type="add"></a>
                    <?php endif; ?>
                </div>
            </div>
        </li>
    <?php endforeach; else: ?>
    <div class="table-no"><i class="am-icon-warning"></i> 没有相关商品</div>
<?php endif; ?>