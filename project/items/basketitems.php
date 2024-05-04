<? function DrawBasketItemsFromDB($items) { ?>
	<div class="grid gap-5">
		<div class="flex xs:flex-row flex-col gap-5">
			<div class="xs:w-2/3 w-full flex gap-3">
				<img class="w-24 object-cover" src="./assets/images/items/<?= $items[1] ?>" alt="">
				<div class="flex flex-col gap-2 justify-between">
					<div class="text-sm max-h-14 text-ellipsis overflow-hidden"><?= $items[3] ?></div>
					<div class="icontent">
						<div class="text-xs mb-2">Размер:</div>
						<select name="size" class="select select-bordered w-full max-w-xs">
							<option value="x">M</option>
							<option value="xl">L</option>
							<option value="xl">XL</option>
							<option value="xxl">XXL</option>
						</select>
					</div>
				</div>
			</div>
			<div class="xs:w-1/3 w-full flex xs:flex-col flex-row justify-around">
				<div class="w-full flex xs:justify-end justify-center items-center ">
					<div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group" onclick="SubstarctValue('itemQuantity<?= $items[0] ?>', 1, 'price<?= $items[0] ?>', 'prices<?= $items[0] ?>');">
						<svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="group-hover:invert stroke-base-content" d="M0 1H7.5" />
						</svg>
					</div>
					<input id="itemQuantity<?= $items[0] ?>" class="input w-8 h-fit m-0 p-0 bg-none border-none pointer-events-none text-center" type="number" value="1" name="quantity" />
					<div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group" onclick="AddValue('itemQuantity<?= $items[0] ?>', 15, 'price<?= $items[0] ?>', 'prices<?= $items[0] ?>');">
						<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="group-hover:invert stroke-base-content" d="M0 4H8" />
							<path class="group-hover:invert stroke-base-content" d="M4 0V8" />
						</svg>
					</div>
				</div>
				<div class="w-full flex xs:justify-end justify-center items-center gap-2">
					<div class="grid gap-1">
						<div class="flex flex-col gap-x-5">
							<? if ($items[5] > 0 && $items[5] != null) { ?>
								<div class="text-secondary">
									<span id="price<?= $items[0] ?>" class="prices<?= $items[0] ?>"><? echo $items[4] - $items[4] / 100 * $items[5] ?> </span>
									<span>Тг.</span>
								</div>
								<div class="line-through">
									<span class="prices<?= $items[0] ?>"><? echo $items[4] ?></span> 
									<span>Тг.</span>
								</div>
							<? } else { ?>
								<span id="price<?= $items[0] ?>"><? echo $items[4] ?> <span>Тг.</span></span>
							<? } ?>
						</div>
					</div>
					<a href="../project/handler/delete.php?id=<?= $items[0] ?>" class="w-5 h-5 min-h-5 btn btn-circle btn-outline group">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="group-hover:invert stroke-base-content" d="M3.23389 8.88959L8.76555 3.11026" />
							<path class="group-hover:invert stroke-base-content" d="M3.11005 3.23413L8.88938 8.7658" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="divider"></div>
<? } ?>