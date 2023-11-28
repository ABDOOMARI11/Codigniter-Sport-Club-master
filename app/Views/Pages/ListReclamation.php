<div class="flex flex-col justify-center px-6 py-12 lg:px-8 h-[500px] text-xs md:text-sm lg:text-lg">
    <div class="">
        <!-- <img class="mx-auto h-10 w-auto" src="public/img/svg/logo.svg" alt="Your Company"> -->
        <h2 class="text-center  md:text-2xl text-lg  font-bold leading-9 tracking-tight text-gray-900">List of <span class="underline underline-offset-3 text-orange-500 ">Reclamation</span></h2>
    </div>

    <div class="mt-8 text-[10px]">
        <div class="bg-white border-2 border-orange-500 h-16 w-full rounded-md flex items-center justify-between px-4 gap-1">
            <div class="md:w-24 w-12 text-center ">Date</div>
            <div class="grow  text-center">Reclamation</div>
            <div class="md:w-36 w-16  text-center">Utilisateur</div>



            <div class="md:w-36 text-center rounded-md bg-red-300 md:px-3 px-1 md:py-1.5 md:text-sm  font-semibold leading-6 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600 ">Actions</div>


        </div>
        <div class="h-[250px]   overflow-auto py-2 rounded-md no-scrollbar space-y-2  ">

            <?php foreach ($data as $reclam) : ?>
                <div class="bg-white border-2 border-orange-500 h-16 w-full rounded-md flex items-center justify-between px-4 gap-1">
                    <div class="md:w-24 w-12  text-center"><?= $reclam['DateReclamation'] ?></div>
                    <div class="grow  text-center "><?= $reclam['CorpReclamation'] ?></div>
                    <div class="md:w-36 w-16 text-center"><?= $reclam['PseudoNom'] ?></div>
                    <div class="md:w-36 w-18 flex md:flex-row flex-col md:space-x-2  space-y-1">
                        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-300 md:px-3 md:py-1.5 px-1 md:text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600">
                            <a href="<?php echo base_url("reclame/edit/" . $reclam['NumReclamation']); ?>">
                                Edit
                            </a>
                        </button>
                        <button type="" class="flex w-full justify-center rounded-md bg-red-300 md:px-3 md:py-1.5 px-1 md:text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600"><a href="<?php echo base_url("/reclame/delete/" . $reclam['NumReclamation']); ?>">Delete</a></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</div>