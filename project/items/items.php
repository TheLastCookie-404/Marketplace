<? function DrawItemsFromDB($items) { ?>
	<div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
		<div class="w-full relative flex">
			<img class="w-full object-cover aspect-9/12" src="./assets/images/items/<? echo $items[1]; ?>" alt="">
			<div class="w-full grid grid-flow-col text-center text-2xl text-primary absolute top-0 p-3">
				<? if(!($items[2] == null || $items[2] == "")) { ?>
					<div class="h-11 justify-self-start aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
						<span><? echo $items[2]; ?></span>
					</div>
				<? } ?>
				<div class="btn btn-circle btn-primary hover:bg-primary h-11 justify-self-end aspect-square grid place-content-center p-2.5 group">
					<svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="group-hover:stroke-secondary" d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
		</div>
		<div class="uppercase text-ellipsis overflow-hidden"><? echo $items[3]; ?></div>
		<div class="text-xs">Коллекция 2023-2024</div>
		<div class="flex gap-2 text-base">
			<? if ($items[5] > 0 && $items[5] != null) { ?>
				<span class="text-secondary"><?= number_format($items[4] - ($items[4] / 100 * $items[5]), 0, '.', '.') ?> Тг.</span>
				<span class="line-through"><?= number_format($items[4], 0, '.', '.') ?> Тг.</span>
			<? } else { ?>
				<span><? echo number_format($items[4], 0, '.', '.') ?> Тг.</span>
			<? } ?>
		</div>
		<button 
			onclick="addIdToLocalStorage(<?= $items[0]; ?>)"
			href="./handler/loader.php?id=<?= $items[0] ?>" 
			class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</button>
	</div>
<? } ?>