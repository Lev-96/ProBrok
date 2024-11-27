<?php
/** @var  $ml */

$sectorArr = [
    'Մաքսային' => [
        'img' => 'image1.jpg',
        'text' => $ml->tr('product_customs')
    ],
    'Թույլատվություն' => [
        'img' => 'image2.jpg',
        'text' => $ml->tr('obtaining_permits')
    ],
    'Նախնական' => [
        'img' => 'image3.jpg',
        'text' => $ml->tr('preliminary_customs_declaration')
    ],
    'EAC' => [
        'img' => 'image4.jpg',
        'text' => $ml->tr('obtaining_conformity_certificates')
    ],
    'Դասակարգում' => [
        'img' => 'image5.jpg',
        'text' => $ml->tr('product_classification')
    ],
    'Վերամշակման' => [
        'img' => 'image6.jpg',
        'text' => $ml->tr('recycling')
    ],
    'Առաքում' => [
        'img' => 'image7.jpg',
        'text' => $ml->tr('cordial')
    ],
    'ԱՏԳ' => [
        'img' => 'image8.jpg',
        'text' => $ml->tr('preparation_documents_necessary_carrying_foreign_economic_activities')
    ],
    'Ապրանք' => [
        'img' => 'image9.jpg',
        'text' => $ml->tr('product_inspection')
    ],

]

?>
<div class="container-fluid">
    <section class=" d-flex align-items-center flex-column text-center">
        <div class="d-flex flex-column justify-content-center align-items-center  text-center section-text p-4">
            <h2 class="text-center"><?= $ml->tr('about') ?></h2>
            <h4 class="text-center"><?= $ml->tr('in_particular') ?></h4>
        </div>
    </section>
    <?php $index = 0; ?>
    <?php foreach ($sectorArr as $key => $sector): ?>
        <?php
        $alignmentClass = array_search($key, array_keys($sectorArr)) % 2 === 0 ? 'flex-row' : 'flex-row-reverse';
        ?>
        <section class="contentSection d-flex align-items-center <?= $index % 2 === 0 ? 'card-blue' : 'card-dark' ?> <?= $alignmentClass ?>" id="<?= $key ?>">
            <img src="./images/sectionImage/<?= $sector['img'] ?>" alt="Placeholder Image" class="section-image">
            <div class="d-flex flex-column section-text">
                <?= $sector['text'] ?>
            </div>
        </section>
        <?php $index++; ?>
    <?php endforeach; ?>
</div>

