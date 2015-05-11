<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
?>

<?php 
if($this->relevant_search){
    foreach($this->relevant_search as $item){ ?>
        <?php $link = JRoute::_('index.php?option=com_ksenmart&view=search&Itemid='.$this->shop_id.'&value='.$item->title); ?>
        <div class="item row-fluid">
            <div class="img span1">
                <a href="<?php echo $link; ?>" title="<?php echo $item->title; ?>"><img src="<?php echo JUri::root(); ?>/components/com_ksenmart/css/i/icon_search.png" alt="<?php echo $item->title; ?>" width="32px" height="32px" /></a>
            </div>
            <div class="title span9">
                <div>
                    <a href="<?php echo $link; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a>
                </div>
                <div class="type">частый запрос</div>
            </div>
            <div class="price span2 pull-right"><?php echo $item->product_total .' товаров'; ?></div>
        </div>
    <?php } ?>
<?php } ?>