<?php /*a:1:{s:86:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/paylog/module/business_list.html";i:1660808542;}*/ ?>
<!-- 关联业务数据 -->
<?php if(!empty($module_data) and !empty($module_data['business_list']) and is_array($module_data['business_list'])): ?>
    <dl class="dl-content dl-content-dd-only dl-content-dd-compact">
        <?php foreach($module_data['business_list'] as $v): ?>
            <dd>
                <div class="am-nbfc">
                    <?php if(!empty($v['business_id'])): ?>
                        <span class="am-icon-circle-thin am-fl">
                            <strong><?php echo htmlentities($v['business_id']); ?></strong>
                        </span>
                    <?php endif; if(!empty($v['business_no'])): ?>
                        <span class="am-icon-bookmark-o am-fr">
                            <strong><?php echo htmlentities($v['business_no']); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </dd>
        <?php endforeach; ?>
    </dl>
<?php endif; ?>