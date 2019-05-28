<?php if (have_rows('governance_list_group')):

$all_rows = count(get_field('governance_list_group'));
    $count = 1;

?>

    <div class="narrow my-5">

    <?php while ( have_rows('governance_list_group') ): the_row();
                
    $header = get_sub_field('header');
    

    ?>

    <div class="my-4">

        <?php if ($header): ?>
        <h3 class="h2">
            <?php echo $header; ?>
        </h3>
        <?php endif; ?>

        <h4><?php echo $all_rows; ?> / <?php echo $count; ?></h4>

        <ul class="extensible-list staff-list my-2">

            <?php if (have_rows('staff_person')): while (have_rows('staff_person')): the_row();

            $name = get_sub_field('name');
            $title = get_sub_field('title');
            $time = get_sub_field('time');

            ?>

            <li class="mb-2">
                <h4><?php echo $name; ?></h4>
                <p><em><?php echo $title; ?></em></p>
                <p><?php echo $time; ?></p>
            </li>

            <?php endwhile; endif; /* staff_person */ ?>

        </ul>

    </div>
    <!-- .my-4 -->

    <?php if ( $count < $all_rows) : ?>
    <hr class="narrow my-4">
    <?php endif; ?>
    
    <?php $count++; endwhile; /* governance_list_group */ ?>

<?php endif; /* governance_list_group */ ?>