<? function DrawItemsFromDB($table, $category) { ?>

<? foreach($table as $item){ ?>
    <? if($item[6] == $category){ ?>
    <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
        <div class="w-full relative flex">
        <img class="w-full object-cover aspect-9/12" src="./assets/images/items/<?echo $item[1];?>" alt="">
        <div class="w-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
            <div
            class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
            <span><?echo $item[2];?></span>
            </div>
            <div
            class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
            <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="group-hover:stroke-secondary"
                d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </div>
        </div>
        </div>
        <div class="uppercase text-ellipsis overflow-hidden"><?echo $item[3];?></div>
        <div class="text-xs">Коллекция 2023-2024</div>
        <div class="flex gap-2 text-base">
        <?if($item[5] > 0 && $item[5] != null) { ?>
            <span class="text-secondary"><?echo number_format($item[4] - ($item[4] / 100 * $item[5]), 0, '.', '.')?> Тг.</span>
            <span class="line-through"><?echo number_format($item[4], 0, '.', '.')?> Тг.</span>
        <? } else { ?>
            <span><?echo number_format($item[4], 0, '.', '.')?> Тг.
        <? } ?>
        
        </div>
        <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
    </div>
    <? } ?>
<? } ?>

<? } ?>