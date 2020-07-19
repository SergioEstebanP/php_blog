<div class="container-fluid py-2 py-md-5 bg-white grid">
    <div class="container p-0">
        <div class="d-flex">
            <div class="d-flex flex-column columna1">
                <figure class="p-2 photo1" style="background:url(<?php echo $categories[0]['img'] ?>)" vinculo="<?php echo $categories[0]['route']?>">
                    <p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo $categories[0]['description'];?></p>
                </figure>
                <figure class="p-2 photo2" style="background:url(<?php echo $categories[1]['img'];?>)" vinculo="<? echo $categories[1]['route']?>">
                    <p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo $categories[1]['description']; ?></p>
                </figure>
                <figure class="d-block d-md-none p-2 photo6" style="background:url(<?php echo $categories[2]['img'];?>)" vinculo="<? echo $categories[2]['route']?>">
                    <p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo $categories[2]['description']; ?></p>
                </figure>
            </div>
            <div class="d-flex flex-column flex-fill columna2">
                <div class="d-block d-md-flex">
                    <figure class="p-2 flex-fill photo3" style="background:url(<?php echo $categories[3]['img'] ?>)" vinculo="<? echo $categories[3]['route']?>">
                        <p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo $categories[3]['description']; ?></p>
                    </figure>
                    <figure class="p-2 flex-fill photo4" style="background:url(<?php echo $categories[4]['img'];?>)" vinculo="<? echo $categories[4]['route']?>">
                        <p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo $categories[4]['description']; ?></p>
                    </figure>
                </div>
                <figure class="p-2 photo5" style="background:url(<?php echo $categories[5]['img'];?>)" vinculo="<? echo $categories[5]['route']?>">
                    <p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo $categories[5]['description']; ?></p>
                </figure>
            </div>
        </div>
    </div>
</div>

