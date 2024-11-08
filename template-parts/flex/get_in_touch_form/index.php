<?php
global $page_content;
$label = $page_content['label'];
$heading = $page_content['heading'];
$description = $page_content['description'];
$phone = $page_content['phone'];
$email = $page_content['email'];
$address = $page_content['address'];
$form = $page_content['form'];
?>
<section class="get_in_touch_container">
    <div class="container-main container flex">
        <div class="form_info">
            <?php if(!empty($label)) : ?><h3><?php echo $label; ?></h3><?php endif; ?>
            <?php if(!empty($heading)) : ?><h1><?php echo $heading; ?></h1><?php endif; ?>
            <?php if(!empty($description)): ?><p><?php echo $description; ?></p><?php endif; ?>
            <div class="contacts">
                <?php if(!empty($phone)) : ?>
                    <p>
                        <svg class="phone" width="30" height="30" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.5963 33.0344C21.158 32.4528 18.845 31.4349 16.7692 30.0298L19.6321 25.9241C20.1028 25.2816 20.7996 24.8415 21.582 24.6926C22.3645 24.5437 23.1742 24.6971 23.848 25.1219C24.3671 25.4522 24.9019 25.7511 25.421 26.05C25.8118 26.241 26.1587 26.511 26.4398 26.8429C26.721 27.1748 26.9302 27.5614 27.0544 27.9783C27.1786 28.3951 27.215 28.8332 27.1613 29.2648C27.1076 29.6965 26.9649 30.1123 26.7424 30.486L25.7671 31.9804C25.5929 32.3881 25.2774 32.7192 24.8785 32.9128C24.4797 33.1065 24.0244 33.1496 23.5963 33.0344ZM5.77344 12.0654L7.34651 11.0901C7.7113 10.8534 8.12121 10.6948 8.55036 10.6245C8.97951 10.5542 9.41859 10.5736 9.83987 10.6815C10.2611 10.7894 10.6555 10.9834 10.998 11.2514C11.3405 11.5194 11.6237 11.8555 11.8297 12.2385C12.1286 12.8048 12.4275 13.3396 12.7579 13.8115C13.1826 14.4853 13.336 15.295 13.1871 16.0774C13.0382 16.8599 12.5981 17.5567 11.9556 18.0273L7.77123 20.9375C6.35466 18.8794 5.32087 16.5827 4.71949 14.1576C4.62486 13.7407 4.6783 13.3039 4.87061 12.9222C5.06293 12.5404 5.38214 12.2375 5.77344 12.0654Z" fill="#EBE9E3"/>
                            <path d="M18.877 11.0115C20.963 11.0115 22.9635 11.8401 24.4386 13.3152C25.9136 14.7902 26.7423 16.7908 26.7423 18.8768" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.3027 4.81356C17.8247 4.75031 18.35 4.71879 18.8758 4.71918C22.6306 4.71918 26.2317 6.21078 28.8867 8.86584C31.5418 11.5209 33.0334 15.1219 33.0334 18.8768C33.0338 19.4026 33.0023 19.9279 32.939 20.4498" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M23.5963 33.0344C21.158 32.4528 18.845 31.4349 16.7692 30.0298L19.6321 25.9241C20.1028 25.2816 20.7996 24.8415 21.582 24.6926C22.3645 24.5437 23.1742 24.6971 23.848 25.1219C24.3671 25.4522 24.9019 25.7511 25.421 26.05C25.8118 26.241 26.1587 26.511 26.4398 26.8429C26.721 27.1748 26.9302 27.5614 27.0544 27.9783C27.1786 28.3951 27.215 28.8332 27.1613 29.2648C27.1076 29.6965 26.9649 30.1123 26.7424 30.486L25.7671 31.9804C25.5929 32.3881 25.2774 32.7192 24.8785 32.9128C24.4797 33.1065 24.0244 33.1496 23.5963 33.0344ZM5.77344 12.0654L7.34651 11.0901C7.7113 10.8534 8.12121 10.6948 8.55036 10.6245C8.97951 10.5542 9.41859 10.5736 9.83987 10.6815C10.2611 10.7894 10.6555 10.9834 10.998 11.2514C11.3405 11.5194 11.6237 11.8555 11.8297 12.2385C12.1286 12.8048 12.4275 13.3396 12.7579 13.8115C13.1826 14.4853 13.336 15.295 13.1871 16.0774C13.0382 16.8599 12.5981 17.5567 11.9556 18.0273L7.77123 20.9375C6.35466 18.8794 5.32087 16.5827 4.71949 14.1576C4.62486 13.7407 4.6783 13.3039 4.87061 12.9222C5.06293 12.5404 5.38214 12.2375 5.77344 12.0654Z" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.77148 20.9375C8.92745 22.7507 10.2893 24.424 11.83 25.9241C13.3301 27.4648 15.0034 28.8267 16.8166 29.9826" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo $phone; ?>
                    </p>
                <?php endif; ?>
                <?php if(!empty($email)) : ?>
                    <p>
                        <svg class="email" width="30" height="30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0228 2.2593C16.7659 2.09015 16.4651 2 16.1576 2C15.8501 2 15.5493 2.09015 15.2924 2.2593L2 11.4303L15.2924 20.2866C15.5493 20.4558 15.8501 20.5459 16.1576 20.5459C16.4651 20.5459 16.7659 20.4558 17.0228 20.2866L30.3152 11.4303L17.0228 2.2593Z" fill="#EBE9E3"/>
                            <path d="M30.3152 11.4303L17.0228 20.2866C16.7659 20.4558 16.4651 20.5459 16.1576 20.5459C15.8501 20.5459 15.5493 20.4558 15.2924 20.2866L2 11.4303M30.3152 11.4303V28.734C30.3152 29.1512 30.1495 29.5513 29.8544 29.8463C29.5594 30.1413 29.1593 30.3071 28.7421 30.3071H3.57307C3.15586 30.3071 2.75575 30.1413 2.46074 29.8463C2.16573 29.5513 2 29.1512 2 28.734V11.4303M30.3152 11.4303L17.0228 2.2593C16.7659 2.09015 16.4651 2 16.1576 2C15.8501 2 15.5493 2.09015 15.2924 2.2593L2 11.4303M19.933 18.3518L24.0229 22.4417M8.29226 22.4417L12.3822 18.3518" stroke="#55646C" stroke-width="3.14613" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo $email; ?>
                    </p>
                <?php endif; ?>
                <?php if(!empty($address)) : ?>
                    <p>
                        <svg class="location" width="30" height="30" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.625 9.8125C17.625 7.7405 16.8019 5.75336 15.3368 4.28823C13.8716 2.8231 11.8845 2 9.8125 2C7.7405 2 5.75336 2.8231 4.28823 4.28823C2.8231 5.75336 2 7.7405 2 9.8125C2 16.0625 9.8125 23.875 9.8125 23.875C9.8125 23.875 17.625 16.0625 17.625 9.8125Z" fill="#EBE9E3"/>
                            <path d="M15.9532 26.4375C16.027 26.6158 16.0642 26.8071 16.0626 27C16.0626 28.7188 13.2657 30.125 9.81255 30.125C6.35943 30.125 3.56255 28.7188 3.56255 27C3.56089 26.8071 3.59809 26.6158 3.67193 26.4375" stroke="#55646C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.625 9.8125C17.625 7.7405 16.8019 5.75336 15.3368 4.28823C13.8716 2.8231 11.8845 2 9.8125 2C7.7405 2 5.75336 2.8231 4.28823 4.28823C2.8231 5.75336 2 7.7405 2 9.8125C2 16.0625 9.8125 23.875 9.8125 23.875C9.8125 23.875 17.625 16.0625 17.625 9.8125Z" stroke="#55646C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.2086 13.6048V7.3125M7.0625 10.4586H13.3548" stroke="#55646C" stroke-width="2.15" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo $address; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="form_body">
            <?php echo $form; ?>
        </div>
    </div>
</section>