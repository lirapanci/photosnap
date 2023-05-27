<?php
    $footer_banner = get_field('footer_banner');
?>
<div style="background-image: url('<?php echo $footer_banner['image'];?>')" class="md:flex justify-between py-9 px-9 md:px-40 items-center mt-9">
    <h2 class="text-[40px] text-white uppercase tracking-[4.16667px] font-bold"><?php echo $footer_banner['title']; ?></h2>
    <a href="<?php echo $footer_banner['button_link']?>" class="text-white uppercase text-xs hover:underline">Get an Invite
        <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
    </a>
</div>